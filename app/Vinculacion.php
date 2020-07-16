<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vinculacion extends Model
{
    protected $table = 'vinculaciones';
        protected $fillable = ['id', 'nombre','archivo','visible'];
        public $timestamps = true;
}
