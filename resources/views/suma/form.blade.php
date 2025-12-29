<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Sumas - Ejercicios Propuestos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <style>
        .form-card {
            border: 2px solid var(--primary-color);
            border-radius: 1.5rem;
            box-shadow: 0 4px 16px rgba(38,186,165,0.10);
            background: #fff;
        }
        .form-card .card-header {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: var(--text-light);
            border-radius: 1.5rem 1.5rem 0 0;
        }
        .form-label {
            color: var(--secondary-color);
            font-weight: 500;
        }
        .btn-primary {
            background: var(--primary-color);
            border: none;
        }
        .btn-primary:hover {
            background: var(--secondary-color);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Ejercicios Propuestos</a>
            <div class="ms-auto d-flex gap-2">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Cerrar sesión</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card form-card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Generador de Sumas</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('sumas.generar') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="cantidad_sumandos" class="form-label">Cantidad de sumandos</label>
                                <input type="number" name="cantidad_sumandos" id="cantidad_sumandos" class="form-control" min="2" required>
                            </div>
                            <div class="mb-3">
                                <label for="digitos_sumandos" class="form-label">Dígitos en sumandos</label>
                                <input type="number" name="digitos_sumandos" id="digitos_sumandos" class="form-control" min="1" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad_sumas" class="form-label">Cantidad de sumas</label>
                                <input type="number" name="cantidad_sumas" id="cantidad_sumas" class="form-control" min="1" required>
                            </div>
                            <div class="mb-4">
                                <label for="dificultad" class="form-label">Dificultad</label>
                                <select name="dificultad" id="dificultad" class="form-select" required>
                                    <option value="FACILINGO">FACILINGO</option>
                                    <option value="FACIL">FACIL</option>
                                    <option value="NORMAL">NORMAL</option>
                                    <option value="DIFICIL">DIFICIL</option>
                                    <option value="SUPERDIFICIL">SUPERDIFICIL</option>
                                    <option value="ULTRADIFICIL">ULTRADIFICIL</option>
                                    <option value="TIPOEXAMEN">TIPOEXAMEN</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Generar Sumas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-muted small py-3 mt-4">
        &copy; {{ date('Y') }} Ejercicios Propuestos
    </footer>
</body>
</html>
