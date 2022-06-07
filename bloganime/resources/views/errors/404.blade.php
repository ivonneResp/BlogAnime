@extends('errors::illustrated-layout')

@section('code', '404')
@section('message', __('!!El elemento que esta buscando no se ha encontrado!!'))

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
<div id="apartado-derecho" style="background-color: #e5142c;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h2>Busca de forma distinta lo que deseabas</h2>
    <ul>
        <img src="{{ asset('images/404.png') }}" alt="noautorizado">
    </ul>
</div>
@endsection

@section('message', __('No hemos encontrado la página que buscas.'))