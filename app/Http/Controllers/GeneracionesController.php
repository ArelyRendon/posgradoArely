<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generacion;
class GeneracionesController extends Controller
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
        $generaciones = Generacion::OrderBy('id','asc')->paginate(10);
        return view('cruds.generaciones.index', compact('generaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cruds.generaciones.crear');
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

            'nombre' => 'required|string|max:255|unique:generaciones',

        ]);
        Generacion::insert ([
            'nombre' =>$request->get('nombre'),
            'visible' => 1

        ]);

        return redirect()->route('generaciones.index');
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
        $generacion= Generacion::find($id);
        return view('cruds.generaciones.editar', compact('generacion'));
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
            'nombre' =>'required',

        ]);
        $generacion = Generacion::find($id);
        $generacion->nombre = $request->get("nombre");


        $generacion->save();

        return redirect()->route('generaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generacion= Generacion::find($id);
        $generacion->delete();
        return redirect()->route('generaciones.index');
    }
}
