@extends('BaseAdmin')
@section('titulo','Crear una generacion')

@section('contenido')
    <div class="container text-center">
        <h1>Crear Generacion</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => 'generaciones.store']) !!}
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
