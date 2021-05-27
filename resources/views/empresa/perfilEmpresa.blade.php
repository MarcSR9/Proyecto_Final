@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded card">
        <div class="header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="display-4 mb-2">{{ $empresa->empresa }}</h1>
                    <h5 class="text-black-50">{{ $empresa->sector }} · {{ $empresa->localizacion }}</h5>
                    <h5><a href="{{ $empresa->web }}">{{ $empresa->web }}</a></h5>
                </div>
                <div>
                    <h5><p class="text-black-50 my-1">Contacto:</p></h5>
                    <h5><p class="text-black-50 my-1"><a href="">{{ $empresa->email }}</a></p></h5>
                    <h5><p class="text-black-50 my-1">Tel: {{ $empresa->telefono }}</p></h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body justify-content-between align-items-center">
            <h1 class="text-primary">Sobre nosotros</h1>
            <p class="display-5 text-dark">{{ $empresa->descripcion }}</p>
        </div>
    </div>
</div>
@endsection