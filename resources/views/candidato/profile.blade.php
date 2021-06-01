@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5 border rounded bg-white p-3">
        <div class="col">
            <div>
                <h3 class="mt-auto mb-0 text-primary">Marc Álvarez Ruiz</h3>
                <p class="mb-0">Abrear, Barcelona, España</p>
                <p>695627846</p>
            </div>
        </div>
        <div class="col">
            <img class="ml-auto d-block" src="{{URL('/images/perfil.png')}}" style="width: 10%;">
        </div>
    </div>
    <div class="row mb-5 border rounded rounded bg-white p-3">
        <div class="col">
            <p class="font-weight-bold">Sobre mí</p>
            <p>Hola soy balbalblablalbalblalblablablalblbalbla</p>
        </div>
    </div>
    <div class="row mb-5 border rounded rounded bg-white p-3">
        <div class="col">
            <p class="font-weight-bold">Estudios</p>
        </div>
    </div>
    <div class="row mb-5 border rounded rounded bg-white p-3">
        <div class="col">
            <p class="font-weight-bold">Experiencia</p>
            <div class="bg-info">
                <p>Nombre del puesto</p>
                <p>Empresa y joranada</p>
                <p>Fecha de trabajo</p>
                <p>Ubicación</p>
                <p>Descripciónº</p>
            </div>
            <div class="bg-info">
                <p>Nombre del puesto</p>
                <p>Empresa y joranada</p>
                <p>Fecha de trabajo</p>
                <p>Ubicación</p>
                <p>Descripciónº</p>
            </div>
        </div>
    </div>
    <div class="row mb-5 border rounded rounded bg-white p-3">
        <div class="col">
            <p class="font-weight-bold">Idiomas</p>
            <span class="border border-primary rounded">Castellano</span>
            <span class="border border-primary rounded">Castellano</span>
            <span class="border border-primary rounded">Castellano</span>
            <span class="border border-primary rounded">Castellano</span>
        </div>
    </div>
    <div class="row mb-5 border rounded rounded bg-white p-3">
        <div class="col">
            <p class="font-weight-bold">Habilidades</p>
            <span class="border border-primary rounded">JavaScript</span>
            <span class="border border-primary rounded">React</span>
            <span class="border border-primary rounded">Redux</span>
        </div>
    </div>
    <div class="row border rounded rounded bg-white p-3">
        <div class="col">
            <p class="font-weight-bold">Contacto</p>
            <p>Teléfono: 3213214</p>
            <p>Correo: dsadsa@gmail.com</p>
        </div>
    </div>
</div>
@endsection