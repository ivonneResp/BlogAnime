@extends('layouts.base')

@section('contenido')
<!-- Contenido -->
<div class="container">
{{ Breadcrumbs::render('login') }}
</div>
<section class="vh-100" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <!-- imagen de alado -->
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://i.pinimg.com/originals/82/1b/20/821b2045339950bb0d38421d30faa2f3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/ data-aos="flip-left">
                        </div>

                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div    class="card-body p-4 p-lg-5 text-black">
                                <form method="POST" action="{{ route('login') }}">
                                    <!-- Apartado del logo -->
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">
                                            <a href="/">
                                                <img class="fill-current" src="{{asset('images/hjSin título-1.png')}}" alt="logo" width="100px" data-aos="fade-down" data-aos-duration="1500">
                                            </a>
                                        </span><h3 class="h3" data-aos="fade-down"> ¡Blog Anime!</h3>
                                    </div>

                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    @csrf

                                    <!-- Email Address -->
                                    <div class="form-outline mb-4" data-aos="fade-down">
                                        <x-label for="email" :value="__('Correo Electrónico')" class="form-label"/>

                                        <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-outline mb-4" data-aos="fade-down">
                                        <x-label for="password" :value="__('Contraseña')" class="form-label"/>

                                        <x-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                                    </div>

                                    <!-- Remember Me 
                                    <div class="block mt-4" data-aos="fade-down">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                                        </label>
                                    </div>
                                    -->

                                    <div class="flex items-center justify-end mt-4" data-aos="fade-down">
                                        @if (Route::has('register'))
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Aún no te has registrado?<a style="color: #393f81;" href="{{ route('register') }}">
                                                {{ __('REGISTRATE Aquí') }}
                                            </a></p>
                                        @endif
                                        <div class="pt-1 mb4" data-aos="flip-right">
                                            <x-button class="btn btn-dark btn-lg btn-block">
                                                {{ __('Entrar') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</div>
</section>
<br>
<br>

@endsection
