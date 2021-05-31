@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Publicar nueva oferta</h4>
                    <a class="btn btn-outline-secondary btn-arrow-left" href="">< Volver</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('publicarOferta') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">Título de la oferta</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo">

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="localizacion" class="col-md-4 col-form-label text-md-right">Localización</label>

                            <div class="col-md-6">
                                <input id="localizacion" type="text" class="form-control @error('localizacion') is-invalid @enderror" name="localizacion" required autocomplete="new-localizacion">

                                @error('localizacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sueldo" class="col-md-4 col-form-label text-md-right">Salario ofrecido</label>

                            <div class="col-md-6">
                                <input id="sueldo" type="text" class="form-control @error('sueldo') is-invalid @enderror" name="sueldo" value="{{ old('sueldo') }}" required autocomplete="sueldo" autofocus>

                                @error('sueldo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sector" class="col-md-4 col-form-label text-md-right">Sector de actividad</label>

                            <div class="col-md-6">
                                <input id="sector" type="text" class="form-control @error('sector') is-invalid @enderror" name="sector" value="{{ old('sector') }}" required autocomplete="sector" autofocus>

                                @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripción de la oferta</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" rows=8 class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" ></textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="requisitos" class="col-md-4 col-form-label text-md-right">Requisitos de la oferta</label>

                            <div class="col-md-6">
                                <textarea id="requisitos" rows=8 class="form-control @error('requisitos') is-invalid @enderror" name="requisitos" value="{{ old('requisitos') }}" required autocomplete="requisitos" ></textarea>

                                @error('requisitos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Publicar oferta</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
