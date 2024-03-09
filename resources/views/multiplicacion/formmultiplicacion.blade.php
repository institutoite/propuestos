@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
@stop

@section('content')
    
    <div class="card mt-5">
                
        <div class="card-header colorazul">
            <h4 class="text-center">GENERADOR DE MULTIPLICACIONES</h4>
        </div>
    
        
        <div class="card-body">
        <form action="{{ route("multiplicacion.imprimir") }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header colorturquesa">
                            MULTTIPLICANDO
                        </div>
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="number" name="digitosdo" id="digitos" class="form-control" required placeholder="Cantidad digitos multiplicando">
                                        <label for="digitosdo">Ingrese Digitos del multiplicando</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select name="dificultaddo" class="form-select" id="floatingSelectGrid">
                                            <option value="1">FACILINGO</option>
                                            <option value="2">FACIL</option>
                                            <option value="3">NORMAL</option>
                                            <option value="4">DIFICIL</option>
                                            <option value="5">SUPERDIFICIL</option>
                                            <option value="6">ULTRADIFICIL</option>
                                            <option value="7">TIPOEXAMEN</option>
                                        </select>
                                        <label for="digitos">Elija una dificultad</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">	
                    <div class="card">
                        <div class="card-header colorturquesa">
                            MULTIPLICADOR
                        </div>
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating">
                                    <input type="number" name="digitosdor" id="digitos" class="form-control" required placeholder="Cantidad digitos multiplicador">
                                    <label for="digitos">Digitos del multiplicador</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select name="dificultaddor" class="form-select" id="floatingSelectGrid">
                                            <option value="1">FACILINGO</option>
                                            <option value="2">FACIL</option>
                                            <option value="3">NORMAL</option>
                                            <option value="4">DIFICIL</option>
                                            <option value="5">SUPERDIFICIL</option>
                                            <option value="6">ULTRADIFICIL</option>
                                            <option value="7">TIPOEXAMEN</option>
                                        </select>
                                        <label for="digitos">Elija una dificultad</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-5"></div>
                    
                        <input type="submit" name="Aceptar" class="btn btn-primary col-2" value="Generar">
                    
                <div class="col-5"></div>	
            </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop