@extends('BaseAdmin')
@section('titulo', 'Titulo')

@section('contenido')

    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <p>
            Edita el perfil del docente que seleccionaste
        </p>

        {!! Form::model($docente, ['route' => ['docentes.update', $docente->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            <label >Nombre</label>
            {!! Form::text('nombre', null, array(
                'class' => 'form-control',
                'required'=>'required',
                'placeholder' => 'Forma de pago...'
             )) !!}
            <label >Especialidad</label>
            {!! Form::text('especialidad', null, array(
                'class' => 'form-control',
                'required'=>'required',
                'placeholder' => 'Especialidad...'
             )) !!}
            <label>Descripcion</label>
            {!! Form::textarea('descripcion', null, array(
            'class' => 'ckeditor',
            'required'=>'required',
            'placeholder' => 'Descripcion...'
         )) !!}
            <label >Email</label>
            {!! Form::email('email', null, array(
                'class' => 'form-control',
                'required'=>'required',
                'placeholder' => 'Email...'
             )) !!}
        </div>
        {!! Form::submit('Guardar cambios', array(
            'class' => 'btn btn-primary'
        ))!!}
        {!! Form::close() !!}
        <hr>
    </div>


@endsection
