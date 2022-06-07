@extends('layouts.baseuser')

@section('contenido')

@yield('contenido')

<body>
    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                                <!--<a href="#" class="post-link"><b>Leer más</b></a>-->
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"><b><font size=2> {{$post->author}} </font> </b></span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"><b><font size=2> {{$post->created_at->diffForHumans()}}</font></b> </span>
                                    </div>
                                </div>
                            </div>
                                <a name="nickname" class="nav-link active" aria-current="page" href="/comentarios">Comentarios
                                </a>                                              
                        </div>
                        <div class="card m-auto" style="width: 18rem;">
                                    <h5 class="d-block d-md-inline">COMENTARIOS</h5>
                                    @comments(['model' => $post, 'comment_limit_chars' => 1])
                        </div>  
                    </div>
                    @endforeach
                    <!-- Post 2 -->
                    <!--<div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">YouDevs</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- Post 3 -->
                    <!--<div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">YouDevs</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

    <br>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
@endsection