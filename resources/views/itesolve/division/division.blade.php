<!-- resources/views/division.blade.php -->
<!-- resources/views/division.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVPAD - División Paso a Paso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos generales */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

h4 {
    color: #34495e;
    font-size: 1.5rem;
    margin-bottom: 15px;
}

/* Formulario */
.formulario {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.fila {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: flex-end;
}

.grupo {
    flex: 1;
    min-width: 150px;
}

.grupo label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #34495e;
}

.grupo input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.grupo.boton {
    flex: 0 0 auto;
}

.grupo button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.grupo button:hover {
    background-color: #2980b9;
}

/* Tabla de división */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
    font-size: 1rem;
}

/* Botones de navegación */
form[method="POST"] {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

form[method="POST"] button {
    background-color: #2ecc71;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    flex: 1;
    min-width: 120px;
}

form[method="POST"] button[name="accion"][value="reiniciar"] {
    background-color: #e74c3c;
}

form[method="POST"] button[name="accion"][value="atras"] {
    background-color: #f39c12;
}

form[method="POST"] button[name="accion"][value="siguiente"] {
    background-color: #3498db;
}

form[method="POST"] button[name="accion"][value="resolver"] {
    background-color: #9b59b6;
}

form[method="POST"] button:hover {
    opacity: 0.9;
}

/* Texto de paso actual */
p {
    text-align: center;
    font-size: 1.2rem;
    color: #34495e;
    margin-bottom: 20px;
}

/* Responsividad */
@media (max-width: 768px) {
    .fila {
        flex-direction: column;
    }

    .grupo {
        width: 100%;
    }

    .grupo.boton {
        width: 100%;
    }

    .grupo button {
        width: 100%;
    }

    form[method="POST"] {
        flex-direction: column;
    }

    form[method="POST"] button {
        width: 100%;
    }
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">ITE SOLVE</h1>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulario en una fila</title>
            <link rel="stylesheet" href="styles.css"> <!-- Archivo CSS externo -->
        </head>
        <body>
        
            <form method="POST" action="{{ route('division.dividir') }}" class="formulario">
                @csrf
                <div class="fila">
                    <div class="grupo">
                        <label for="dividendo">Dividendo</label>
                        <input type="number" id="dividendo" name="dividendo" value="1234" required>
                    </div>
                    <div class="grupo">
                        <label for="divisor">Divisor</label>
                        <input type="number" id="divisor" name="divisor" value="5" required>
                    </div>
                    <div class="grupo boton">
                        <button type="submit">Dividir</button>
                    </div>
                </div>
            </form>
        
        
        </body>
        </html>
        

        @isset($cuadricula)
            <div class="mt-5">
                <h4>División:</h4>
                <table class="table table-bordered">
                    @foreach($cuadricula as $fila)
                        <tr>
                            @foreach($fila as $celda)
                                <td>{{ $celda }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="mt-3">
                <form method="POST" action="{{ route('division.navegar') }}">
                    @csrf
                    <button type="submit" name="accion" value="reiniciar" class="btn btn-secondary">Reiniciar</button>
                    <button type="submit" name="accion" value="atras" class="btn btn-warning">Atrás</button>
                    <button type="submit" name="accion" value="siguiente" class="btn btn-success">Siguiente</button>
                    <button type="submit" name="accion" value="resolver" class="btn btn-danger">Resolver Todo</button>
                </form>
            </div>

            <div class="mt-3">
                <p>Paso {{ $pasoActual + 1 }} de {{ $totalPasos }}</p>
            </div>
        @endisset
    </div>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVPAD - División Paso a Paso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">DIVPAD - División Paso a Paso</h1>

        <form method="POST" action="{{ route('division.dividir') }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dividendo" class="form-label">Dividendo</label>
                    <input type="number" class="form-control" id="dividendo" name="dividendo" value="1234" required>
                </div>
                <div class="col-md-6">
                    <label for="divisor" class="form-label">Divisor</label>
                    <input type="number" class="form-control" id="divisor" name="divisor" value="5" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Dividir</button>
        </form>

        @isset($cuadricula)
            <div class="mt-5">
                <h4>División:</h4>
                <table class="table table-bordered">
                    @foreach($cuadricula as $fila)
                        <tr>
                            @foreach($fila as $celda)
                                @if ($celda != 'x')
                                    <td class="text-success text-center">{{ $celda }}</td>
                                @else
                                    <td class="text-secondary">{{ $celda }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="mt-3">
                <form method="POST" action="{{ route('division.navegar') }}">
                    @csrf
                    <button type="submit" name="accion" value="reiniciar" class="btn btn-secondary">Reiniciar</button>
                    <button type="submit" name="accion" value="atras" class="btn btn-warning">Atrás</button>
                    <button type="submit" name="accion" value="siguiente" class="btn btn-success">Siguiente</button>
                    <button type="submit" name="accion" value="resolver" class="btn btn-danger">Resolver Todo</button>
                </form>
            </div>

            <div class="mt-3">
                <p>Paso {{ $pasoActual + 1 }} de {{ $totalPasos }}</p>
            </div>
        @endisset
    </div>
</body>
</html> --}}



{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVPAD - División Paso a Paso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">DIVPAD - División Paso a Paso</h1>

        <form method="POST" action="{{ route('division.dividir') }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dividendo" class="form-label">Dividendo</label>
                    <input type="number" class="form-control" id="dividendo" name="dividendo" value="1234" required>
                </div>
                <div class="col-md-6">
                    <label for="divisor" class="form-label">Divisor</label>
                    <input type="number" class="form-control" id="divisor" name="divisor" value="5" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Dividir</button>
        </form>

        @isset($cuadricula)
            <div class="mt-5">
                <h4>División:</h4>
                <table class="table table-bordered">
                    @foreach($cuadricula as $fila)
                        <tr>
                            @foreach($fila as $celda)
                                <td>{{ $celda }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
        @endisset

        @foreach($pasos as $index => $cuadricula)
            <h3>Paso {{ $index + 1 }}</h3>
            <table class="table table-bordered">
                @foreach($cuadricula as $fila)
                    <tr>
                        @foreach($fila as $celda)
                            <td>{{ $celda }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        @endforeach
    </div>
</body>
</html> --}}