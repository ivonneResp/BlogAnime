@extends('adminlte::page')

@section('title', 'Admin - Blog')

@section('content_header')
<link rel="stylesheet" href="css/estilo.css">

    <div align="center"class="container">
        <h1 class="bg-success p-2 bg-opacity-50 fst-italic rounded-pill" >!Bienvenido Administrador!</h1>
        <ul>
        
        </ul>
    </div>

    <div align="center"class="container"> 
        <h2 > <Font size=5><b>¿Que desea hacer hoy?</b> </font></h2> 
        <ul>
        
        </ul>
    </div>

    <h1> 
    </font><a name="nickname" class="nav-link fw-light" href="/admin/categories"> <font size=5>Crear nuevas categorias </font>

    </h1>

    <br>
    <h1>
    </font><a name="nickname" class="nav-link fw-light" href="/admin/posts"> <font size=5>Crear nuevos Posts </font> </h1> </br>



    <h1>
    </font><a name="nickname" class="nav-link fw-light" href="/admin/comentarios"> <font size=5>Ver los comentarios </font> </h1> </br>

@stop
