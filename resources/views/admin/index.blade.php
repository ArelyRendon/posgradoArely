@extends('BaseAdmin')
@section('titulo', 'Titulo')


@section('contenido')
    @include('Secciones.menu')

    <div class="container text-center">
        <h1>Panel de Administracion <img height="50" src="https://itsta.edu.mx/wp-content/uploads/2019/10/Logos-Oficiales_Mesa-de-trabajo-1.png" alt=""></h1>
    </div>
    <div class="card-group">

        <div class="card text-center">
            <div class="card-header">
                Panel de administracion alumnos
            </div>
            <div class="card-body">
                <img height="100px"
                     src="{{asset('img/iconos/estudiantes.png')}}" alt="">

                <a href="{{route('alumnos.index')}}" class="btn btn-primary">Entrar</a>
            </div>

        </div>

        <div class="card text-center">
            <div class="card-header">
                Panel de administracion docentes
            </div>
            <div class="card-body">
                <img height="100px"
                     src="{{asset('img/iconos/profesor.png')}}" alt="">
                <a href="{{route('docentes.index')}}" class="btn btn-primary">Entrar</a>
            </div>

        </div>

        <div class="card text-center">
            <div class="card-header">
                Panel de administracion generaciones
            </div>
            <div class="card-body">
                <img height="100px"
                     src="{{asset('img/iconos/libro.png')}}" alt="">
                <a href="{{route('generaciones.index')}}" class="btn btn-primary">Entrar</a>
            </div>

        </div>


    </div>

    <div class="card-group">



        <div class="card text-center">
            <div class="card-header">
                Panel de administracion tesis
            </div>
            <div class="card-body">
                <img height="100px"
                     src="{{asset('img/iconos/investigacion.png')}}" alt="">
                <a href="{{route('tesis.index')}}" class="btn btn-primary">Entrar</a>
            </div>

        </div>

        <div class="card text-center">
            <div class="card-header">
                Panel de administracion vinculacion
            </div>
            <div class="card-body">
                <img height="100px"
                     src="{{asset('img/iconos/corporativo.png')}}" alt="">
                <a href="{{route('vinculacion.index')}}" class="btn btn-primary">Entrar</a>
            </div>

        </div>

        <div class="card text-center">
            <div class="card-header">
                Panel de administracion productividades
            </div>
            <div class="card-body">
                <img height="100px"
                     src="{{asset('img/iconos/corporativo.png')}}" alt="">
                <a href="{{route('productividades.index')}}" class="btn btn-primary">Entrar</a>
            </div>

        </div>
    </div>




@endsection
