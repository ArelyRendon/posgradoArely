@extends('BaseAdmin')
@section('titulo','Listado de Alumnos')

@section('contenido')

    <div class="row">
        <div class="col-md-2">
            @include('admin.opciones')
        </div>

        <div class="col-md-10">
            <div class="container text-center">
                <h1 style="color:black" class="display-4">Listado de Alumnos</h1>
                <a class="btn btn-success" href="{{route('alumnos.create')}}">Crear Nuevo Alumno</a>

                <hr>


                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Estatus</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <th>Nombre</th>
                                <th>NControl</th>
                                <th>Generacion</th>
                                <th>Email</th>
                                <th>Egresar</th>

                            </thead>
                            <tbody>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    @if($alumno->visible == 1)
                                        <td><a class="btn btn-outline-warning"
                                               href="{{route('desactivarAlumnos',$alumno->id)}}">Dasactivar</a>
                                        </td>
                                    @else
                                        <td><a class="btn btn-outline-primary"
                                               href="{{route('activarAlumnos',$alumno->id)}}">Activar</a></td>
                                    @endif
                                    <td><a class="btn btn-warning" href="{{route('alumnos.edit',$alumno->id)}}"><i
                                                    class="fa fa-pencil-square fa-2x"></i></a></td>
                                    <td>
                                        {!! Form::open(['route' => ['alumnos.destroy', $alumno->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('Eliminar alumno?')" class="btn btn-danger">
                                            <i class="fa fa-trash fa-2x"></i>
                                        </button>
                                        {!! Form::close() !!}


                                    </td>
                                    <td>{{$alumno->nombre}}</td>
                                    <td>{{$alumno->ncontrol}}</td>
                                    <td>{{$alumno->generaciones->nombre}}</td>
                                    <td>{{$alumno->email}}</td>

                                    @if($alumno->egresado == 0)
                                        <td><a class="btn btn-outline-warning"
                                               href="{{route('marcarEgresado',$alumno->id)}}">Egresar</a>
                                        </td>
                                    @else
                                        <td>Egresado</td>
                                    @endif

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