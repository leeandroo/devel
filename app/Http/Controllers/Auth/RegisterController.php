<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DetalleUsuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function register_new_client()
    {
        $this->validate(request(), [
            'rut' => 'required|max:10|string',
            'nombre' => 'required|max:20|string',
            'apellido' => 'nullable|max:20|string',
            'calle' => 'max:50',
            'numero_calle' => 'max:4',
            'telefono' => 'max:12',
            'email' => 'required|email|max:50|string|unique:user',
            'contraseña' => 'required|string|min:6|same:confirmar'
        ]);

        $user = User::create([
            'rut' => request()->get('rut'),
            'name' => request()->get('nombre'),
            'lastname' => request()->get('apellido'),
            'email' => request()->get('email'),
            'password' => bcrypt(request()->get('contraseña')),
            'type' => 'Cliente',
            'calle' => request()->get('calle'),
            'numero_calle' => request()->get('numero'),
            'telefono' =>  request()->get('telefono')
        ]);


        return redirect('/')->with('message', array('title' => '¡Genial!', 'body'=>'Tu cuenta de usuario a sido creada con exito'));
    }

    public function register_new_colaborator()
    {
        if(request()->get('tipo_usuario') == 'Cliente')
        {
            return redirect('/')->with('message', array('title' => '¡Genial!', 'body'=>'Tu cuenta de usuario a sido creada con exito'));
        }elseif(request()->get('tipo_usuario') == 'Trabajador')
        {
            return back()->with('message', array('title' => '¡Genial!', 'body'=>'Tu cuenta de trabajador a sido creada con exito'));
        }
    }
}
