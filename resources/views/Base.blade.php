<!DOCTYPE html>
<html>
<head>

    <title>ITSTA - Posgrado - @yield('titulo')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- iconos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous"
    >
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>

{{--    Arely se unio al proyecto--}}
    {{--    Plantilla master--}}
</head>
<body>
@include('Secciones.menu')

{{--@if(\Session::has('mensaje'))--}}
{{--    @include('Secciones.mensajes')--}}
{{--@endif--}}

@yield('contenido')
@include('Secciones.footer')
{{--@if(Auth::check())--}}
{{--    @include('usuarios.modal')--}}
{{--@endif--}}
<!-- JQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>

{{--<script src="{{asset('js/main.js')}}"></script>--}}
</body>
</html>