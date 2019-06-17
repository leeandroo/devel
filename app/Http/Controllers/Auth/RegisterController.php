<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DetalleUsuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function register()
    {
        $this->validate(request(), [
            'rut' => 'required|max:10|string',
            'nombre' => 'required|max:20|string',
            'apellido' => 'nullable|max:20|string',
            'direccion' => 'required|max:50',
            'telefono' => 'required|max:12',
            'email' => 'required|email|max:30|string|unique:user',
            'contraseña' => 'required|string|min:6|same:confirmar'
        ]);

        $type = 'Cliente';
        if(request()->get('tipo_cliente') == "Ninguno")
        {
            $type = 'Trabajador';
        }
        $user = User::create([
            'rut' => request()->get('rut'),
            'name' => request()->get('nombre'),
            'lastname' => request()->get('apellido'),
            'email' => request()->get('email'),
            'password' => bcrypt(request()->get('contraseña')),
            'type' => $type
        ]);
        
        $cliente = DetalleUsuario::create([
            'iduser' => $user->iduser,
            'direccion' => request()->get('direccion'),
            'telefono' => request()->get('telefono'),
            'tipo_cliente' =>  request()->get('tipo_cliente')
        ]);

        return redirect('/')->with('message', array('title' => '¡Genial!', 'body'=>'Tu cuenta de usuario a sido creada con exito'));
    }
}
