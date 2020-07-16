@extends('BaseAdmin')
@section('titulo','Listado de Generaciones')

@section('contenido')

    <div class="row">
        <div class="col-md-2">
            @include('admin.opciones')
        </div>

        <div class="col-md-10">
            <div class="container text-center">
                <h1 style="color:black" class="display-4">Listado de Generaciones</h1>
                <a class="btn btn-success" href="{{route('generaciones.create')}}">Crear Nueva Generacion</a>

                <hr>


                <div class="contenidos">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Estatus</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <th>Nombre</th>

                            </thead>
                            <tbody>
                            @foreach($generaciones as $generacion)

                                <tr>
                                    @if($generacion->visible == 1)
                                        <td><a class="btn btn-outline-warning"
                                               href="{{route('desactivarGeneraciones',$generacion->id)}}">Dasactivar</a>
                                        </td>
                                    @else
                                        <td><a class="btn btn-outline-primary"
                                               href="{{route('activarGeneraciones',$generacion->id)}}">Activar</a></td>
                                    @endif

                                    <td><a class="btn btn-warning"
                                           href="{{route('generaciones.edit',$generacion->id)}}"><i
                                                    class="fa fa-pencil-square fa-2x"></i></a></td>
                                    <td>
                                        {!! Form::open(['route' => ['generaciones.destroy', $generacion->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('Eliminar Generacion?')" class="btn btn-danger">
                                            <i class="fa fa-trash fa-2x"></i>
                                        </button>
                                        {!! Form::close() !!}


                                    </td>
                                    <td>{{$generacion->nombre}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection