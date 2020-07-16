<?php

namespace App\Http\Controllers\Admin;

use App\Alumno;
use App\Docente;
use App\Egresado;
use App\Generacion;
use App\LGAC;
use App\Productividad;
use App\Tesis;
use App\Vinculacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        return view('admin.index', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    protected function Alumno()
    {
        return Alumno::all();
    }

    protected function Docente()
    {
        return Docente::all();
    }



    protected function Generacion()
    {
        return Generacion::all();
    }

    protected function LGAC()
    {
        return LGAC::all();
    }

    protected function Tesis()
    {
        return Tesis::all();
    }

    protected function Vinculacion()
    {
        return Vinculacion::all();
    }

    protected function Productividad()
    {
        return Productividad::all();
    }
}
