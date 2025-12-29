<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Propuestos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Ejercicios Propuestos</a>
            <div class="ms-auto d-flex gap-2">
                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light">Registrarse</a>
            </div>
        </div>
    </nav>
    <main class="d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">
        <div class="card shadow p-5 w-100" style="max-width: 500px;">
            <div class="text-center mb-3">
                <svg width="60" height="60" fill="var(--primary-color)" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 8.5a.5.5 0 0 1-.5.5H8.5V11a.5.5 0 0 1-1 0V9H5a.5.5 0 0 1 0-1h2.5V5a.5.5 0 0 1 1 0v3H11a.5.5 0 0 1 .5.5z"/>
                </svg>
            </div>
            <h1 class="text-center mb-3">Ejercicios Propuestos</h1>
            <p class="text-center mb-4">Genera, almacena y revisa ejercicios de sumas para estudiantes y familias. Crea prácticos personalizados y consulta resultados fácilmente.</p>
        </div>
    </main>
    <footer class="text-center text-muted small py-3 mt-4">
        &copy; {{ date('Y') }} Ejercicios Propuestos
    </footer>
</body>
</html>
