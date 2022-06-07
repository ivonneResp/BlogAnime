@extends('layouts.base')

@section('contenido')
<!-- Contenido -->
<div class="container">
    {{ Breadcrumbs::render('register') }}
</div>

<section class="vh-100" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <!-- imagen de alado -->
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://img2.wallspic.com/previews/3/2/8/5/6/165823/165823-arte_de_anime_genial-anime-fan_art-arte-asesino_de_demonios_kimetsu_no_yaiba-500x.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
                        </div>

                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div    class="card-body p-4 p-lg-5 text-black">

                                <!-- formulario -->
                                <form method="POST" action="{{ route('register') }}">

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    @csrf

                                    <!-- Name user -->
                                    <div class="form-outline mb-4">

                                        <x-label  for="name" :value="__('Nombre')" class="form-label"/>

                                        <x-input id="name" class="form-control form-control-lg" type="text" pattern="[a-z, ,A-Z]+" placeholder="Ingresa tu nombre" name="name" :value="old('name')" required autofocus/>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-outline mb-4">

                                        <x-label for="email" :value="__('Email')" class="form-label"/>

                                        <x-input id="email" class="form-control form-control-lg" type="email" placeholder="Ingresa tu correo electrónico" name="email" :value="old('email')" required/>
                                    </div>

                                    <div class="form-outline mb-4">


                                        <x-input id="fullacces" class="form-control form-control-lg" type="hidden" name="fullacces" value="no"/>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-outline mb-4">

                                        <x-label for="password" :value="__('Contraseña')" class="form-label"/>

                                        <x-input id="password" class="form-control form-control-lg" type="password" placeholder="Ingresa una contraseña" name="password" required autocomplete="new-password"/>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-outline mb-4">

                                        <x-label for="password_confirmation" :value="__('Confirmar contraseña')" class="form-label"/>

                                        <x-input id="password_confirmation" class="form-control form-control-lg" type="password" placeholder="Confirma tu contraseña" name="password_confirmation" required/>
                                    </div>


                                    <div class="flex items-center justify-end mt-4">
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya estás registrado?<a style="color: #393f81;" href="{{ route('login') }}">
                                                {{ __('Iniciar Sesión') }}
                                            </a></p>
                                        <div class="pt-1 mb4">
                                            <x-button class="btn btn-dark btn-lg btn-block">
                                            {{ __('Registrarse') }}
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
</section>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
