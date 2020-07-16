@extends('BaseAdmin')
@section('titulo', 'Docentes')

@section('contenido')

    <div class="row">
        <div class="col-md-2">
            @include('admin.opciones')
        </div>

        <div class="col-md-10">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="dropdown-divider"></div>
                        <h1 style="color:black;text-align: center" class="display-4">Docentes Registrados</h1>
                        <a class="btn btn-success" href="{{route('docentes.create')}}">Crear Nuevo Docente</a>
                        <div class="dropdown-divider"></div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                                <th scope="col">Estatus</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($docentes as $docente)
                                <tr>
                                    <th scope="row">{{$docente->nombre}}</th>
                                    <td>{{$docente->especialidad}}</td>
                                    <td>{!! $docente->descripcion !!}</td>
                                    <td>{{$docente->email}}</td>
                                    <td><a class="btn btn-warning" href="{{route('docentes.edit',$docente->id)}}"><i
                                                    class="fa fa-pencil"></i></a></td>
                                    <td>{!! Form::open(['route' => ['docentes.destroy', $docente->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('Eliminar Docente?')" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}</td>

                                    @if($docente->visible == 1)
                                        <td><a class="btn btn-outline-warning"
                                               href="{{route('desactivarDocentes',$docente->id)}}">Dasactivar</a>
                                        </td>
                                    @else
                                        <td><a class="btn btn-outline-primary"
                                               href="{{route('activarDocentes',$docente->id)}}">Activar</a></td>
                                        @endif

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col">

                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
