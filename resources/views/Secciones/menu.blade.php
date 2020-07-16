<nav class="navbar navbar-expand-lg" style="background-color:#1B396A">
    <a class="title"><img src="{{asset('img/logo-itsta-white.png')}}" width="300" class="d-inline-block align-top"
                          alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <div class="row ml-xl-5">

                <div class="row">

                    <li class="nav-item ml-3">
                        <a class="nav-link" href="{{route('inicio')}}" style="color:white;" href="">Inicio</a>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{route('PlanEstudios')}}" style="color:white;" href="">Plan de
                            Estudios</a>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{route('PosgradoMI')}}" style="color:white;" href="">PosgradoMI</a>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{route('ProcesoAdministrativo')}}" style="color:white;" href="">Proceso
                            Administrativo</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{route('Vinculaciones')}}" style="color:white;" href="">Vinculacion</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{route('Lgacs')}}" style="color:white;" href="">Lgacs</a>
                    </li>

                    <div class="btn-group dropdown" >
                        <button style="background-color:#1B396A" type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            @if(auth()->user())
                                Bienvenido. {{auth()->user()->name}}
                            @else
                                Opciones
                            @endif
                        </button>
                        <div class="dropdown-menu " style="background-color:#1B396A" >
                            @if(auth()->user())
                                <a class="dropdown-item text-white" href="{{route('logout')}}">Cerrar session</a>
                                @if (auth()->user()->idperfil == 1)
                                    <a class="dropdown-item text-white" href="{{route('admin')}}">Panel de administracion</a>
                                @endif
                            @else
                                <a class="dropdown-item text-white" href="{{route('login')}}">Iniciar session</a>
                                <a class="dropdown-item text-white" href="{{route('register')}}">Registrarme</a>
                            @endif

                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle  text-white" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Alumnos</a>

                            <div class="dropdown-menu" style="background-color:#1B396A">

                                @foreach($generaciones as $item)
                                    @if ($item->visible == 1)
                                        <a class="dropdown-item text-white"
                                           href="{{route('AlumnosGeneraciones',$item->id)}}">{{$item->nombre}}</a>
                                    @endif
                                @endforeach
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="{{route('Alumnos')}}">Ver todos</a>
                            </div>

                        </li>
                    </div>


                    <div class="col">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Docentes</a>
                            <div class="dropdown-menu" style="background-color:#1B396A">

                                @foreach($docentes as $item)
                                    @if ($item->visible == 1)
                                        <a class="dropdown-item text-white"
                                           href="{{route('Docente',$item->id)}}">{{$item->nombre}}</a>
                                    @endif
                                @endforeach
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="{{route('Docentes')}}">Ver todos</a>
                            </div>
                        </li>
                    </div>

                    <div class="col">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Egresados</a>
                            <div class="dropdown-menu" style="background-color:#1B396A">

                                @foreach($alumnos as $item)
                                    @if($item->egresado == 1)
                                        <a class="dropdown-item text-white" href="#">{{$item->nombre}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Tesis</a>
                            <div class="dropdown-menu" style="background-color:#1B396A">

                                @foreach($tesis as $item)
                                    @if ($item->visible == 1)
                                        <a class="dropdown-item text-white" href="{{route('Tesi',$item->id)}}">{{$item->nombre}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Productividad</a>
                            <div class="dropdown-menu" style="background-color:#1B396A">

                                @foreach($productividades as $item)
                                    @if ($item->visible == 1)
                                        <a class="dropdown-item text-white" href="{{route('Productividad',$item->id)}}">{{$item->nombre}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    </div>


                </div>

            </div>
        </ul>

    </div>
</nav>
