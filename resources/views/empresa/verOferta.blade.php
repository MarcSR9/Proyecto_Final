@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <div class="col-md-12">
            <h1 class=""></h1>
            <div class="card my-3">
                <div class="card-header">
                    <h1 class="text-primary mb-4">{{ $oferta->titulo }}</h1>
                    <h5 class="text-dark">{{ $oferta->empresa }}</h5>
                    <p>Inscritos: {{ $oferta->inscritos }}</p>
                </div>
                <div class="card-body">
                    <h4 class="text-primary">Descripción de la oferta:</h4>
                    <p>{{ $oferta->descripcion }}</p>
                    <h4 class="text-primary">Requisitos mínimos:</h4>
                    <p>{{ $oferta->requisitos }}</p>

                    <p>Localización: {{ $oferta->localizacion }}</p>
                    <p>Salario ofrecido: {{ $oferta->salario }}</p>
                    <p>Última actualización: {{ $oferta->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection