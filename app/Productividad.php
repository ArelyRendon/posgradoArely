<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productividad extends Model
{
    protected $table = 'productividades';
    protected $fillable = ['id', 'nombre','descripcion','archivo','visible','idocupacion','iddocente','idalumno','idlgac'];
    public $timestamps = true;
    public function ocupaciones(){
        return $this->belongsTo('App\Ocupacion','idocupacion','id');
    }
    public function alumnos(){
        return $this->belongsTo('App\Alumno','idalumno','id');
    }
    public function docentes(){
        return $this->belongsTo('App\Docente','iddocente','id');
    }
    public function lgacs(){
        return $this->belongsTo('App\LGAC','idlgac','id');
    }
}
