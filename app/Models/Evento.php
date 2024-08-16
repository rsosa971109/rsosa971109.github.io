<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'asignatura'=>'required',
        'grupo'=>'required',
        'grado'=>'required',
        'docente'=>'required',
        'horae'=>'required',
        'horas'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];

    protected $fillable=['title', 'asignatura','grupo','grado','docente','horae','horas','descripcion','start','end'];

}
