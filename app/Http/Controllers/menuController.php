<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Docente;
use App\Generacion;
use App\Productividad;
use App\Tesis;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class menuController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    // generaciones

    public function activarGeneraciones($id){
        $activar = Generacion::find($id);
        $activar->visible = 1;
        $activar->save();
        return redirect()->route('generaciones.index');
    }

    public function desactivarGeneraciones($id){
        $desactivar = Generacion::find($id);
        $desactivar->visible = 0;
        $desactivar->save();
        return redirect()->route('generaciones.index');
    }

    //Alumnos

    public function activarAlumnos($id){
        $activar = Alumno::find($id);
        $activar->visible = 1;
        $activar->save();
        return redirect()->route('alumnos.index');
    }

    public function desactivarAlumnos($id){
        $desactivar = Alumno::find($id);
        $desactivar->visible = 0;
        $desactivar->save();
        return redirect()->route('alumnos.index');
    }

    // Docentes

    public function activarDocentes($id){
        $activar = Docente::find($id);
        $activar->visible = 1;
        $activar->save();
        return redirect()->route('docentes.index');
    }

    public function desactivarDocentes($id){
        $desactivar = Docente::find($id);
        $desactivar->visible = 0;
        $desactivar->save();
        return redirect()->route('docentes.index');
    }

    // Tesis

    public function activarTesis($id){
        $activar = Tesis::find($id);
        $activar->visible = 1;
        $activar->save();
        return redirect()->route('tesis.index');
    }

    public function desactivarTesis($id){
        $desactivar = Tesis::find($id);
        $desactivar->visible = 0;
        $desactivar->save();
        return redirect()->route('tesis.index');
    }

    //Productividad



    public function desactivarProductividad($id){
        $desactivar = Productividad::find($id);
        $desactivar->visible = 0;
        $desactivar->save();
        return redirect()->route('productividades.index');
    }

    // Egresado
    public function marcarEgresado($id){
        $egresar = Alumno::find($id);
        $egresar->egresado = 1;
        $egresar->save();
        return redirect()->route('alumnos.index');
    }
}
