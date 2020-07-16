<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Docente;
use App\Egresado;
use App\Generacion;
use App\LGAC;
use App\Productividad;
use App\Tesis;
use App\Vinculacion;

class InicioController extends Controller
{

    public function index()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        return view('inicio', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function ProcesoAdministrativo()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        return view('estaticas/procesoAdministrativo', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function PlanEstudios()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        return view('estaticas/PlanEstudios', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function PosgradoMI()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        return view('estaticas/PosgradoMI', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function AlumnosGeneraciones($id){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        $AlumnosGeneraciones  = Alumno::all()->where('idgeneracion', $id);
        $generacion = Generacion::find($id);

        return view('FrondEnd.alumnos.alumnosGeneraciones', compact('AlumnosGeneraciones','generacion',
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function Alumnos(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();


        return view('FrondEnd.alumnos.AllAlumnos', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function PerfilDocente($id){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        $docente = Docente::find($id);

        return view('FrondEnd.docente.perfil', compact('docente',
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }
    public function Productividadn($id){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        $productividad = Productividad::find($id);

        return view('FrondEnd.productividades.productividadesAlumnos', compact('productividad',
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }
    public function Tesin($id){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();

        $tesi = Tesis::find($id);

        return view('FrondEnd.tesis.tesisNombre', compact('tesi',
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }

    public function AllDocente(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();


        return view('FrondEnd.docente.AllDocentes', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }
    public function AllVinculacion(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();


        return view('FrondEnd.vinculaciones.AllVinculaciones', compact(
            'alumnos', 'docentes', 'generaciones', 'lgacs', 'tesis', 'vinculaciones', 'productividades'));
    }
    public function AllLgac(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $lgacs = $this->LGAC();
        $tesis = $this->Tesis();
        $vinculaciones = $this->Vinculacion();
        $productividades = $this->Productividad();


        return view('FrondEnd.lgacs.Alllgacs', compact(
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
