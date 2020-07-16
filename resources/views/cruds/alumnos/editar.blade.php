@extends('BaseAdmin')
@section('titulo','Editar un Alumno')

@section('contenido')
    <div class="container text-center">
        <h1>Editar Alumno</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($alumno, ['route' => ['alumnos.update', $alumno->id], 'method'=>'PUT']) !!}
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
            'placeholder'=>'Numero de control'
            ))
            !!}
        </div>

        <div class="form-group">
            <label>Generacion</label>
            {!! Form::select('idgeneracion', $generaciones, null,['class'=> 'form-control'] )!!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Email'
            ))
            !!}
        </div>





        {!! Form::submit('Guardar Alumno', array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
        <hr>
    </div>
@endsection
