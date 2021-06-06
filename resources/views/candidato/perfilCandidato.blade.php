@extends('layouts.app')
@section('content')
<div class="container col-md-10">

    <div class="bg-white px-5 pt-5 shadow rounded card">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="display-4 mb-3 text-primary">{{ $candidato->nombre }} {{ $candidato->apellidos }}</h1>
                    <h5 class="text-black-50">DNI: {{ $candidato->dni }}</h5>
                    <h5 class="text-black-50">Fecha de nacimiento: {{ $candidato->fecha_nacimiento }}</h5>
                    <h5 class="text-black-50"><img src="{{URL('/images/telefono.png')}}" style="width: 3%;"> {{ $candidato->telefono }}</h5>
                    <h5 class="text-black-50"><img src="{{URL('/images/correo.jpeg')}}" style="width: 3%;"> {{ $candidato->email }}</a></h5>
                </div>
            </div>
        </div>

        <div class="card-body align-items-center">
            @if($candidato->descripcion != null)
                <div class="align-items-center mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h2 class="text-primary">Sobre mí </h2>
                        <a class="btn btn-outline-secondary text-primary my-2 align-items-right" href="{{ route('editarDescripcionCandidato', $candidato->id) }}">Editar descripción</a>
                    </div>
                    <p class="display-5 text-dark text-justify">{{ $candidato->descripcion }}</p>
                </div>
            @else
            <div class="align-items-center mb-5">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="text-primary">Sobre mí </h2>
                    <a class="btn btn-outline-secondary text-primary my-2 align-items-right" href="{{ route('editarDescripcionCandidato', $candidato->id) }}">Añadir descripción</a>
                </div>
            </div>
            @endif

            <div class="align-items-center mb-5">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 class="text-primary">Estudios</h3>
                </div>
                <p class="display-5 text-dark"></p>
            </div>

            <div class="align-items-center mb-5">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 class="text-primary">Experiencia laboral</h3>
                </div>
                <p class="display-5 text-dark"></p>
            </div>
        </div>
    </div>
</div>
@endsection