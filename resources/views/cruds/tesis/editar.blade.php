@extends('BaseAdmin')
@section('titulo','Editar una Tesis')

@section('contenido')
    <div class="container text-center">
        <h1>Editar Tesis</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($tesi, ['route' => ['tesis.update', $tesi->id], 'method'=>'PUT','files'=> true]) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre del Alumno'
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
        <div class="form-group">
            <input type="file" name="archivo" class="form-control">

        </div>

        <div class="form-group">
            <label>Autor</label>
            {!! Form::select('idegresado', $egresados, null,['class'=> 'form-control'] )!!}
        </div>
        <div class="form-group">
            <label>LGAC</label>
            {!! Form::select('idlgac', $lgacs, null,['class'=> 'form-control'] )!!}
        </div>
        <div class="form-group">
            <label>Director</label>
            {!! Form::select('iddocente', $docentes, null,['class'=> 'form-control'] )!!}
        </div>


        <hr>





        {!! Form::submit('Guardar Tesis', array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
        <hr>
    </div>
@endsection

