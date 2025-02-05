{{-- @extends('adminlte::page') --}}

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEGEN</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilosite.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/estilositex.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/espaciado.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/front.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/botones.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}"> 

    {{-- pie de pagina  --}}
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="{{ asset('css/pie/ionicons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/pie/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/pie/bootstrap.min.css') }}">

    {{--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% encabezado --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/header/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/header/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet"> --}}
    <!-- owl stylesheets --> 
    <link rel="stylesheet" href="{{ asset('css/header/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
    <div class="header_section">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                       <a class="nav-link" href="{{ route('mostrar.suma.vista') }}">Sumas</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('mostrar.resta.vista') }}">Restas</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('mostrar.multiplicacions.vista') }}">Multiplicacion</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('mostrar.division.vista') }}">División</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="https://wa.me/59171039910"><i class="fa-brands fa-whatsapp fa-beat fa-2x" style="color: #2ba81a;"></i></a>
                    </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                    <div class="user_icon"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                    <div class="user_icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                 </form>
                 <div class="call_btn"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Llamar : 60902299</span></a></div>
              </div>
           </nav>
        </div>
     </div>

   

        
        
               <!-- header section start -->
          <!-- banner section start -->
          <div class="banner_section layout_padding">
            <div class="container">
               <img src="images/isologo.png" class="banner_img">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">SUMAS</h1>
                              <div class="contact_bt"><a href="{{ route('mostrar.suma.vista') }}">Generar sumas</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">RESTAS</h1>
                              <div class="contact_bt"><a href="{{ route('mostrar.resta.vista') }}">Generar Restas</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">MULTIPLICACIONES</h1>
                              <div class="contact_bt"><a href="{{ route('mostrar.multiplicacions.vista') }}">Generar Multiplicaciones</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">DIVISIONES</h1>
                              <div class="contact_bt"><a href="{{ route('mostrar.division.vista') }}">Generar Divisiones</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

       

        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header azul">
              <h3 class="widget-user-username">David Flores</h3>
              <h5 class="widget-user-desc">Fundador & CEO ite</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="{{ asset('images/foto1.jpg') }}" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">16500</h5>
                    <span class="description-text">ESTUDIANTES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">TODAS LAS</h5>
                    <span class="description-text">MATERIAS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">15 AÑOS</h5>
                    <span class="description-text">EXPERIENCIA</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>


         <div class="card">
            <div class="card-header bg-success">
                Genera las operaciones básicas 
            </div>
            <div class="card-body">
                <div class="row p-4"> 
                    <div class="col-2"><a class="btn btn-outline-danger" href="{{ route('mostrar.suma.vista') }}">Suma</a></div>
                    <div class="col-1"></div>
                    <div class="col-2"><a class="btn btn-outline-success" href="{{ route('mostrar.resta.vista') }}">Resta</a></div>
                    <div class="col-1"></div>
                    <div class="col-2"><a class="btn btn-outline-info" href="{{ route('mostrar.multiplicacions.vista') }}">Multiplicación</a></div>
                    <div class="col-1"></div>
                    <div class="col-2"><a class="btn btn-outline-primary" href="{{ route('mostrar.division.vista') }}">División</a></div>
                  </div>
            </div>
         </div>

         
          <footer class="footer-10">
            <div class="container">
                {{-- <div class="row mb-5 pb-3 no-gutters">
                    <div class="col-md-4 mb-md-0 mb-4 d-flex">
                        <div class="conx con-1 w-100 py-5">
                            <div class="w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-mobile-screen fa-beat fa-2x" style="color: #26baa5;"></i>
                                </div>
                                <div class="text">
                                    <span>(+591) 71039910</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4 d-flex">
                        <div class="con con-2 w-100 py-5">
                            <div class="w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-mail"></span>
                                </div>
                                <div class="text">
                                    <span>info@ite.com.bo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4 d-flex">
                        <div class="con con-3 w-100 py-5">
                            <div class="w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-pin"></span>
                                </div>
                                <div class="text">
                                    <span>Calle 16 Oeste, Villa 1 de Mayo, Santa Cruz, Bolivia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">Acerca de ITE</h2>
                                <ul class="list-unstyled">
                                    <li><a href="https://ite.com.bo/" class="d-block">Página web</a></li>
                                    <li><a href="https://services.ite.com.bo/" class="d-block">Servicios</a></li>
                                    <li><a href="https://redes.ite.com.bo" class="d-block">Redes</a></li>
                                    <li><a href="https://www.facebook.com/ite.educabol" class="d-block">Facebook</a></li>
                                    <li><a href="https://www.tiktok.com/@ite_educabol" class="d-block">Tik Tok</a></li>
                                    <li><a href="https://www.instagram.com/ite.educabol/" class="d-block">Instagram</a></li>
                                    <li><a href="https://api.whatsapp.com/send/?phone=59171039910" class="d-block">Whatsapp</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">Servicios</h2>
                                <ul class="list-unstyled">
                                    <li><a href="https://services.ite.com.bo/modalidades/1" class="d-block">Inicial</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/2" class="d-block">Primaria</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/3" class="d-block">Secundaria</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/4" class="d-block">Pre universitario</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/5" class="d-block">Institutos</a></li>
                                    <li><a href="https://ite.com.bo/universitario" class="d-block">Universitario</a></li>
                                    <li><a href="https://ite.com.bo/programacion" class="d-block">Programación</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/7" class="d-block">Computación</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">services</h2>
                                <ul class="list-unstyled">
                                    <li><a href="https://services.ite.com.bo/modalidades/8" class="d-block">Cubo Rubik</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/9" class="d-block">Ajedrez</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/11" class="d-block">Dactilografía</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/12" class="d-block">Oratoria</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/13" class="d-block">Lectura Escritura</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/14" class="d-block">Súper Memoria</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/15" class="d-block">Robótica</a></li>
                                    <li><a href="https://services.ite.com.bo/modalidades/16" class="d-block">Programación</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-md-0 mb-4">
                        <h2 class="footer-heading">Suscríbete</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                                <ul class="list-unstyled">
                                    <li><a href="https://redes.ite.com.bo" class="d-block">Redes</a></li>
                                    <li><a href="https://www.facebook.com/ite.educabol" class="d-block">Facebook</a></li>
                                    <li><a href="https://www.tiktok.com/@ite_educabol" class="d-block">Tik Tok</a></li>
                                    <li><a href="https://www.instagram.com/ite.educabol/" class="d-block">Instagram</a></li>
                                    <li><a href="https://api.whatsapp.com/send/?phone=59171039910" class="d-block">Whatsapp</a></li>
                                </ul>
                            </div>
                            <span class="subheading"><a class="nav-link" href="https://wa.me/59171039910"><i class="fa-brands fa-whatsapp fa-beat fa-3x" style="color: #2ba81a;"></i></a></span>
                        </form>
                    </div>
                </div>
                <div class="row mt-5 pt-4 border-top">
                    <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
                        <p class="copyright mb-0 fa-1x">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados. | Desarrollado por David Flores
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-md-right">
                        <ul class="ftco-footer-social p-0">
                            {{-- <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
    
   
    <script src="{{ asset('js/pie/jquery.min.js') }}"></script>
    <script src="{{ asset('js/pie/popper.js') }}"></script>
    <script src="{{ asset('js/pie/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pie/main.js') }}"></script>

      <script src="{{ asset('js/header/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/header/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/header/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/header/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/header/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ asset('js/header/owl.carousel.js') }}"></script>
      <script>
         $('.owl-carousel').owlCarousel({
            loop:true,
            margin:35,
            nav:true,
            center: true,
            responsive:{
             0:{
                 items:1,
                    margin:0
                  },
                575:{
                    items:1,
                    margin:0
                },
                768:{
                    items:3,
                    margin:0
                },
                1000:{
                    items:3
                }
            }
         })   
      </script>   
</body>
</html>

 