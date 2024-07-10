@extends('layouts.app')


@section('content')
<style>
    body{
        overflow: hidden;
    }
</style>
    <div
        style="height: 80x;width:400px  ; border-radius:20px; margin:auto;display: flex;justify-content: space-evenly;flex-direction: column; background-color:#fff9e3">
        <h1 id="desayunos">Desayunos</h1>
    </div>
    <div class="container">


    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" id="carru">
                <img src="{{ asset('img/hamburguesarica.jpg') }}" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>

            </div>
            <div class="carousel-item" id="carru">
                <img src="{{ asset('img/hotcake.jpg') }}" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" id="carru">
                <img src="{{ asset('img/carnitas.jpg') }}" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
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
    <div>
        <button type="button" id="feedback" class="btn btn-primary">
            <img src="../img/messenger.png"  id="logo">Comentarios</button>
    </div>
    </div>
@endsection

@section('script')

<script>
    document.addEventListener("DOMContentLoaded",function () {
        var now = new Date();
        var hours = now.getHours();
        var text = document.getElementById('desayunos');

        if ( hours >= 12){
            text.textContent = 'Comidas';
        }
        else{
            text.textContent = 'Desayunos';
        }
    });
</script>

@endsection
