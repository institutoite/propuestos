<!-- resources/views/division.blade.php -->
<!-- resources/views/division.blade.php -->

<!DOCTYPE html>
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