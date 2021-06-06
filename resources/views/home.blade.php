@extends('layouts.app')

@section('content')
<div class="container col-md-10">
    <div class="bg-white px-5 py-4 shadow rounded" style="background-image:url('images/fondo-home.png'), url('images/fondo-home2.png'); background-repeat: no-repeat;  background-position: 100% 20%, 100% 80%; background-size: 50%, 40%">
        <h1 class="display-5 text-primary mb-5">Bienvenido a Jobn, tu portal de empleo favorito</h1>
        <hr>
        <h2 class="my-4">Éstas son las últimas noticias de nuestras empresas:</h2>
        @forelse($noticias as $noticia)
            <div class="card my-5 col-md-8 bg-transparent">
                <div class="card-header">
                    <h3 class="text-primary">{{ $noticia->titulo }}</a></h3>
                </div>
                <div class="card-body">
                    <p>{{ $noticia->descripcion }}</p>
                    <p class="text-black-50 text-right mr-5">Publicada: {{ $noticia->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @empty
            <p>Aún no se ha publicado ninguna noticia</p>
        @endforelse
    </div>
</div>
@endsection