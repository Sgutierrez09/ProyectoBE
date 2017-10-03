 <div class="container-fluid" style="background:#2c3e50;">
    <nav class="navbar navbar-default" style="background:#2c3e50;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h2>Bienestar Estudiantil</h2>
        </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-nav nav" style="background:#2c3e50;" id="bs-example-navbar-collapse-1" style="margin-top: 10px">
            <li><a href="/home" ><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href="/preguntas"><span class="glyphicon glyphicon-file"></span> Formulario</a></li>
            <li><a href="#" ><span class="glyphicon glyphicon-stats"></span> Reportes</a></li>
            <li><a href="/inscripcion" ><span class="glyphicon glyphicon-plus"></span> Inscripción</a></li>
            <li><a href="/regnoticia" ><span class="glyphicon glyphicon-plus"></span> Registrar Noticia</a></li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}" class="glyphicon glyphicon-log-out"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </ul>
        </div>
      </div>
    </nav>
  </div>
