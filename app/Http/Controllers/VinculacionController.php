<?php

namespace App\Http\Controllers;

use App\Vinculacion;
use Illuminate\Http\Request;

class VinculacionController extends Controller
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
        $vinculacion = Vinculacion::all();

        return view('cruds.vinculacion.index', compact('vinculacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cruds.vinculacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'nombre' => 'required|string|max:255',
            'archivo' => 'required'

        ]);
        $now = new \DateTime();
        $fecha = $now->format('Ymd-His');
        $archivo = $request->file('archivo');
        $organizacion = $request->get('nombre');
        $nombre = "";

        if ($archivo) {
            $extension = $archivo->getClientOriginalExtension();//extension del archivo
            $nombre = "vinculacion-" . "$organizacion" . "-" . $fecha . "." . $extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }
        $vinculo = Vinculacion::insert([
            'nombre' => $request->get('nombre'),
            'archivo' => $nombre,
            'visible' => 1
        ]);
        return redirect()->route('vinculacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vinculo = Vinculacion::find($id);
        return view('cruds.vinculacion.edit',compact('vinculo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'nombre' => 'required|string|max:255',
            'archivo' => 'required'

        ]);
        $now = new \DateTime();
        $fecha = $now->format('Ymd-His');
        $archivo = $request->file('archivo');
        $organizacion = $request->get('nombre');
        $nombre = "";

        if ($archivo) {
            $extension = $archivo->getClientOriginalExtension();//extension del archivo
            $nombre = "vinculacion-" . "$organizacion" . "-" . $fecha . "." . $extension;
            \Storage::disk('local')->put($nombre, \File::get($archivo));
        }

        $vinculo=Vinculacion::find($id);
        $vinculo->nombre = $request->get("nombre");
        if ($archivo) {
            $vinculo->archivo = $nombre;
        }
        $vinculo->save();
        return redirect()->route('vinculacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vinculo=Vinculacion::find($id);
        $vinculo->delete();
        return redirect()->route('vinculacion.index');
    }
}
