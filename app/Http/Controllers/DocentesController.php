<?php

namespace App\Http\Controllers;

use App\Docente;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DocentesController extends Controller
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
        $docentes = Docente::all();

        return view('cruds.docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cruds.docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar la informacion
        $this->validate($request, [
            'nombre' => 'required|string',
            'especialidad' => 'required',
            'descripcion' => 'required',
            'email' => 'required',
        ]);

        //Guardar esa informacion en la tabla
        $docentes = Docente::insert([
            'nombre' => $request->get('nombre'),
            'especialidad' => $request->get('especialidad'),
            'descripcion' => $request->get('descripcion'),
            'email' => $request->get('email'),
            'visible' => 1
        ]);

        return redirect()->route('docentes.index');
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
        $docente = Docente::find($id);
        return view('cruds.docentes.edit', compact('docente'));
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
            'nombre' => 'required|string',
            'especialidad' => 'required',
            'descripcion' => 'required',
            'email' => 'required',

        ]);
        $docente = Docente::find($id);
        $docente->nombre = $request->get("nombre");
        $docente->especialidad = $request->get("especialidad");
        $docente->descripcion = $request->get("descripcion");
        $docente->email = $request->get("email");

        $docente->save();

        return redirect()->route('docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}
