<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use App\OrdenTrabajo;
use App\ServicioUser;
use App\Tiene;
use App\Insumo;
use App\Servicio;
use App\User;
use PDF;

class OTController extends Controller
{
    public function store($id, Request $request)
    {
        $cita = ServicioUser::find($id);
        $cita->fecha = $request->get('fecha');
        $cita->hora_inicio = $request->get('hora_inicio');
        $hora_termino = new \DateTime($cita->hora_inicio);
        $cita->hora_termino = $hora_termino->modify('+2 hours');
        $cita->responsable_id = $request->get('responsable');
        $cita->estado_cita = "Agendada";
        $cita->save();
        return back()->with('message', array('title' => '¡Solicitud agendada con exito!', 'body'=>'Se ha agendado una nueva cita.'));
    }

    public function get_details($id)
    {
        $cita = ServicioUser::find($id);
        $cita->user = User::find($cita->user_id);
        $cita->servicio = Servicio::find($cita->servicio_id);
        $cita->insumos = Insumo::all();
        return view('pages.profile.details', compact('cita'));
    }

    public function initialize_job(OrdenTrabajo $cita)
    {
        $ot = OrdenTrabajo::find($cita->idorden_trabajo);
        $ot->estado = 'En proceso';
        $ot->save();

        return back()->with('message', array('title' => '¡A trabajar!', 'body'=>'Se ha iniciado un nuevo proceso.'));
    }

    public function store_activities(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tarea' => 'required',
            'descripcion' => 'required|max:250'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $tarea = Tarea::create([
            'idorden_trabajo' => $request->get('idorden'),
            'nombre' => $request->get('tarea'),
            'descripcion' => $request->get('descripcion'),
            'estado' => 'Terminada'
        ]);

        return back()->with('message', array('title' => '¡Genial!', 'body'=>'Se ha agregado una nueva tarea.'));
    }

    public function store_supplies($id, Request $request)
    {
        $insumo = Insumo::find($request->get('insumo'));
        $validator = Validator::make($request->all(), [
            'cantidad' => 'required|max:'.$insumo->stock.'|numeric'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $tiene = Tiene::create([
            'idorden_trabajo' => $id,
            'idinsumo' => $request->get('insumo'),
            'cantidad' => $request->get('cantidad')
        ]);

        $insumo = Insumo::find($tiene->idinsumo);
        $insumo->stock = $insumo->stock - $tiene->cantidad;
        $insumo->save();

        $ot = ServicioUser::find($tiene->idorden_trabajo);
        $ot->precio_total = $ot->precio_total + ($tiene->cantidad*$insumo->precio);
        $ot->save();

        return back()->with('message', array('title' => '¡Genial!', 'body'=>'Se ha agregado un nuevo insumo.'));
    }

    public function delete_supplies(Request $request)
    {
        $tiene = Tiene::first($request->get('ot'));
        $insumo = Insumo::find($tiene->idinsumo);

        $insumo->stock = $insumo->stock + $tiene->cantidad;
        $insumo->save();

        $tiene->delete();
        return back();
    }

    public function delete_activities(Request $request)
    {
        $tarea = Tarea::first($request->get('ot'));
        $tarea->delete();

        return back();
    }

    public function finalize_job(Request $request)
    {
        $ot = OrdenTrabajo::first($request->get('ot'));
        $ot->observacion = $request->get('observacion');
        $ot->estado = 'Finalizado';
        $ot->save();

        $cita = Cita::find($ot->idcita);
        $cita->estado_cita = "Completada";
        $cita->save();

        return redirect('/worker-profile')->with('message', array('title' => '¡Genial!', 'body'=>'Has terminado tu trabajo.'));
    }

    public function download_ot($id)
    {
        $ot = ServicioUser::find($id);
        $ot->servicio = Servicio::find($ot->servicio_id);
        $ot->user = User::find($ot->user_id);
        
        $pdf = PDF::loadView('components.ot-pdf',compact('ot'));
        return $pdf->stream('ot-pdf.pdf');
    }
}
