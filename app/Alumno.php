<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['id', 'nombre','ncontrol','idgeneracion','email','visible','egresado'];
    public $timestamps = true;
    public function generaciones(){
        return $this->belongsTo('App\Generacion','idgeneracion','id');
    }
    public function productividad()
    {
        return $this->hasMany('App\Productividad');//El modelo Alumnos puede tener varias productividades academicas

    }
}

