@extends('BaseAdmin')
@section('titulo','Editar una Generacion ')

@section('contenido')
    <div class="container text-center">
        <h1>Editar Generacion</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($generacion, ['route' => ['generaciones.update', $generacion->id], 'method'=>'PUT']) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre de la generacion'
            ))
            !!}

        </div>



        {!! Form::submit('Guardar Generacion', array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
        <hr>
    </div>
@endsection
