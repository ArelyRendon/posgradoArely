@extends('BaseAdmin')
@section('titulo',' Registrar Docente')

@section('contenido')
    <div class="container text-center">
        <h1>Crear Docente</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => 'docentes.store', 'files'=> true]) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre del Docente'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::text('especialidad', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Especialidad en la que se desarrolla'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::textArea('descripcion', null, array(
            'class'=> 'ckeditor',
            'placeholder'=>'Pequeña Biografía'
            ))
            !!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Correo electronico'
            ))
            !!}
        </div>


        {!! Form::submit('Guardar Docente', array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
        <hr>
    </div>
@endsection
