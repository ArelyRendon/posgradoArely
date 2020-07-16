<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $fillable = ['id', 'nombre','especialidad','descripcion','email','visible'];
    public $timestamps = true;
    public function productividad()
    {
        return $this->hasMany('App\Productividad');//El modelo Docente puede tener varias productividades academicas

    }
    public function tesis()
    {
        return $this->hasMany('App\Tesis');//El modelo Docente puede ser director de varias tesis8

    }
}

