@extends('layouts.app')

@section('content')
<style>
    body {
        overflow: hidden;
    }
    .carousel-item img {
        height: 500px;
        object-fit: cover;
    }
    #feedback {
        position: absolute;
        bottom: 20px;
        right: 20px;
    }
    #feedback img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }

    .h1-pri {
        text-align: center;
        margin: 0;
    }
    .container-heading {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        width: 100%;
        max-width: 400px;
        border-radius: 20px;
        background-color: #fff9e3;
    }
</style>
<div class="container mt-5">
    <div class="container-heading">
        <h1 id="desayunos" class="h1-pri">Desayunos</h1>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/hamburguesarica.jpg') }}" class="d-block w-100" alt="Hamburguesa">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/hotcake.jpg') }}" class="d-block w-100" alt="Hotcake">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carnitas.jpg') }}" class="d-block w-100" alt="Carnitas">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="text-center mt-4">
        <button type="button" id="feedback" class="btn btn-primary">
            <img src="{{ asset('img/messenger.png') }}" id="logo">Comentarios
        </button>
    </div>
</div>
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var now = new Date();
        var hours = now.getHours();
        var text = document.getElementById('desayunos');

        if (hours >= 12) {
            text.textContent = 'Comidas';
        } else {
            text.textContent = 'Desayunos';
        }
    });
</script>
@endsection
