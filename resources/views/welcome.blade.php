<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
    --primary-color: rgb(38, 186, 165); /* Verde azulado */
    --secondary-color: rgb(55, 95, 122); /* Azul oscuro */
    --text-color-light: #f4f4f4;
    --text-color-dark: #333;
    --card-bg: rgba(255, 255, 255, 0.9);
    --hover-effect: rgba(38, 186, 165, 0.1);
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #e0e0e0; /* Un gris muy claro para el fondo */
    color: var(--text-color-dark);
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 0;
}

/* Header/Hero Section */
.hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: var(--text-color-light);
    text-align: center;
    padding: 80px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.hero h1 {
    font-size: 3.5em;
    margin-bottom: 15px;
    letter-spacing: 1px;
}

.hero p {
    font-size: 1.3em;
    opacity: 0.9;
}

/* Operations Section */
.operations-section {
    background-color: #f4f4f4;
    padding: 60px 0;
    text-align: center;
}

.operations-section h2 {
    font-size: 2.5em;
    color: var(--secondary-color);
    margin-bottom: 40px;
    position: relative;
    display: inline-block;
}

.operations-section h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background-color: var(--primary-color);
    margin: 10px auto 0;
    border-radius: 2px;
}

.operation-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.operation-card {
    background-color: var(--card-bg);
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    text-decoration: none;
    color: var(--text-color-dark);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    cursor: pointer;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.operation-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    background-color: var(--hover-effect);
}

.operation-card h3 {
    font-size: 1.8em;
    color: var(--secondary-color);
    margin-bottom: 10px;
}

.operation-card p {
    font-size: 1.1em;
    color: #666;
}

/* Generator Section */
.generator-section {
    background-color: var(--secondary-color);
    color: var(--text-color-light);
    padding: 60px 0;
    text-align: center;
}

.generator-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: var(--primary-color);
}

.generator-section p {
    font-size: 1.2em;
    margin-bottom: 30px;
    opacity: 0.9;
}

.generator-output {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 40px;
    min-height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.3em;
    color: var(--text-color-light);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
}

.placeholder-text {
    opacity: 0.7;
    font-style: italic;
}


/* Author Section */
.author-section {
    background-color: #fcfcfc;
    padding: 60px 0;
    text-align: center;
}

.author-section h2 {
    font-size: 2.5em;
    color: var(--secondary-color);
    margin-bottom: 40px;
    position: relative;
    display: inline-block;
}

.author-section h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background-color: var(--primary-color);
    margin: 10px auto 0;
    border-radius: 2px;
}

.author-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 25px;
    max-width: 700px;
    margin: 0 auto;
}

.author-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid var(--primary-color);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.author-bio {
    font-size: 1.15em;
    color: #555;
    line-height: 1.8;
}

/* Footer */
.footer {
    background-color: var(--secondary-color);
    color: var(--text-color-light);
    text-align: center;
    padding: 25px 0;
    margin-top: auto; /* Empuja el footer hacia abajo */
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer p {
    font-size: 1em;
    opacity: 0.8;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.8em;
    }

    .hero p {
        font-size: 1em;
    }

    .operations-section h2,
    .generator-section h2,
    .author-section h2 {
        font-size: 2em;
    }

    .operation-grid {
        grid-template-columns: 1fr; /* Stack cards on smaller screens */
    }

    .author-content {
        flex-direction: column;
    }

    .author-photo {
        margin-bottom: 15px;
    }
}

@media (max-width: 480px) {
    .hero h1 {
        font-size: 2em;
    }

    .hero p {
        font-size: 0.9em;
    }

    .operation-card {
        padding: 20px;
    }

    .operation-card h3 {
        font-size: 1.5em;
    }

    .operation-card p {
        font-size: 1em;
    }

    .generator-output {
        padding: 25px;
        font-size: 1.1em;
    }

    .author-bio {
        font-size: 1em;
    }
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMAMENTE</title>
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
    <header class="hero">
        <div class="container">
            <h1>SUMAMENTE</h1>
            <p>Generador de ejercicios propuestos</p>
        </div>
    </header>

      
    <main>
        <section id="operations" class="operations-section">
            <div class="container">
                <h2>Elige tu Operación</h2>
                <div class="operation-grid">
                    <a href="{{ route('mostrar.suma.vista') }}" class="operation-card" data-operation="suma">
                        <h3>Suma</h3>
                        <p>Genera ejercicios de adición.</p>
                    </a>
                    <a href="{{ route('mostrar.resta.vista') }}" class="operation-card" data-operation="resta">
                        <h3>Resta</h3>
                        <p>Crea problemas de sustracción.</p>
                    </a>
                    <a href="{{ route('mostrar.multiplicacions.vista') }}" class="operation-card" data-operation="multiplicacion">
                        <h3>Multiplicación</h3>
                        <p>Diseña ejercicios de producto.</p>
                    </a>
                    <a href="{{ route('mostrar.division.vista') }}" class="operation-card" data-operation="division">
                        <h3>División</h3>
                        <p>Elabora desafíos de cociente.</p>
                    </a>
                </div>
            </div>
        </section>

    

        <section id="about-author" class="author-section">
            <div class="container">
                <h2>Sobre el Autor</h2>
                <div class="author-content">
                    <img src="{{ asset('images/foto1.jpg') }}" alt="Foto del Autor" class="author-photo">
                    <p class="author-bio">¡Hola! Soy David Flores, el creador de esta herramienta. Mi pasión es simplificar tareas complejas y hacer que el aprendizaje sea más accesible y divertido. Espero que este generador te sea de gran utilidad.</p>
                </div>
            </div>
        </section>
    </main>




   <footer class="footer-10">
            <div class="container">
               
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



