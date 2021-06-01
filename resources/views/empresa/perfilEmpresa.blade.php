@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="bg-white px-5 pt-5 shadow rounded card">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="display-4 mb-2">{{ $empresa->empresa }}</h1>
                    <h5 class="text-black-50">{{ $empresa->sector }} · {{ $empresa->localizacion }}</h5>
                    <h5><a href="{{ $empresa->web }}">{{ $empresa->web }}</a></h5>
                </div>
            </div>
        </div>

        <div class="card-body justify-content-between align-items-center">
            <h1 class="text-primary">Sobre nosotros</h1>
            <p class="display-5 text-dark">{{ $empresa->descripcion }}</p>
            <a class="btn btn-outline-primary col-md-2 font-weight-bold mt-2" href="{{ route('listarOfertas') }}">Ofertas publicadas</a>
        </div>
        <footer class="text-center footer mt-5">
            <p class="text-black-50 mb-3">Contacto: <img src="{{URL('/images/correo.png')}}" style="width: 4%;"> <a href="">{{ $empresa->email }}</a> - <img src="{{URL('/images/telefono.png')}}" style="width: 4%;">  {{ $empresa->telefono }}</p>
        </footer>
    </div>
</div>
@endsection