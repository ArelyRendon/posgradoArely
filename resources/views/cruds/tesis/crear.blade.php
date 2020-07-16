@extends('BaseAdmin')
@section('titulo','Crear una Tesis')

@section('contenido')
    <div class="container text-center">
        <h1>Registrar una Tesis</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => 'tesis.store', 'files'=> true]) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre de la Tesis'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::textArea('resumen', null, array(
            'class'=> 'ckeditor',
            'placeholder'=>'Resumen'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::text('temas', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Tema Central'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::text('año', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Año'
            ))
            !!}
        </div>
        <label>Archivo</label>
        {!! Form::file('archivo', array(
        'required'=>'required',
        'placeholder'=>'archivo'
        ))
        !!}
        <br>
        <label>Autor</label>
        <select name="egresado" class="form-control" required>
            <option value="">Seleccione la opcion</option>
            @foreach ($egresados as $egresado => $value)
                <option value="{{ $egresado }}"> {{ $value }}</option>
            @endforeach
        </select>
        <label>LGAC</label>
        <select name="lgac" class="form-control" required>
            <option value="">Seleccione la opcion</option>
            @foreach ($lgacs as $lgac => $value)
                <option value="{{ $lgac }}"> {{ $value }}</option>
            @endforeach
        </select>
        <label>Director</label>
        <select name="docente" class="form-control" required>
            <option value="">Seleccione la opcion</option>
            @foreach ($docentes as $docente => $value)
                <option value="{{ $docente }}"> {{ $value }}</option>
            @endforeach
        </select>


    <hr>

    {!! Form::submit('Guardar Tesis', array('class'=>'btn btn-primary'))!!}
    {!! Form::close() !!}
    <hr>

    </div>
@endsection