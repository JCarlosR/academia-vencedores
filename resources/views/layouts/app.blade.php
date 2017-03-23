<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('links')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div id="app">

  <!-- CABECERA -->
  <div class="row">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li class="divider">
        </li>
        <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" >
                Salir
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
    <!-- Nav Header -->
    <nav class="nav">
      <div class="nav-wrapper teal">
        <div class="row">
          <div class="">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            </a>
          </div>
          <div class="col s5 offset-s3">
            <a class="page-title" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
            
          </div>
          <div class="col s4">
            <ul class="right hide-on-med-and-down">
              @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Ingresar</a></li>
              <li><a href="{{ url('/register') }}">Registro</a></li>
              @else
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i>{{ Auth::user()->name }}</i></a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </nav>    
  </div>

  <!-- LATERAL -->
  <div class="row">               
           @if(auth()->user())
           <div class="col l3 ">
              <!-- Nav Lateral flotante -->
              <ul id="slide-out" class="side-nav">
                <li><a href="#!">VENCEDORES</a></li>
                <li><div class="divider"></div></li>      
                <li><a class="waves-effect" href="#!">Alumno<i class="material-icons">assignment_ind</i></a></li>
                <li><a class="waves-effect" href="#!">Docente<i class="material-icons">person_pin</i></a></li>
                <li><a class="waves-effect" href="#!">Curso<i class="material-icons">library_books</i></a></li>
                <li><a class="waves-effect" href="#!">Matricula<i class="material-icons">mode_edit</i></a></li>      
                <li><a class="waves-effect" href="#!">Notas<i class="material-icons">assignment_ind</i></a></li>
                <li><div class="divider"></div></li> 
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Gestion<i class="material-icons">settings</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">Docentes</a></li>
                          <li><a href="#!">Alumnos</a></li>
                          <li><a href="#!">Cursos</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Reportes<i class="material-icons">description</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">Docentes</a></li>
                          <li><a href="#!">Alumnos</a></li>
                          <li><a href="#!">Notas</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>  
              <!-- Nav Lateral estatico -->
              <ul id="nav-mobile" class="side-nav fixed" >
                <li><a href="/home">VENCEDORES</a></li>
                <li><div class="divider"></div></li>      
                <li><a class="waves-effect" href="/alumnos">Alumno<i class="material-icons">assignment_ind</i></a></li>
                <li><a class="waves-effect" href="/docentes">Docente<i class="material-icons">person_pin</i></a></li>
                <li><a class="waves-effect" href="/cursos">Curso<i class="material-icons">library_books</i></a></li>
                <li><a class="waves-effect" href="#!">Matricula<i class="material-icons">mode_edit</i></a></li>      
                <li><a class="waves-effect" href="#!">Notas<i class="material-icons">assignment_ind</i></a></li>
                <li><div class="divider"></div></li> 
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Gestion<i class="material-icons">settings</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">Docentes</a></li>
                          <li><a href="#!">Alumnos</a></li>
                          <li><a href="#!">Cursos</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header">Reportes<i class="material-icons">description</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">Docentes</a></li>
                          <li><a href="#!">Alumnos</a></li>
                          <li><a href="#!">Notas</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>      
            </div>
           <div class="col l9 ">         
                @yield('content')
           </div> 
           @else
           <div class="col s12 m6 l4 offset-l4 ">
                <br>
                @yield('content')
           </div>
           @endif
           
  </div> 

</div> 
    <!-- Scripts -->    
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    
    @yield('scripts')
</body>
</html>
