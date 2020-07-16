<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Generacion;
class AlumnosController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::OrderBy('id','asc')->paginate(10);
        return view('cruds.alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generaciones = Generacion::orderBy('nombre','asc')->pluck('nombre','id');
        return view('cruds.alumnos.crear',compact('generaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'nombre' => 'required',
            'ncontrol' => 'required|string|max:255',
            'email' => 'string|max:255'


        ]);

        $alumno=Alumno::insert ([
            'nombre' =>$request->get('nombre'),
            'ncontrol' =>$request->get('ncontrol'),
            'idgeneracion' =>$request->get('generacion'),
            'email' =>$request->get('email'),
            'visible' => 1,
            'egresado' => 0
        ]);
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno= Alumno::find($id);
        $generaciones = Generacion::orderBy('nombre','asc')->pluck('nombre','id');
        return view('cruds.alumnos.editar',compact('alumno','generaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'nombre' => 'required',
            'ncontrol' => 'required|string|max:255',
            'email' => 'string|max:255',
        ]);
        $alumno=Alumno::find($id);
        $alumno->nombre = $request->get("nombre");
        $alumno->ncontrol = $request->get("ncontrol");
        $alumno->idgeneracion = $request->get("idgeneracion");
        $alumno->email = $request->get("email");
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno=Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
