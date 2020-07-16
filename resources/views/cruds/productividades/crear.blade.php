@extends('BaseAdmin')
@section('titulo','Crear una Productividad')

@section('contenido')
    <div class="container text-center">
        <h1>Registrar Productividad Académica</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => 'productividades.store', 'files'=> true]) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre del trabajo'
            ))
            !!}
        </div>
{{--        se modifico para solo registrar alumnos--}}
        <div class="form-group">
            {!! Form::text('descripcion', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Descripcion del trabajo'
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

        <label>Alumno</label>
        <select name="alumno" class="form-control" required>
            <option value="">Seleccione la opcion</option>
            @foreach ($alumnos as $alumno => $value)
                <option value="{{ $alumno }}"> {{ $value }}</option>
            @endforeach
        </select>
        <br>
        <label>LGAC</label>
        <select name="lgac" class="form-control" required>
            <option value="">Seleccione la opcion</option>
            @foreach ($lgacs as $lgac => $value)
                <option value="{{ $lgac }}"> {{ $value }}</option>
            @endforeach
        </select>


        {!! Form::submit('Guardar Productividad', array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
        <hr>
    </div>
@endsection

