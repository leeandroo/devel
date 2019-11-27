<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ServicioUser extends Pivot
{
    protected $table = "servicio_user";
    protected $primaryKey = "id";
    protected $user;
    protected $servicio;

    public $timestamps = false;


    protected $fillable =[
    	'user_id',
        'servicio_id',
    	'estado_whatsapp',
        'estado_cita',
        'descripcion',
        'fecha',
        'hora_inicio',
        'hora_termino',
        'responsable_id',
        'observacion',
        'precio_total'
    ];

    protected $guarded =[

    ];
}
