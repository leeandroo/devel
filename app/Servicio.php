<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicio";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable =[
    	'nombre',
        'user_id',
    	'nombre',
        'descripcion',
        'precio',
        'tipo',
        'estado',
        'color'
    ];

    protected $guarded =[

    ];
}
