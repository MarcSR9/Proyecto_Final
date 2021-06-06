@extends('layouts.app')

@section('content')
<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Publicar nueva notícia</h4>
                    <a class="btn btn-outline-secondary btn-arrow-left" href="{{ route('listarNoticiasPublicadas') }}">< Volver</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('publicarNoticia') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="titulo" class="col-md-4 col-form-label text-md-right">Título de la notícia</label>

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
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripción de la notícia</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" rows=8 class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" ></textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Publicar Noticia</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
