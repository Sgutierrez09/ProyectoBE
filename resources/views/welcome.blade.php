<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/boostrap.css" rel="stylesheet">
        <link href="/css/thecss.css" rel="stylesheet">
        <link href="/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="{{asset('js/jquery.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/thejs.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>

        <title>Bienestar Estudiantil</title>

    </head>
  <body id="page-top" class="index">
      <div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menú <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Bienestar Estudiantil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                      @if (Route::has('login'))
                          <div class="top-right links">
                              @if (Auth::check())
                                  <a href="{{ url('/home') }}">Inicio</a>
                              @else
                                  <a href="{{ url('/login') }}">Iniciar Sesión</a>
                              @endif
                          </div>
                      @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section style="padding-bottom:10px">
        @include('service_view.carousel')
    </section>
    <section id="about" style="padding-top:10px; margin-bottom: 20px;">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-info">
                  <div class="panel-heading"><h3><center><strong>Información del Departamento</strong></center></h3></div>
                    <div class="panel-body">
                      <div class="col-md-8">
                        <strong><center><h4>Generalidades</h4></center></strong><br>
                        <p class="text-justify" style="font-size:18px;">La Dirección de Bienestar Estudiantil es la unidad administrativa responsable de desarrollar programas de orden académico,
                          económico y de promoción social que contribuyan a la formación integral de los estudiantes de la Universidad Tecnológica de Panamá. <br>
                          Sus planes, programas, proyectos y actividades se ejecutan a nivel nacional por un grupo de profesionales idóneos con profunda vocación
                          de servicios, comprometidos con la promoción de los valores institucionales y con el desarrollo de la sensibilidad social y ciudadana. <br>
                          El recurso humano responsable de atender a la población estudiantil es especializado, dependiendo de los diferentes programas que ofrece,
                          basado en las necesidades y recursos que se tienen en cada centro de estudio.</p>


                        <div class="row">
                          <div class="col-md-12">
                            <strong><center><h4>Objetivos</h4></center></strong><br>
                              <div class="col-md-6 ">
                                <center><img src="images/111.jpg" alt="..." class="img-thumbnail lsp"></center><br>
                              </div>
                              <div class="col-md-6">
                                <center><img src="images/22.jpg" alt="..." class="img-thumbnail lsp"></center><br>
                              </div>
                            </div>
                          </div>

                            <ul class="text-justify" style="font-size:18px;"><li>Estimular y contribuir a la óptima formación de los estudiantes que ingresen a la Institución,
                              mediante el desarrollo de programas y actividades que faciliten y enriquezcan su experiencia universitaria.</li> <br>
                              <li>Conocer las características de la población estudiantil con la finalidad de lograr una mejor adaptación, ubicación y utilización de los
                              recursos humanos en beneficio del educando.</li><br>
                              <li>Brindar atención personal y asesoramiento académico a los estudiantes.</li></ul>
                        </div>


                    <div class="col-md-4">
                    <div class="panel panel-default">
                          <div class="panel-heading"><h4><center><span class="glyphicon glyphicon-bullhorn">&nbsp;&nbsp;</span><strong>Noticias</strong></center></h4></div>
                              <div class=" col-md-12 col-md-offset-0">
                                  <div class="panel-body">
                                    <div class="row">
                                      <form class="form-horizontal" role="form" method="POST" action="{{ url('mosnoticia')}}" >
                                        <div class="col-md-12">
                                          <div class="row">
                                            @foreach($notis as $noti)
                                                <h4>{{$noti->titulo}}</h4>
                                                <img src="imgNoticias/{{$noti->urlimgnot}}" class="img-responsive" alt="Responsive image" style="width:300px; height:150px;">
                                                <div class="">
                                                  <p class="text-justify">{{$noti->descripcion}}</p>
                                                  <hr/>
                                                </div>
                                            @endforeach
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Footer -->
  <footer class="text-center">
      <div class="footer-above">
          <div class="container">
              <div class="row">
                  <div class="footer-col col-md-4">
                      <h5>Ubicación</h5>
                      <p style="font-size:14px;">Avenida 6a Oeste, David, Panamá
                          <br>Edificio B, primera oficina</p><br>

                      <h6>Contáctanos</h6>
                      <ul class="list-inline">
                          <li>
                              <a href="https://www.facebook.com/paginautp" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                          </li>
                          <li>
                              <a href="https://twitter.com/utppanama" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                          </li>
                          <li>
                              <a href="https://www.youtube.com/user/UTPPanama" class="btn-social btn-outline"><span class="sr-only">YouTube</span><i class="fa fa-fw fa-youtube-square"></i></a>
                          </li>
                          </li>
                      </ul>
                  </div>
                  <div class="footer-col col-md-4">
                      <h5>Desarrollado por</h5>
                      <img src="images/33.png" alt="..." style="width:200px; height:100px; text-align:left" class="lsp">
                  </div>
                  <div class="footer-col col-md-4">
                      <h5>Gestionado por</h5>
                      <img src="images/GITCE.png" alt="..." style="width:300px; height:100px; text-align:left" class="lsp">
                  </div>
              </div>
          </div>
      </div>
      <div class=" footer-below">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      Copyright &copy; Your Website 2017
                  </div>
              </div>
          </div>
      </div>
  </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
</body>
</html>
