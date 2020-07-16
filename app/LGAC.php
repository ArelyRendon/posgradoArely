<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LGAC extends Model
{
    protected $table = 'lgacs';
    protected $fillable = ['id', 'nombre','descripcion','visible'];
    public $timestamps = true;
    public function tesis()
    {
        return $this->hasMany('App\Tesis');//El modelo LGAC puede tener varias tesis

    }
    public function productividad()
    {
        return $this->hasMany('App\Productividad');//El modelo LGAC puede tener varias productividades academicas

    }
}
