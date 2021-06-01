@extends('layouts.auth')
@section('content')
<div class="container col-md-10">
    <div class="bg-white px-5 pt-5 shadow rounded card">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="display-4 mb-2 text-primary">{{ $candidato->nombre }} {{ $candidato->apellidos }}</h1>
                    <h5 class="text-black-50">DNI: {{ $candidato->dni }}</h5>
                    <h5 class="text-black-50">Fecha de nacimiento: {{ $candidato->fecha_nacimiento }}</h5>
                    <h5 class="text-black-50"><img src="{{URL('/images/telefono.png')}}" style="width: 3%;"> {{ $candidato->telefono }}</h5>
                    <h5 class="text-black-50"><img src="{{URL('/images/correo.jpeg')}}" style="width: 3%;"> {{ $candidato->email }}</a></h5>
                </div>
            </div>
        </div>

        <div class="card-body justify-content-between align-items-center">
            <h3 class="text-primary">Estudios</h3>
            <p class="display-5 text-dark">{{ $candidato->estudios }}</p>
        </div>

        <div class="card-body justify-content-between align-items-center">
            <h3 class="text-primary">Experiencia laboral</h3>
            <p class="display-5 text-dark">{{ $candidato->experiencia }}</p>
        </div>

        <footer class="text-center footer mt-5">

        </footer>
    </div>
</div>
@endsection