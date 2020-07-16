@extends('BaseAdmin')
@section('titulo', 'Vinculacion')

@section('contenido')

    <div class="row">
        <div class="col-md-2" >
            @include('admin.opciones')
        </div>

        <div class="col-md-10">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="dropdown-divider"></div>
                        <h3 class="text-primary">Vinculacion</h3>
                        <div class="dropdown-divider"></div>
                        <table class="table table-bordered">
                            <thead>

                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vinculacion as $vinc)
                                <tr>
                                    <th scope="row">{{$vinc->nombre}}</th>
                                    <td><img src="{{asset('archivos/'.$vinc->archivo.'')}}"width="100"></td>
                                    <td><a class="btn btn-warning" href="{{route('vinculacion.edit',$vinc->id)}}"><i class="fa fa-pencil"></i></a></td>
                                    <td>{!! Form::open(['route' => ['vinculacion.destroy', $vinc->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onclick="return confirm('Eliminar?')" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        @include('cruds.vinculacion.create')
                    </div>

                </div>

            </div>
        </div>
    </div>



@endsection
