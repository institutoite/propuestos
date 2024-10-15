@extends('adminlte::page')

@section('title', 'Resta')

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@stop
@section('content')
    
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary text-white">
            GENERADOR DE RESTAS
        </div>
        <div class="card-body">
            <form action="{{ route('restas.imprimir') }}" method="POST" class="For-horizontal">
                @csrf
                <div class="form-group">
                        <input type="number" name="digitos" id="digitos" class="form-control" required placeholder="Cantidad digitos">
                </div>
        
                <div class="form-group">
                    <select name="dificultad" class="selectpicker form-control">
                        <option value="1">FACILINGO</option>
                        <option value="2">FACIL</option>
                        <option value="3">NORMAL</option>
                        <option value="4">DIFICIL</option>
                        <option value="5">SUPERDIFICIL</option>
                        <option value="6">ULTRADIFICIL</option>
                        <option value="7">TIPOEXAMEN</option>
                    </select>
                </div>
        
                <div class="row">
                <div class="col-5"></div>
                    
                        <input type="submit" name="Aceptar" class="btn btn-primary col-2" value="Generar">
                    
                <div class="col-5"></div>	
                </div>
        
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop