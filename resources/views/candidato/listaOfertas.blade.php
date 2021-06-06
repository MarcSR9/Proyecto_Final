@extends('layouts.app')
@section('content')
<div class="container col-md-10">

    <div class="bg-white p-5 shadow rounded">
        <div class="col-md-12">
            <h1 class="text-primary mb-4">Hay {{$ofertas->count()}} ofertas publicadas</h1>
            <hr class="my-3">

            @forelse($ofertas as $oferta)
                <div class="card my-3">
                    <div class="card-header">
                        <h3 class="text-primary font-weight-bold"><a href="{{-- route('verOferta', $oferta) --}}">{{ $oferta->titulo }}</a></h3>
                        <h5 class="text-dark">{{ $oferta->empresa }}</h5>
                    </div>
                    <div class="card-body">
                        <p>{{ $oferta->descripcion }}</p>
                        <p>{{ $oferta->localizacion }}</p>
                        <p>{{ $oferta->salario }}</p>
                        <p>Última actualización: {{ $oferta->updated_at }}</p>
                        <a href="{{ route('verOferta', $oferta->id)}}" class="btn btn-primary btn-lg text-white font-weight-bolder">Ver oferta</a>
                    </div>
                </div>
            @empty
                <p>Aún no se ha publicado ninguna oferta</p>
            @endforelse
        </div>
    </div>
</div>
@endsection