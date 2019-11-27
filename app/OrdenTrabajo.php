<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    protected $table = "orden_trabajo";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $insumos;
    public $tareas;
    public $cita;
    public $user;
    
    protected $fillable =[
    	'cita_id',
        'user_id',
        'hora_inicio',
        'fecha',
        'precio',
        'estado'
    ];

    protected $guarded =[

    ];
}
