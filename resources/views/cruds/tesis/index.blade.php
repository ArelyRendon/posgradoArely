@extends('BaseAdmin')
@section('titulo','Listado de Tesis')

@section('contenido')

    <div class="row">
        <div class="col-md-2" >
            @include('admin.opciones')
        </div>

        <div class="col-md-10">
            <div class="container text-center">
                <h1 style="color:black" class="display-4">Listado de Tesis</h1>
                <a class="btn btn-success" href="{{route('tesis.create')}}">Crear Nueva Tesis</a>

                <hr>


                <div class="contenidos">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered"> <thead>
                            <tr>
                                <th>Estatus</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <th>Nombre</th>
                                <th>Resumen</th>
                                <th>Tema Central</th>
                                <th>Año</th>
                                <th>Portada</th>
                                <th>Autor</th>
                                <th>LGAC</th>
                                <th>Director</th>

                            </thead>
                            <tbody>
                            @foreach($tesis as $tesi)

                                <tr>
                                    @if($tesi->visible == 1)
                                        <td><a class="btn btn-outline-warning"
                                               href="{{route('desactivarTesis',$tesi->id)}}">Dasactivar</a>
                                        </td>
                                    @else
                                        <td><a class="btn btn-outline-primary"
                                               href="{{route('activarTesis',$tesi->id)}}">Activar</a></td>
                                    @endif
                                    <td><a class="btn btn-warning" href="{{route('tesis.edit',$tesi->id)}}"><i class="fa fa-pencil-square fa-2x"></i></a></td>
                                    <td>
                                        {!! Form::open(['route' => ['tesis.destroy', $tesi->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('Eliminar tesis?')" class="btn btn-danger">
                                            <i class="fa fa-trash fa-2x"></i>
                                        </button>
                                        {!! Form::close() !!}



                                    </td>
                                    <td>{{$tesi->nombre}}</td>
                                    <td>{{$tesi->resumen}}</td>
                                    <td>{{$tesi->temas}}</td>
                                    <td>{{$tesi->año}}</td>
                                    <td><img src="{{asset('archivos/'.$tesi->archivo.'')}}"width="100"></td>
                                    <td>{{$tesi->alumnos->nombre}}</td>
                                    <td>{{$tesi->lgacs->nombre}}</td>
                                    <td>{{$tesi->docentes->nombre}}</td>


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