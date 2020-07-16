@extends('BaseAdmin')
@section('titulo','Listado de Productividades')

@section('contenido')
    <div class="row">
        <div class="col-md-2">
            @include('admin.opciones')
        </div>

        <div class="col-md-10">
            <div class="container text-center">
                <h1 style="color:black" class="display-4">Listado de Productividades</h1>
                <a class="btn btn-success" href="{{route('productividades.create')}}">Crear Nueva Productividad</a>

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
                                <th>Descripcion</th>
                                <th>Archivo</th>
                                <th>Ocupacion</th>
                                <th>Docente</th>
                                <th>Alumno</th>
                                <th>LGAC</th>

                            </thead>
                            <tbody>
                            @foreach($productividades as $productividad)
                                <tr>
                                    @if($productividad->visible == 1)
                                        <td><a class="btn btn-outline-warning"
                                               href="{{route('desactivarProductividad',$productividad->id)}}">Dasactivar</a>
                                        </td>
                                    @else
                                        <td><a class="btn btn-outline-primary"
                                               href="{{route('activarProductividad',$productividad->id)}}">Activar</a></td>
                                    @endif
                                    <td><a class="btn btn-warning" href="#"><i
                                                    class="fa fa-pencil-square fa-2x"></i></a></td>
                                    <td>
                                        {!! Form::open(['route' => ['productividades.destroy', $productividad->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('Eliminar tesis?')" class="btn btn-danger">
                                            <i class="fa fa-trash fa-2x"></i>
                                        </button>
                                        {!! Form::close() !!}


                                    </td>
                                    <td>{{$productividad->nombre}}</td>
                                    <td>{{$productividad->descripcion}}</td>

                                    <td>
                                        <a href="{{asset('archivos/'.$productividad->archivo.'')}}" target="_blank">Descargar</a>
                                        <embed src="{{asset('archivos/'.$productividad->archivo.'')}}" type="">
                                    </td>
                                    <td>{{$productividad->ocupaciones->nombre}}</td>
{{--                                    se verifica que campos traen valores--}}
                                    @if ($productividad->docentes == null)
                                        <td>---</td>
                                    @else
                                        <td>{{$productividad->docentes->nombre}}</td>
                                    @endif
                                    @if ($productividad->alumnos == null)
                                        <td>---</td>
                                    @else
                                        <td>{{$productividad->alumnos->nombre}}</td>
                                    @endif

                                    <td>{{$productividad->lgacs->nombre}}</td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


@endsection
