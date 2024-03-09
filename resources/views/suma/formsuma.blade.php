@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
@stop

@section('content')
    
    <div class="card mt-5">
                
        <div class="card-header colorazul">
            <h4 class="text-center">GENERADOR DE SUMAS</h4>
        </div>
    
        
        <div class="card-body">
            <form action='{{ route("sumas.imprimir") }}' method="POST" class="For-horizontal">
                @csrf

                
            
                    <div class="form-floating mt-3">
                        <input type="number" name="sumandos" id="sumandos" class="form-control" required placeholder="Cantidad Sumandos">
                        <label for="sumandos">Click aquí para Ingresar cantidad de sumandos</label>
                    </div>

                    <div class="form-floating mt-3">
                        <input type="number" name="digitos" id="digitos" class="form-control" required placeholder="Cantidad digitos">
                        <label for="digitos">Click aquí para ingresar la cantidad de sumandos</label>
                    </div>
            
                    <div class="form-floating mt-3 mb-3">
                        <select name="dificultad" class="form-select" id="floatingSelectGrid">
                            <option value="1">FACILINGO</option>
                            <option value="2">FACIL</option>
                            <option value="3">NORMAL</option>
                            <option value="4">DIFICIL</option>
                            <option value="5">SUPERDIFICIL</option>
                            <option value="6">ULTRADIFICIL</option>
                            <option value="7">TIPOEXAMENx</option>
                        </select>
                        <label for="floatingSelectGrid">Click aquí para Elijir una dificultad</label>
                    </div>
            
                    <div class="row">
                        <div class="col-5 "></div>
                            
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