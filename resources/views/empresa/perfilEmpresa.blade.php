@extends('layouts.app')
@section('content')
<div class="container col-md-10">
    <div class="bg-white px-5 pt-5 shadow rounded">
        <div class="card-header bg-white">
            <div class="d-flex">
                <div>
                    <h1 class="display-4 mb-2 text-primary">{{ $empresa->empresa }}</h1>
                    <h5 class="text-black-50">{{ $empresa->sector }} · {{ $empresa->localizacion }}</h5>
                    <h5><a href="{{ $empresa->web }}">{{ $empresa->web }}</a></h5>
                    <h5 class="text-black"><img src="{{URL('/images/telefono.png')}}" style="width: 3%;"> {{ $empresa->telefono }}</h5>
                    <h5 class="text-black"><img src="{{URL('/images/correo.jpeg')}}" style="width: 3%;"> {{ $empresa->email }}</a></h5>
            </div>
        </div>

        <div class="card-body justify-content-between align-items-center mb-5">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h1 class="text-primary">Sobre nosotros</h1>
                <a class="btn btn-outline-secondary text-primary my-2 align-items-right" href="{{ route('editarPerfilEmpresa', $empresa->id) }}">Editar descripción</a>
            </div>
            <p class="display-5 text-dark text-justify">{{ $empresa->descripcion }}</p>
        </div>
    </div>
</div>
@endsection