@extends('Base')
@section('titulo', 'Alumnos')

@section('contenido')

    <div class="container">
        <div style="background-color:#1B396A" class="col-md-4 media rounded my-3 p-2d">
            <h5 style="background-color:#1B396A" class="text-white">Alumnos pertenecientes a la
                generacion: {{$generacion->nombre}}</h5>
        </div>
        <div class="row">

            <div class="col mt-3">


                @foreach($AlumnosGeneraciones as $item)
                    @if ($item->egresado == 1)

                    @else

                        @if ($item->visible == 1)
                            <div style="background-color:#1B396A" class="media rounded my-3 p-2d">
                                <div class="media-body p-2">
                                    <h5 class="mt-0 text-white">Nombre: {{ $item->nombre }}</h5>
                                    <p class="text-white">Numero de control: {{ $item->ncontrol }}</p>
                                    <p class="text-white">Generacion: {{ $item->generaciones->nombre }}</p>
                                    <p class="text-white">E-Mail: {{ $item->email }}</p>

                                </div>
                            </div>
                        @else
                            <h1>No se encontraron alumnos</h1>
                        @endif
                   @endif
                @endforeach

            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection
