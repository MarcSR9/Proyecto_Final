@extends('layouts.app')
@section('content')
<div class="container col-md-12 mb-5">
    <div class="bg-white px-5 pt-4 shadow rounded card">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="display-4 mb-2 text-primary">{{ $empresa->empresa }}</h1>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h1 class="mb-5 text-secondary">Editar perfil</h1>
            <form method="POST" action="{{ route('actualizarPerfilEmpresa', $empresa->id) }}">
                @csrf

                <div class="form-group row">
                    <label for="empresa" class="col-md-3 col-form-label text-md-left">Nombre de la empresa</label>

                    <div class="col-md-8">
                        <input id="empresa" type="text" class="form-control @error('empresa') is-invalid @enderror" name="empresa" value="{{ $empresa->empresa }}" required autocomplete="empresa" autofocus>

                        @error('empresa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="web" class="col-md-3 col-form-label text-md-left">Página web</label>

                    <div class="col-md-8">
                        <input id="web" type="url" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ $empresa->web }}" required autocomplete="web" autofocus>

                        @error('web')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sector" class="col-md-3 col-form-label text-md-left">Sector de actividad</label>

                    <div class="col-md-8">
                        <input id="sector" type="text" class="form-control @error('sector') is-invalid @enderror" name="sector" value="{{ $empresa->sector }}" required autocomplete="sector" autofocus>

                        @error('sector')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="descripcion" class="col-md-3 col-form-label text-md-left">Descripción de la empresa</label>

                    <div class="col-md-8">
                        <textarea id="descripcion" rows=8 class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion')}}" required autocomplete="descripcion" >{{ $empresa->descripcion }}</textarea>

                        @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="localizacion" class="col-md-3 col-form-label text-md-left">Localización de la empresa</label>

                    <div class="col-md-8">
                        <input id="localizacion" type="text" class="form-control @error('localizacion') is-invalid @enderror" name="localizacion" value="{{ $empresa->localizacion }}" required autocomplete="localizacion" autofocus>

                        @error('localizacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="col-md-3 col-form-label text-md-left">Número de teléfono</label>

                    <div class="col-md-8">
                        <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $empresa->telefono }}" required autocomplete="telefono" autofocus>

                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <div class="col-md-12 offset-md-9">
                        <button type="submit" class="btn btn-outline-secondary text-primary btn-lg">Actualizar perfil</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection