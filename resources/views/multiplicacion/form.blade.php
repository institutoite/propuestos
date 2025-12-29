@extends('layouts.app')
@section('title', 'Generar Multiplicaciones')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/base.css') }}">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow border-0 form-card">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Generador de Multiplicaciones</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('multiplicaciones.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="digitos_multiplicando" class="form-label">Dígitos del multiplicando</label>
                            <input type="number" name="digitos_multiplicando" id="digitos_multiplicando" class="form-control" min="1" value="{{ old('digitos_multiplicando', 2) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="digitos_multiplicador" class="form-label">Dígitos del multiplicador</label>
                            <input type="number" name="digitos_multiplicador" id="digitos_multiplicador" class="form-control" min="1" value="{{ old('digitos_multiplicador', 1) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad de ejercicios</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" value="{{ old('cantidad', 10) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="grado" class="form-label">Grado</label>
                            <select name="grado" id="grado" class="form-select" required>
                                <option value="FACILINGO">FACILINGO(0,1,2)</option>
                                <option value="FACIL">FACIL (2,3)</option>
                                <option value="NORMAL">NORMAL (2,3,4)</option>
                                <option value="DIFICIL">DIFICIL (3,4,5)</option>
                                <option value="SUPERDIFICIL">SUPERDIFICIL (4,5,6)</option>
                                <option value="ULTRADIFICIL">ULTRADIFICIL (6,7,8)</option>
                                <option value="TIPOEXAMEN">TIPOEXAMEN (7,8,9)</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Generar Multiplicaciones</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
