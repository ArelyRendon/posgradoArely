@extends('Base')
@section('titulo', 'Titulo')

@section('contenido')
    <div class="row justify-content-md-center">
        <div style="background-color:#1B396A"  class="col-md-4 media rounded my-3 p-2d">
            <h1 style="background-color:#1B396A;text-align: center;" class="text-white">Productividad Academica</h1>
        </div>
    </div>
    <h4 style="text-align: center;">{{$productividad -> nombre}}</h4>
    <!--Accordion wrapper-->
    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                   aria-expanded="false" aria-controls="collapseTwo1">
                    <h5 class="mb-0">Descripcion <i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$productividad -> descripcion}}</p>
                </div>
            </div>

        </div>
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                   aria-expanded="false" aria-controls="collapseTwo21">
                    <h5 class="mb-0">
                        Nombre del Alumno <i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$productividad->alumnos->nombre}}</p>

                </div>
            </div>

        </div>
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo31"
                   aria-expanded="false" aria-controls="collapseTwo31">
                    <h5 class="mb-0">
                        LGAC <i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo31" class="collapse" role="tabpanel" aria-labelledby="headingTwo31"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$productividad->lgacs->nombre}}</p>

                </div>
            </div>

        </div>
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo41"
                   aria-expanded="false" aria-controls="collapseTwo41">
                    <h5 class="mb-0">
                        Documento<i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo41" class="collapse" role="tabpanel" aria-labelledby="headingTwo41"
                 data-parent="#accordionEx1">
                <div class="card-body" style="text-align: center">
                    <a class="btn btn-primary" href="{{asset('archivos/'.$productividad->archivo.'')}}" target="_blank">Descargar</a>
                    <embed src="{{asset('archivos/'.$productividad->archivo.'')}}" type="" >

                </div>
            </div>

        </div>



@endsection