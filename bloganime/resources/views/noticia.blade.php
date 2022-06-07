@extends('layouts.base')

@section('contenido')


<!-- Contenido -->
<section class="container content">
        {{ Breadcrumbs::render('noticia') }}
        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <div class="card mb-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Platinum_End_Logo.png/560px-Platinum_End_Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <b>Platinum End revela un nuevo visual y anuncia a más miembros del elenco</b></h5>
                                <br>
                                    <p class="card-text">La serie está confirmada con veinticuatro episodios y cubrirá la totalidad de la obra original, con Crunchyroll a cargo de su distribución en Occidente. Por su parte, Obata y Ohba comenzaron la publicación del manga en la revista Jump SQ de la editorial Shueisha en noviembre de 2015, y la finalizaron en enero de 2021. El dúo también fue autor del manga Death Note, que se publicó en la revista Weekly Shonen Jump entre diciembre de 2003 y mayo de 2006.</p>
                                    <p class="card-text"><small class="text-muted">Actualizado hace 23 min</small></p>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
</div>
</div>
</section>
@endsection
