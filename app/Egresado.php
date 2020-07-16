<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $table = 'egresados';
    protected $fillable = ['id', 'nombre','idgeneracion','visible'];
    public $timestamps = true;
}
