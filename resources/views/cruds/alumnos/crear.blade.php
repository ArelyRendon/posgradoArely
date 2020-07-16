@extends('BaseAdmin')
@section('titulo','Crear una Alumno')

@section('contenido')
    <div class="container text-center">
        <h1>Crear Alumno</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => 'alumnos.store', 'files'=> true]) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre del Alumno'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::text('ncontrol', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Numero de Control'
            ))
            !!}
        </div>
        <br>
        <label>Generacion</label>
        <select name="generacion" class="form-control" required>
            <option value="">Seleccione la opcion</option>
            @foreach ($generaciones as $generacion => $value)
                <option value="{{ $generacion }}"> {{ $value }}</option>
            @endforeach
        </select>
        <div class="form-group">
            {!! Form::text('email', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Correo electronico'
            ))
            !!}
        </div>


    {!! Form::submit('Guardar Alumno', array('class'=>'btn btn-primary'))!!}
    {!! Form::close() !!}
    <hr>
    </div>
@endsection
