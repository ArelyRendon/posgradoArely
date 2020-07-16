@extends('Base')
@section('titulo', 'Titulo')

@section('contenido')
    <div class="row justify-content-center">
        <div style="background-color:#1B396A"  class="col-md-4 media rounded my-3 p-2d">
            <h1 style="background-color:#1B396A" class="text-white">Listado de docentes</h1>
        </div>
    </div>
    <div class="container">

        <div class="row mt-3">
            <div class="col">
                @foreach($docentes as $item)

                    <div class="card mt-2">
                        <div class="card-header">
                            Docente: {{$item->nombre}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Especialidad: {{$item->especialidad}}</h5>
                            <p class="card-text">E-Mail: {{$item->email}}</p>
                            <a style="background-color:#1B396A" href="{{route('Docente',$item->id)}}" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="col">
                <h1>informacion</h1>
            </div>
        </div>
    </div>





@endsection
