{{-- @extends('adminlte::page') --}}

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEGEN</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilosite.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/estilositex.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/espaciado.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">

    
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="ITEGEN Logo" class="logo">
            <h1 class="app-name"></h1>
        </div>
        {{-- <p class="slogan">Facilitamos tu educación</p> --}}
        {{-- <a href="https://wa.me/59171039910" class="whatsapp-icon">
            <img src="{{ asset('images/wt.png') }}" alt="WhatsApp" width="500px">
        </a> --}}
    </header>

    <div class="spacer"></div>
    <div class="spacer"></div>

    <div class="spacer"></div>
    <div class="spacer"></div>


    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    
    <div >
        <section class="hero-section">
            <div class="hero-content-box">
                <h2>Bienvenido a ITEGEN</h2>
                <p>Descubre una nueva forma de generar ejercicios matemáticos de manera personalizada.</p>
                <button class="hero-btn">Iniciar</button>
            </div>
           
        </section>

        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-danger">
              <h3 class="widget-user-username">Alexander Pierce</h3>
              <h5 class="widget-user-desc">Founder & CEO</h5>
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
                    <h5 class="description-header">3</h5>
                    <span class="description-text">TURNOS</span>
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
    </div>

   
    
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITE - Generador de Operaciones Matemáticas</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f4f4f4;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #007BFF;
            color: white;
            padding: 15px 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        #hero {
            background: #004085;
            color: white;
            padding: 50px 20px;
        }
        .cta {
            padding: 10px 20px;
            background: #FFC107;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }
        .cta:hover {
            background: #E0A800;
        }
        section {
            padding: 40px 20px;
            background: white;
            margin: 20px 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .author-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .author-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .whatsapp-button {
            display: inline-block;
            padding: 10px 20px;
            background: #25D366;
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-size: 18px;
            margin-top: 10px;
        }
        .social-icons a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
            font-size: 24px;
        }
    </style>
</head>
<body>
    
    <!-- 1️⃣ Encabezado (Header) -->
    <header>
        <div class="logo">ITE</div>
        <nav>
            <ul>
                <li><a href="#hero">Inicio</a></li>
                <li><a href="#about">Sobre Nosotros</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#testimonials">Testimonios</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li><a href="#author">Acerca del Autor</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- 2️⃣ Sección Hero -->
    <section id="hero">
        <h1>Aprende Matemáticas de Forma Divertida</h1>
        <p>Genera ejercicios personalizados y mejora tu aprendizaje</p>
        <button class="cta">Empezar Ahora</button>
    </section>
    
    <!-- 3️⃣ Sobre Nosotros -->
    <section id="about">
        <h2>Quiénes Somos</h2>
        <p>ITE es un centro dedicado a la educación y apoyo escolar en matemáticas.</p>
    </section>
    
    <!-- 4️⃣ Servicios -->
    <section id="services">
        <h2>Nuestros Servicios</h2>
        <div class="services-container">
            <div class="service">📘 Clases Personalizadas</div>
            <div class="service">🎲 Juegos Matemáticos</div>
            <div class="service">📊 Preparación para Exámenes</div>
        </div>
    </section>
    
    <!-- 5️⃣ Testimonios -->
    <section id="testimonials">
        <h2>Testimonios</h2>
        <p>"ITE me ayudó a mejorar mis habilidades matemáticas!" - Juan</p>
    </section>
    
    <!-- 6️⃣ Preguntas Frecuentes (FAQ) -->
    <section id="faq">
        <h2>Preguntas Frecuentes</h2>
        <p>¿Cómo puedo generar ejercicios? - Solo selecciona tu nivel y tipo de operación.</p>
    </section>
    
    <!-- 8️⃣ Galería -->
    <section id="gallery">
        <h2>Nuestra Galería</h2>
        <div class="gallery-container">
            <div class="gallery-item">📷</div>
            <div class="gallery-item">📷</div>
            <div class="gallery-item">📷</div>
        </div>
    </section>
    
    <!-- Acerca del Autor -->
    <section id="author">
        <h2>Acerca del Autor</h2>
        <p>📌 Itenauta es un apasionado por la educación y la tecnología, con amplia experiencia en la enseñanza de matemáticas y el desarrollo de plataformas educativas innovadoras.</p>
    </section>

    <section id="author">
        <h2>Acerca del Autor</h2>
        <div class="author-container">
            <img src="itenauta.jpg" alt="Itenauta" class="author-img">
            <p>📌 Itenauta es un apasionado por la educación y la tecnología, con amplia experiencia en la enseñanza de matemáticas y el desarrollo de plataformas educativas innovadoras.</p>
            <a href="https://wa.me/59171039910" class="whatsapp-button">💬 Contactar en WhatsApp</a>
            <div class="social-icons">
                <a href="#">📘 Facebook</a>
                <a href="#">📸 Instagram</a>
                <a href="#">🐦 Twitter</a>
                <a href="#">🎥 YouTube</a>
                <a href="#">💼 LinkedIn</a>
            </div>
        </div>
    </section>
    
    <!-- 9️⃣ Whatsapp -->
    <a href="https://wa.me/123456789" class="whatsapp-icon">💬</a>
    
    <!-- 🔟 Pie de Página -->
    <footer>
        <p>&copy; 2025 ITE - Todos los derechos reservados</p>
        <p>Contacto: +123 456 789 | Email: contacto@ite.com</p>
        <div class="social-icons">
            <a href="#">📘 Facebook</a>
            <a href="#">📸 Instagram</a>
            <a href="#">🐦 Twitter</a>
            <a href="#">🎥 YouTube</a>
            <a href="#">💼 LinkedIn</a>
        </div>
    </footer>
    
</body>
</html> --}}


