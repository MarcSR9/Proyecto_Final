@extends('layouts.app')
@section('content')
<div class="container col-md-10">
    <div class="bg-white p-5 shadow rounded">
        <div class="col-md-12">
            <h1 class=""></h1>
            <div class="card my-3">
                <div class="card-header">
                    <h1 class="text-primary mb-4">{{ $oferta->titulo }}</h1>
                    <h5 class="text-dark">{{ $oferta->empresa }}</h5>
                    <p>Inscritos: </p>
                </div>
                <div class="card-body">
                    <h4 class="text-primary">Descripción de la oferta:</h4>
                    <p>{{ $oferta->descripcion }}</p>
                    <h4 class="text-primary">Requisitos mínimos:</h4>
                    <p>{{ $oferta->requisitos }}</p>

                    <p>Localización: {{ $oferta->localizacion }}</p>
                    <p>Salario ofrecido: {{ $oferta->sueldo }} €</p>
                    <p>Última actualización: {{ $oferta->updated_at }}</p>

                    @if(auth()->user()->tipo == 'Candidato')
                        @if($inscritos != null)
                            <p>Inscritos: {{ $inscritos->count()-1 }}</p>
                            @if(auth()->user()->id != $inscritos->candidato_id )
                            <a href="#" class="btn btn-primary btn-lg text-white font-weight-bolder" onclick="document.getElementById('inscripcion').submit()">Inscribirse</a>
                            <form class="d-none" id="inscripcion" method="POST" action="{{ route('inscribirse', $oferta) }}">
                                @csrf
                            </form>
                            @else
                            <a href="#" class="btn btn-outline-secondary btn-lg text-primary font-weight-bolder">Ya estás inscrito en la oferta</a>
                            @endif
                        @else
                            <a href="#" class="btn btn-primary btn-lg text-white font-weight-bolder" onclick="document.getElementById('inscripcion').submit()">Inscribirse</a>
                            <form class="d-none" id="inscripcion" method="POST" action="{{ route('inscribirse', $oferta) }}">
                                @csrf
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection