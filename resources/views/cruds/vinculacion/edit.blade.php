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
            Edita el perfil de vinculacion
        </p>

        {!! Form::model($vinculo, ['route' => ['vinculacion.update', $vinculo->id], 'method' => 'PUT', 'files'=> true]) !!}
        <div class="form-group">
            <label>Nombre</label>
            {!! Form::text('nombre', null, array(
                'class' => 'form-control',
                'required'=>'required',
                'placeholder' => 'Forma de pago...'
             )) !!}
            <label>Archivo</label> <br>
            {!! Form::file('archivo', array(
            'class' => 'form-control',
            )) !!} <br>
        </div>
        {!! Form::submit('Guardar cambios', array(
            'class' => 'btn btn-primary'
        ))!!}
        {!! Form::close() !!}
        <hr>
    </div>


@endsection
