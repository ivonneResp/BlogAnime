@extends('errors::illustrated-layout')

@section('code', '403')
@section('message', __('Lo sentimos, pero no tiene acceso a esta página'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>
<div id="apartado-derecho" style="background-image: radial-gradient(circle at 49.37% 48.27%, #6CF0C2 0, #67F1C1 4.55%, #62ECBC 9.09%, #5DECBA 13.64%, #59EEBA 18.18%, #55EEB8 22.73%, #50EEB7 27.27%, #4AECB4 31.82%, #42EBB0 36.36%, #42EBB0 40.91%, #3BEAAD 45.45%, #37E3A7 50%, #2CD89C 54.55%, #35D29B 59.09%, #31C491 63.64%, #37BD8F 68.18%, #33B084 72.73%, #2DA57B 77.27%, #2A9570 81.82%, #288A68 86.36%, #237659 90.91%, #237156 95.45%, #778899 100%);" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h1>Opps !</h>
    <ul>
    <img src="{{ asset('images/403.jpg') }}" alt="noautorizado">
       
    </ul>
</div>
@endsection