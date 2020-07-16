<div class="container">

    <div class="dropdown-divider"></div>
    <h3 class="text-primary">Registrar nueva vinculacion</h3>
    <div class="dropdown-divider"></div>

    <p>
        Genera un nuevo perfil de vinculcion
    </p>

    {!! Form::open(['route' => 'vinculacion.store', 'files'=> true]) !!}
    <div class="form-group">
        <label>Nombre</label>
        {!! Form::text('nombre', null, array(
        'class' => 'form-control',
        'required'=>'required',
        'placeholder' => 'Nombre...'
     )) !!}
        <label>Archivo</label><br>
        {!! Form::file('archivo', array(
        'class' => 'form-control',
        'required'=>'required',
        'placeholder'=>'archivo'
        ))
        !!}
    </div>
    {!! Form::submit('Guardar vinculo', array(
        'class' => 'btn btn-primary'
    ))!!}
    {!! Form::close() !!}
    <hr>
</div>
