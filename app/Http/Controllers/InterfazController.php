<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Servicio;
use App\ServicioUser;

class InterfazController extends Controller
{
    public function get_landing_page()
    {
        return view('pages.landing');
    }

    public function get_login_page()
    {
        return view('auth.login');
    }

    public function get_register_page()
    {
        return view('auth.register');
    }

    public function get_user_profile()
    {
        return view('pages.profile.user-profile');
    }

    public function get_mydate_page() 
    {
        $servicios = Servicio::get();
        return view('pages.profile.cliente.mydate', compact('servicios'));
    }

    public function get_all_dates()
    {
        $citas = ServicioUser::get();
        foreach($citas as $cita){
            $cita->user = User::find($cita->user_id);
            $cita->servicio = Servicio::find($cita->servicio_id);
        }
        
        
        return view('pages.profile.admin.dates', compact('citas'));
    }

    public function get_tasks()
    {
        if(Auth::user())
        {
            $citas = ServicioUser::where('responsable_id', Auth::user()->id)->get();
            $events = [];
            foreach($citas as $cita){
                $events[] = \Calendar::event(
                    Servicio::find($cita->servicio_id)->tipo, //event title
                    false, //full day event?
                    new \DateTime($cita->fecha."".$cita->hora_inicio), //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
                    new \DateTime($cita->fecha."".$cita->hora_termino), //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
                    $cita->id, //optional event ID
                    [
                        'url' => '/details'."/".$cita->id,
                        'color' => "#".Servicio::find($cita->servicio_id)->color,
                        'cliente' => User::find($cita->user_id)->name." ".User::find($cita->user_id)->lastname,
                        'servicio' => Servicio::find($cita->servicio_id)->nombre,
                    ]
                );
            }
            

            $calendar = \Calendar::addEvents($events)
            ->setOptions([
                'lang' => 'es',
                'timeFormat' => 'LT',
                'navLinks' => true,
            ])->setCallbacks([
                'eventRender' => 'function(event, element) {element.find(".fc-title").append("<br/>" + event.cliente + "<br/>" + event.servicio );}',
            ]);
            return view('pages.profile.worker.tasks', compact('calendar'));
        }else{
            return redirect('/');
        }
    }

    
}
