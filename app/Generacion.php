<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generacion extends Model
{
    protected $table = 'generaciones';
    protected $fillable = ['id', 'nombre','visible'];
    public $timestamps = true;

    public function alumno()
    {
        return $this->hasMany('App\Alumno');//El modelo Generacion puede tener muchos alumnos
    }
    public function egresado()
    {
        return $this->hasMany('App\Egresado');//El modelo Generacion puede tener muchos egresados
    }
}
