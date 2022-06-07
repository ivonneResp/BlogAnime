@extends('layouts.base')

@section('contenido')
<!-- Contenido -->

<body>
<div class="container">
    {{ Breadcrumbs::render('blog') }}
</div>
<section class="container-fluid content">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Posts -->
<div class="row justify-content-center">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <div class="col-10">
        <div class="row">
        <br><h1 align="center" class="border border-success bg-success p-2 fst-italic" style="--bs-bg-opacity: .5;" data-aos="fade-right" data-aos-duration="1500"><b>Sobre el Blog</b></h1></br>
        </div>
</div>
        <div class=" mb-5">
        <img  src="{{asset('images/equipo.jpg')}}"   hspace="450" data-aos="fade-down" data-aos-duration="1500">
        </div>

        <br> <p align="center"> <b>こんにちは</b> E5-Ri no utsukushī mirai es el nombre que le dimos al blog en</p>
        <p align="center">el que encontrarás reseñas, posts y opiniones sobre el mundo</p>
        <p align="center">anime. Se le llamo así porque significa "El hermoso futuro de</p>
        <p align="center">los cinco" y el equipo que te proporciona este contenido se</p>
        <p align="center">conforma por 5 personas que buscan darte los mejores posts y</p>
        <p align="center"> compartir un hermoso futuro. </p>
        </b></p> </br>
        <br>
        <p align="center"> Disfruta del contenido y de todo nuestro esfuerzo "gamsa haeyo-감사 해요" </p>
        </br>
    </section>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

@endsection
