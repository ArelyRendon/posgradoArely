@extends('Base')
@section('titulo', 'Titulo')

@section('contenido')
    <div class="row justify-content-md-center">
        <div style="background-color:#1B396A"  class="col-md-4 media rounded my-3 p-2d">
            <h1 style="background-color:#1B396A;text-align: center;" class="text-white">Tesis de Maestría en Ingenieria</h1>
        </div>
    </div>
    <h4 style="text-align: center;">{{$tesi -> nombre}}</h4>
    <!--Accordion wrapper-->
    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                   aria-expanded="false" aria-controls="collapseTwo1">
                    <h5 class="mb-0">Resumen<i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{!! $tesi -> resumen !!}</p>
                </div>
            </div>

        </div>
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                   aria-expanded="false" aria-controls="collapseTwo21">
                    <h5 class="mb-0">
                        Tema Principal y Año de Elaboración<i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$tesi->temas}}</p>
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$tesi->año}}</p>
                </div>
            </div>

        </div>
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo31"
                   aria-expanded="false" aria-controls="collapseTwo31">
                    <h5 class="mb-0">
                        Autor<i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo31" class="collapse" role="tabpanel" aria-labelledby="headingTwo31"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$tesi->alumnos->nombre}}</p>

                </div>
            </div>

        </div>
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo41"
                   aria-expanded="false" aria-controls="collapseTwo41">
                    <h5 class="mb-0">
                        Director de Tesis<i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo41" class="collapse" role="tabpanel" aria-labelledby="headingTwo41"
                 data-parent="#accordionEx1">
                <div class="card-body" style="text-align: center">

                    <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$tesi->docentes->nombre}}</p>
                </div>
            </div>

            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo5">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo51"
                       aria-expanded="false" aria-controls="collapseTwo51">
                        <h5 class="mb-0">
                            LGAC<i class="fa fa-angle-down fa-2x"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo51" class="collapse" role="tabpanel" aria-labelledby="headingTwo51"
                     data-parent="#accordionEx1">
                    <div class="card-body" style="text-align: center">

                        <p style="text-align: justify;padding-left: 14px;padding-right: 14px;font-family: Roboto">{{$tesi->lgacs->nombre}}</p>
                    </div>
                </div>

            </div>

            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo6">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo61"
                       aria-expanded="false" aria-controls="collapseTwo61">
                        <h5 class="mb-0">
                            Portada<i class="fa fa-angle-down fa-2x"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo61" class="collapse" role="tabpanel" aria-labelledby="headingTwo61"
                     data-parent="#accordionEx1">
                    <div class="card-body" style="text-align: center">

                        <img src="{{asset('archivos/'.$tesi->archivo.'')}}"width="100" height="150">
                    </div>
                </div>

            </div>


        </div>



@endsection