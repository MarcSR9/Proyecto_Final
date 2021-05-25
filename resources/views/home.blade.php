@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pb-5">Bienvenido a -----!</h1>
    <div class="card-group pb-5">
        <div class="card border-warning">
            <img src="./images/prog.jpg" class="card-img-top" alt="200">
            <div class="card-body">
                <h5 class="card-title">Programación</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="mx-5">
        </div>
        <div class="card border-warning">
            <img src="/images/systems.jpg" class="card-img-top" alt="200">
            <div class="card-body">
                <h5 class="card-title">Sistemas</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="mx-5">
        </div>
        <div class="card border-warning">
            <img src="/images/cyber.jpg" class="card-img-top" alt="200">
            <div class="card-body">
                <h5 class="card-title">Ciberseguridad</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card border-warning">
            <img src="./images/help.jpg" class="card-img-top" alt="200">
            <div class="card-body">
                <h5 class="card-title">Helpdesk</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="mx-5">
        </div>
        <div class="card border-warning">
            <img src="/images/mant.jpg" class="card-img-top" alt="200">
            <div class="card-body">
                <h5 class="card-title">Mantenimiento</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
@endsection