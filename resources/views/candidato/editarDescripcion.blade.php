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
            <div class="align-items-center mb-2">
                <h2 class="text-primary">Editar descripción</h2>
                <form method="POST" action="{{ route('actualizarDescripcionCandidato', $candidato->id) }}">
                    @csrf
                    <textarea id="descripcion" rows=15 class="w-100 @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" >{{ $candidato->descripcion }}</textarea>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Actualizar descripción</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
@endsection