{{-- @extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
@stop
@section('title', 'Generador operanciones')


@section('content')
<div class="container">
    <div class="hero">
        <div class="welcome-text">
            <h1>¡Bienvenido al Generador de Operaciones Matemáticas!</h1>
            <p>Explora el mundo de las matemáticas de forma sencilla y atractiva. Haz clic en las operaciones para comenzar tu viaje.</p>
        </div>

        <div class="buttons-container">
            <a href="{{ route('mostrar.suma.vista') }}" class="operation-btn suma">Suma</a>
            <a href="{{ route('mostrar.resta.vista') }}" class="operation-btn resta">Resta</a>
            <a href="{{ route('mostrar.multiplicacions.vista') }}" class="operation-btn multiplicacion">Multiplicación</a>
            <a href="{{ route('mostrar.division.vista') }}" class="operation-btn division">División</a>
        </div>

        <img src="{{ asset('images/abstracto.webp') }}" alt="Operaciones Matemáticas" class="center-image">
    </div>
</div>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Generador de Operaciones Matemáticas | Diseñado por <span>Itenauta</span></p>
            <p>"Las matemáticas son el lenguaje con el que Dios escribió el universo." — Galileo Galilei</p>
            <div class="footer-links">
                <a href="https://www.tiktok.com/@ite_educabol">Tik tok</a>
                <a href="https://www.facebook.com/ite.educabol">Facebook</a>
                <a href="https://www.instagram.com/ite.educabol">Instagram</a>
                <a href="https://www.youtube.com/@ite_educabol">Youtube</a>
            </div>
        </div>
    </footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}


{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Operaciones Matemáticas</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
    background-color: #f4f4f4;
}

header {
    background: #2c3e50;
    color: white;
    padding: 20px;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

section {
    padding: 50px 20px;
}

.operaciones button {
    background: #3498db;
    color: white;
    padding: 10px 20px;
    margin: 10px;
    border: none;
    cursor: pointer;
    font-size: 18px;
}

.operaciones button:hover {
    background: #2980b9;
}

.configuracion {
    margin-top: 20px;
}

input, select {
    padding: 8px;
    margin: 5px;
}

button#generar {
    background: #27ae60;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

button#generar:hover {
    background: #2ecc71;
}

footer {
    background: #2c3e50;
    color: white;
    padding: 20px;
}

    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Generador de Operaciones Matemáticas</h1>
        <nav>
            <ul>
                <li><a href="#home">Inicio</a></li>
                <li><a href="#info">Cómo Funciona</a></li>
                <li><a href="#testimonios">Testimonios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección Principal -->
    <section id="home">
        <h2>Elige una Operación</h2>
        <div class="operaciones">
            <button class="operacion-btn" data-operacion="suma">➕ Suma</button>
            <button class="operacion-btn" data-operacion="resta">➖ Resta</button>
            <button class="operacion-btn" data-operacion="multiplicacion">✖️ Multiplicación</button>
            <button class="operacion-btn" data-operacion="division">➗ División</button>
        </div>

        <div class="configuracion">
            <label for="digitos">Número de dígitos:</label>
            <input type="number" id="digitos" min="1" max="5" value="2">
            
            <label for="dificultad">Dificultad:</label>
            <select id="dificultad">
                <option value="facilingo">Facilingo</option>
                <option value="facil">Fácil</option>
                <option value="normal">Normal</option>
                <option value="dificil">Difícil</option>
                <option value="ultradificil">Ultra Difícil</option>
                <option value="examen">Tipo Examen</option>
            </select>

            <button id="generar">Generar Ejercicios</button>
        </div>
    </section>

    <!-- Sección Información -->
    <section id="info">
        <h2>¿Cómo Funciona?</h2>
        <p>Personaliza los ejercicios según tu nivel y práctica con operaciones matemáticas adaptadas a tus necesidades.</p>
    </section>

    <!-- Testimonios -->
    <section id="testimonios">
        <h2>Testimonios</h2>
        <p>"Me ayudó mucho a mejorar mi velocidad en matemáticas." - Juan</p>
        <p>"Ideal para practicar antes de un examen." - María</p>
    </section>

    <!-- Contacto -->
    <section id="contacto">
        <h2>Contáctanos</h2>
        <form>
            <input type="text" placeholder="Nombre">
            <input type="email" placeholder="Correo">
            <textarea placeholder="Mensaje"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Pie de Página -->
    <footer>
        <p>&copy; 2025 Generador Matemático</p>
        <div class="sociales">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const botonesOperacion = document.querySelectorAll(".operacion-btn");
    const generarBtn = document.getElementById("generar");

    let operacionSeleccionada = "";

    botonesOperacion.forEach(btn => {
        btn.addEventListener("click", function () {
            operacionSeleccionada = this.dataset.operacion;
            alert("Operación seleccionada: " + operacionSeleccionada);
        });
    });

    generarBtn.addEventListener("click", function () {
        const digitos = document.getElementById("digitos").value;
        const dificultad = document.getElementById("dificultad").value;

        if (!operacionSeleccionada) {
            alert("Por favor, selecciona una operación.");
            return;
        }

        alert(`Generando ejercicios de ${operacionSeleccionada} con ${digitos} dígitos y dificultad ${dificultad}.`);
    });
});

    </script>

</body>
</html> --}}
