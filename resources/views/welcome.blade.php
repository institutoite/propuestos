@extends('adminlte::page')
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
@stop