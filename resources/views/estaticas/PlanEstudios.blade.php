@extends('Base')
@section('titulo', 'Titulo')

@section('contenido')

    <h1>Plan de estudios</h1>
    <!--Accordion wrapper-->
    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                   aria-expanded="false" aria-controls="collapseTwo1">
                    <h5 class="mb-0">
                        Retícula <i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered"> <thead>
                        <tr>
                            <th>Semestre I</th>
                            <th>Semestre II</th>
                            <th>Semestre II</th>
                            <th>Semestre IV</th>

                        </thead>
                        <tbody>
                        <tr>
                            <td>Seminario I 4 créditos</td>
                            <td>Seminario II 4 créditos</td>
                            <td>Seminario III 4 créditos</td>
                            <td>Tesis 40 créditos</td>
                        <tr>
                            <td>Estadística 6 créditos</td>
                            <td>Análisis Económico 6 créditos</td>
                            <td>Administración de la producción y las operaciones 6 créditos</td>
                            <td></td>
                        <tr>
                            <td>Investigación de operaciones 6 créditos</td>
                            <td>Asignatura Optativa II 6 créditos</td>
                            <td>Asignatura Optativa IV 6 créditos</td>
                            <td></td>
                        <tr>
                            <td>Asignatura Optativa I 6 créditos</td>
                            <td>Asignatura Optativa III 6 créditos</td>
                            <td></td>
                            <td></td>
                        <tr>
                            <td>22 créditos</td>
                            <td>22 créditos</td>
                            <td>16 créditos</td>
                            <td>40 créditos</td>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                   aria-expanded="false" aria-controls="collapseTwo21">
                    <h5 class="mb-0">
                        Asignaturas Básicas <i class="fa fa-angle-down fa-2x"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered"> <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Asignaturas</th>
                            <th>DOC (horas)</th>
                            <th>TIS (horas)</th>
                            <th>TP5 (horas)</th>
                            <th>Horas Totales</th>
                            <th>Créditos</th>

                        </thead>
                        <tbody>
                        <tr>
                            <td>Básicas</td>

                        <tr>
                            <td>MPING-0101</td>
                            <td>Matemáticas Aplicadas a la Ingeniería</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>
                        <tr>
                            <td>MPING-0102</td>
                            <td>Innovación y Sustentabilidad en la Ingeniería</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>
                        <tr>
                            <td>MPING-0103</td>
                            <td>Modelo Matemático</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>
                        <tr>
                            <td>MPING-0104</td>
                            <td>Estadística Aplicada en Diseños de experimento</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>
                        <tr>
                            <td>Seminarios</td>
                        <tr>
                        <tr>
                            <td>MPING-0301</td>
                            <td>Seminario I</td>
                            <td>16</td>
                            <td>20</td>
                            <td>100</td>
                            <td>136</td>
                            <td>4</td>
                        <tr>
                        <tr>
                            <td>MPING-0302</td>
                            <td>Seminario II</td>
                            <td>16</td>
                            <td>20</td>
                            <td>100</td>
                            <td>136</td>
                            <td>4</td>
                        <tr>
                        <tr>
                            <td>MPING-0303</td>
                            <td>Seminario III</td>
                            <td>16</td>
                            <td>20</td>
                            <td>100</td>
                            <td>136</td>
                            <td>4</td>
                        <tr>
                        <tr>
                            <td>Optativas para LGAC: Instrumentación y Control</td>
                        <tr>
                        <tr>
                            <td>MPING-0201</td>
                            <td>Control Electrónico de Potencia</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>
                        <tr>
                            <td>MPING-0202</td>
                            <td>Diseño de Sistemas Digitales Avanzados</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>
                        <tr>
                            <td>MPING-0203</td>
                            <td>Procesamiento Digital de Señales en Tiempo Real</td>
                            <td>48</td>
                            <td>20</td>
                            <td>100</td>
                            <td>168</td>
                            <td>6</td>
                        <tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->

        </div>
        <!-- Accordion card -->


    <!-- Accordion wrapper -->

@endsection
