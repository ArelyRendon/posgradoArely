@extends('Base')
@section('titulo', 'Titulo')

@section('contenido')

    <h1 style="text-align: center;">Vinculaciones</h1>
    <p>El Instituto Tecnológico Superior de Tantoyuca, a través del Departamento de Servicio Social y Residencias Profesionales y del Departamento de Gestión Tecnológica y Vinculación, tiene contacto y realizan convenios de colaboración generales y/o específicos con Instituciones, Centros de Investigación, así como Empresas Públicas y Privadas, entre los que destacan:</p>



    <div class="row">
    @foreach($vinculaciones as $item)

            <div class="col-xs-6">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('archivos/'.$item->archivo.'')}}"width="500" height="250" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $item->nombre }}</h5>

        </div>
    </div>
            </div>

    @endforeach
    </div>

@endsection
