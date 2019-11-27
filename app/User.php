<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "user";
    protected $primaryKey = "id";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'password',
        'name',
        'lastname',
        'rut',
        'type',
        'descripcion',
        'profesion',
        'nacionalidad',
        'nacimiento',
        'telefono',
        'calle',
        'imagen',
        'numero_calle'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function servicios()
    {
        return $this->belongsToMany('App\Servicio')->withPivot("estado_whatsapp", "estado_cita", "descripcion");
    }
}
