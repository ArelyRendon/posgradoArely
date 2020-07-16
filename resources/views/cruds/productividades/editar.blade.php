@extends('BaseAdmin')
@section('titulo','Editar una Productividad')

@section('contenido')
    <div class="container text-center">
        <h1>Editar Productividad</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($productividad, ['route' => ['productividades.update', $productividad->id], 'method'=>'PUT']) !!}
        <div class="form-group">
            {!! Form::text('nombre', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Nombre del trabajo'
            ))
            !!}

        </div>
        <div class="form-group">
            {!! Form::text('descripcion', null, array(
            'class'=> 'form-control',
            'required'=>'required',
            'placeholder'=>'Descripcion del trabajo'
            ))
            !!}
        </div>
        <div class="form-group">
            <input type="file" name="archivo" class="form-control">
        </div>
        <div class="form-group">
            <label>Ocupacion/label>
            {!! Form::select('idocupacion', $ocupaciones, null,['class'=> 'form-control'] )!!}
        </div>

        <div class="form-group">
            <label>Alumno</label>
            {!! Form::select('idalumno', $alumnos, null,['class'=> 'form-control'] )!!}
        </div>

        {!! Form::submit('Guardar Productividad', array('class'=>'btn btn-primary'))!!}
        {!! Form::close() !!}
        <hr>
    </div>
@endsection
