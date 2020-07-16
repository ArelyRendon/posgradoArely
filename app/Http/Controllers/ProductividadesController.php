<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Productividad;
use App\Ocupacion;
use App\Alumno;
use App\Docente;
use App\LGAC;
class ProductividadesController extends Controller
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
        $productividades=Productividad::OrderBy('id','asc')->paginate(10);
        return view('cruds.productividades.index', compact('productividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ocupaciones = Ocupacion::orderBy('nombre','asc')->pluck('nombre','id');
        $alumnos = Alumno::orderBy('nombre','asc')->pluck('nombre','id');
        $docentes = Docente::orderBy('nombre','asc')->pluck('nombre','id');
        $lgacs = LGAC::orderBy('nombre','asc')->pluck('nombre','id');
        $productividades = Productividad::orderBy('nombre','asc')->pluck('nombre','id');


        return view('cruds.productividades.crear',compact('ocupaciones','alumnos', 'docentes','lgacs','productividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'nombre' => 'required|string|max:255',
            'descripcion' => 'string|max:2000',
            'archivo'=> 'mimes:pdf',


        ]);
        $now = new \DateTime();
        $fecha =$now->format('Ymd-His');
        $nombre =$request->get('nombre');
        $archivo=$request->file('archivo');
        $nombre= "";

        if ($archivo) {
            $extension = $archivo->getClientOriginalExtension();//extension del archivo
            $nombre = "investigacion-".$nombre."-".$fecha.".".$extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }

        $productividad=Productividad::insert ([
            'nombre' =>$request->get('nombre'),
            'descripcion' =>$request->get('descripcion'),
            'archivo' => $nombre,
            'idocupacion' => 1, //alumno
            'iddocente' =>null, //este debe de ser nulo
            'idalumno' =>$request->get('alumno'),
            'idlgac' =>$request->get('lgac'),
            'visible' => 1


        ]);
        return redirect()->route('productividades.index');
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
        $productividad= Productividad::find($id);
        $ocupaciones = Ocupacion::orderBy('nombre','asc')->pluck('nombre','id');
        $docentes = Docente::orderBy('nombre','asc')->pluck('nombre','id');
        $alumnos = Alumno::orderBy('nombre','asc')->pluck('nombre','id');
        $lgacs = LGAC::orderBy('nombre','asc')->pluck('nombre','id');
        return view('cruds.productividades.editar',compact('productividad','ocupaciones','alumnos','docentes','lgacs'));
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
            'descripcion' => 'string|max:2000',
            'archivo'=> 'mimes:pdf',


        ]);
        $now = new \DateTime();
        $fecha =$now->format('Ymd-His');
        $nombre =$request->get('nombre');
        $archivo=$request->file('archivo');
        $nombre= "";
        if ($archivo) {
            $extension = $archivo->getClientOriginalExtension();//extension del archivo
            $nombre = "tesis-".$nombre."-".$fecha.".".$extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }
        $productividad=Productividad::find($id);
        $productividad->nombre = $request->get("nombre");
        $productividad->descripcion = $request->get("descripcion");
        if ($archivo) {
            $productividad->archivo = $nombre;
        }
        $productividad->idocupacion = $request->get("idocupacion");
        $productividad->iddocente = $request->get("iddocente");
        $productividad->idalumno = $request->get("idalumno");
        $productividad->idlgac = $request->get("idlgac");

        $productividad->save();
        return redirect()->route('productividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productividad=Productividad::find($id);
        $productividad->delete();
        return redirect()->route('productividades.index');
    }
}
