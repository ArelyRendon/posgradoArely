<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tesis;
use App\Alumno;
use App\Docente;
use App\LGAC;
class TesisController extends Controller
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
        $tesis = Tesis::OrderBy('id','asc')->paginate(10);
        return view('cruds.tesis.index', compact('tesis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egresados = Alumno::orderBy('nombre','asc')->pluck('nombre','id');
        $lgacs = LGAC::orderBy('nombre','asc')->pluck('nombre','id');
        $docentes = Docente::orderBy('nombre','asc')->pluck('nombre','id');

        return view('cruds.tesis.crear',compact('egresados','lgacs', 'docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [

            'nombre' => 'required|string|max:255',
            'resumen' => 'string|max:1000',
            'temas' => 'string|max:255',
            'año' => 'required|numeric',
            'archivo'=> 'mimes:jpeg,png'

        ]);
        $now = new \DateTime();
        $fecha =$now->format('Ymd-His');
        $año =$request->get('año');
        $archivo=$request->file('archivo');
        $nombre= "";

        if ($archivo) {
            $extension = $archivo->getClientOriginalExtension();//extension del archivo
            $nombre = "tesis-".$año."-".$fecha.".".$extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }
        $tesi=Tesis::insert ([
            'nombre' =>$request->get('nombre'),
            'resumen' =>$request->get('resumen'),
            'temas' =>$request->get('temas'),
            'año' =>$request->get('año'),
            'archivo' => $nombre,
            'idalumno' =>$request->get('egresado'),
            'idlgac' =>$request->get('lgac'),
            'iddocente' =>$request->get('docente'),
            'visible' => 1
        ]);
        return redirect()->route('tesis.index');
       
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
        $tesi= Tesis::find($id);
        $egresados = Alumno::orderBy('nombre','asc')->pluck('nombre','id');
        $lgacs = LGAC::orderBy('nombre','asc')->pluck('nombre','id');
        $docentes = Docente::orderBy('nombre','asc')->pluck('nombre','id');
        return view('cruds.tesis.editar',compact('tesi','egresados','lgacs','docentes'));
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

            'nombre' => 'required|string|max:255',
            'resumen' => 'string|max:1000',
            'temas' => 'string|max:255',
            'año' => 'required|numeric',
            'archivo'=> 'mimes:jpeg,png'

        ]);
        $now = new \DateTime();
        $fecha =$now->format('Ymd-His');
        $año =$request->get('año');
        $archivo=$request->file('archivo');
        $nombre= "";

        if ($archivo) {
            $extension = $archivo->getClientOriginalExtension();//extension del archivo
            $nombre = "tesis-".$año."-".$fecha.".".$extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }
        $tesi=Tesis::find($id);
        $tesi->nombre = $request->get("nombre");
        $tesi->resumen = $request->get("resumen");
        $tesi->temas = $request->get("temas");
        $tesi->año = $request->get("año");
        if ($archivo) {
            $tesi->archivo = $nombre;
        }
        $tesi->idegresado = $request->get("idegresado");
        $tesi->idlgac = $request->get("idlgac");
        $tesi->iddocente = $request->get("iddocente");
        $tesi->save();
        return redirect()->route('tesis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tesi=Tesis::find($id);
        $tesi->delete();
        return redirect()->route('tesis.index');
    }
}