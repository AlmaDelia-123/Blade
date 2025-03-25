@extends('plantilla')
@section('contenido')
<div class="row justify-content-center mt-5">
    <div class="col-10 text-center">
        <h1>Algunas reglas básicas del baloncesto son:</h1> <br>
        <p>
            * Cada equipo está formado por cinco jugadores.<br>
            * El objetivo es anotar puntos introduciendo el balón en la canasta.<br>
            * El balón se puede lanzar en cualquier dirección, con una o dos manos.<br>
            * No se puede correr con el balón.<br>
            * No se puede llevar el balón en ambas manos o entre ellas.<br>
            * Un jugador solo puede dar dos pasos con el balón en las manos.<br>
            * Una vez que se deja de botar el balón, no se puede volver a hacer.<br>
            * El árbitro es el encargado de sancionar las faltas o violaciones a las reglas.<br>
        </p>
        <img src="{{asset('images/image3.png')}}" alt="">
    </div>
</div>
@endsection