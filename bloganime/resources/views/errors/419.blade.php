@extends('layouts.base')
@section('contenido')

<div class="main-container">
        <div class="img-container container-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdzIqeb1V03Rz9UDkqUsmoOyHRpg4Y1NORh1DtK2QtxIFMo8Bkym7YcCihKQAbKbXvZoY&usqp=CAU" height="400" width="600">
        </div>

        <div class="text-container container-item">
            <div class="code">419</div>
            <div class="msg"> Lo siento!!  Tu sesión a expirado </div>
            <div class="msg"> Por favor, actualice y pruebe de nuevo </div>
            <br>
            <br>
            <a class="action" href="#"> <div> IR AL INICIO</div> </a>
        </div>
    </div>

    <style>

html,body {
    height: 100%;
}

body {
    background: rgba(223, 223, 255, 0.39);
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-container {
    width: 80%;
    max-width: 1000px;
    max-height: 500px;
    min-width: 600px;
    background-color: white;
    font-size: 0;
    border-radius: 20px;
    box-shadow: 0 0 50px 0 rgba(146, 146, 146, 0.63);
}
.main-container .container-item {
    display: inline-block;
    vertical-align: middle;
    width: 50%;
}

.main-container .img-container {
    background-color: rgba(253, 216, 168, 0.692);
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

.main-container .text-container .code {
    font-size: clamp(150px,20vw,200px);
    font-family: 'Arial Narrow';
    color: rgb(86, 86, 253);
    font-weight: bolder;
    text-align: center;
}

.main-container .text-container .msg {
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    margin-bottom: 20px;
}

.main-container .text-container .action {
    color: #0f0f0f;
    font-size: 15px;
    font-weight: 600;
    text-align: center;
    text-decoration-line: none;
}
.main-container .text-container a:hover{
    color: #5bc0de;
}
    </style>
@endsection
