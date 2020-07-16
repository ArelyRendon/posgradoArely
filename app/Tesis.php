<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    protected $table = 'tesis';
    protected $fillable = ['id', 'nombre','resumen','temas','año','archivo','visible','idegresado','idlgac','iddocente'];
    public $timestamps = true;
    public function alumnos(){
        return $this->belongsTo('App\Alumno','idegresado','id');
    }
    public function lgacs(){
        return $this->belongsTo('App\LGAC','idlgac','id');
    }
    public function docentes(){
        return $this->belongsTo('App\Docente','iddocente','id');
    }
}
