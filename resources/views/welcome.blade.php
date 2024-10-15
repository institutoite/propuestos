@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
@stop
@section('title', 'Dashboard')

@section('content_header')
    <h1>generador ite</h1>
@stop

@section('content')
<div class="container">
    <h1>¡Genera Ejercicios Matemáticos Personalizados al Instante!</h1>
    <p>¿Buscas una manera fácil y rápida de crear ejercicios de matemáticas para practicar o enseñar? ¡Con nuestra nueva herramienta web, generar ejercicios de suma, resta, multiplicación y división es tan fácil como llenar un formulario!</p>
    
    <div class="features">
        <h2>Características Principales:</h2>
        <div class="feature">• Ejercicios personalizados: Crea ejercicios con la cantidad de operadores que necesites, ya sea que estés practicando con operaciones simples o quieras desafiarte con cálculos más complejos.</div>
        <div class="feature">• Ajusta la dificultad: Elige entre tres niveles de dificultad – fácil, medio o difícil – para que los ejercicios se adapten a tus necesidades, ya sea que estés enseñando a principiantes o necesites un reto avanzado.</div>
        <div class="feature">• Múltiples tipos de operaciones: Genera ejercicios de suma, resta, multiplicación y división o combínalos para crear un desafío matemático completo.</div>
        <div class="feature">• Generación de PDF: Una vez que hayas configurado tus preferencias, ¡descarga un PDF con los ejercicios matemáticos listos para imprimir y practicar donde quieras!</div>
    </div>
    
    <div class="ideal-for">
        <h2>Ideal para:</h2>
        <div class="ideal">• Estudiantes: Practica matemáticas de manera divertida y ajustada a tu nivel de habilidad.</div>
        <div class="ideal">• Maestros y Profesores: Crea hojas de ejercicios matemáticos personalizadas en segundos para tus clases.</div>
        <div class="ideal">• Padres: Apoya a tus hijos con ejercicios adaptados a su nivel de aprendizaje.</div>
    </div>

    <h2>¡Empieza ahora!</h2>
    <p>Solo introduce la cantidad de operadores, selecciona el grado de dificultad y los tipos de operaciones. En pocos clics, tendrás tus ejercicios listos para imprimir en PDF. ¡Ideal para mejorar tus habilidades matemáticas desde casa, en la escuela o en cualquier lugar!</p>

    <h2>¿Por qué usar nuestra herramienta?</h2>
    <div class="feature">• Ahorra tiempo: Genera ejercicios al instante sin necesidad de buscar en libros o crearlos manualmente.</div>
    <div class="feature">• Versatilidad: Configura los ejercicios según tus necesidades y descárgalos en PDF con un solo clic.</div>
    <div class="feature">• Gratis y sin registro: ¡No necesitas crear una cuenta! Usa nuestra herramienta de forma rápida y sin complicaciones.</div>
</div>

<footer>
    <p>&copy; 2024 Generador de Ejercicios Matemáticos</p>
</footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop