@extends('Base')
@section('titulo', 'Titulo')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h5 class="text-break">Alumnos</h5>
                @foreach($alumnos as $item)
                    @if ($item->egresado == 1)

                    @else
                    @if($item->visible == 1)
                        <div style="background-color:#1B396A" class="media rounded my-3 p-2d">
                            <div class="media-body p-2">
                                <h5 class="mt-0 text-white">Nombre: {{ $item->nombre }}</h5>
                                <p class="text-white">Numero de control: {{ $item->ncontrol }}</p>
                                <p class="text-white">Generacion: {{ $item->generaciones->nombre }}</p>
                                <p class="text-white">E-Mail: {{ $item->email }}</p>

                            </div>
                        </div>
                    @endif
                    @endif
                @endforeach

            </div>
            <div class="col"></div>
        </div>
    </div>

@endsection
