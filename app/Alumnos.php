<?php

namespace caplicada;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table='alumnos';

    protected $primaryKey='id_alumno';

    public $timestamps=true;


    protected $fillable =[
    	'apellido',
    	'nombre',
    	'email',
    	'legajo'
    ];
}
