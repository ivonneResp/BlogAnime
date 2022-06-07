@extends('layouts.base')

@section('contenido')

<!-- Contenido -->
<div class="container">
    {{ Breadcrumbs::render('nosotros') }}
</div>
<section class="container-fluid content" >

        <!-- Posts -->
        <div class="row justify-content-center">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <br><h1 align="center" class="border border-success bg-success p-2 fst-italic" style="--bs-bg-opacity: .5;" data-aos="fade-right" data-aos-duration="1500"><b>Conocenos</b></h1></br>
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/juan.jpg')}}" alt="Jujutsu kaisen 0" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card-body" data-aos="fade-down">
                            <small class="card-txt-category"></small>
                            <h5 style="color:#690A93"; class="card-title my-2"><b></b></h5>
                            <div class="d-card-text" > Juan Ernesto Morales Gómez
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- Post 2 -->
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/yo.jpg')}}" alt="platinum end" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body" data-aos="fade-down">
                        <small class="card-txt-category"></small>
                        <h5 style="color:#690A93"; class="card-title my-2"><b></b></h5>
                        <div class="d-card-text">
                            Ivonne del Carmen López Aguilar
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/Alma.jpg')}}" alt="Ousama ranking" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card-body" data-aos="fade-down">
                    <small class="card-txt-category"></small>
                    <h5 style="color:#690A93"; class="card-title my-2"><b></b></h5>
                    <div class="d-card-text">
                      Alma Vianeyi López Santiz
                    </div>
                    <hr>
                    <div class="row">
                        </div>
                        </div>
                    </div>
                </div>
              <!-- Post 4 -->
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/cesar.jpg')}}" alt="platinum end" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body" data-aos="fade-down">
                        <small class="card-txt-category"></small>
                        <h5 style="color:#690A93"; class="card-title my-2"><b></b></h5>
                        <div class="d-card-text"> Cesar Arbey López Velazquez
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
                  <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/may.jpg')}}" alt="platinum end"  data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card-body" data-aos="fade-down">
                        <small class="card-txt-category"></small>
                        <h5 style="color:#690A93"; class="card-title my-2"><b></b></h5>
                        <div class="d-card-text">
                            Mairym Briseyda Perez Gúzman
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</div>
</section>
@endsection



