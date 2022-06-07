@extends('layouts.commentadmin')
@extends('layouts.baseuser')

@section('contenido')

@yield('contenido')

<body>
    <!-- Contenido -->
    <section class="container-fluid content">
    <div class="row justify-content-center">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <br><h1 align="center" class="border border-success bg-success p-2 fst-italic" style="--bs-bg-opacity: .5;" data-aos="fade-right" data-aos-duration="1500"><b>Categorías</b></h1></br>
</div>
</div>
</div>
        <!-- Categorías -->
        <div class="row justify-content-center">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                <a href="/usuarioV" name="nickname" class="mx-3 pb-3 btn btn-outline-success d-block d-md-inline fw-bolder fst-italic fs-6 {{isset($categoryIdSelected)? '': 'selected-category'}} " >Todas</a>

                  @foreach ($categories as $category)
                    <a href="{{route('usuarioV.category', $category->name)}}" name="nickname" class=" mx-3 pb-3 btn btn-outline-success d-block d-md-inline fw-bolder fst-italic fs-6 {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category': '' }}" >{{$category->name}}</a>
                  @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    @foreach ($usuarioV as $post)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;"  data-aos="fade-right" data-aos-duration="3000">
                            <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->name}}">
                            <div class="card-body" data-aos-duration="3000" style="background-color:#F7EFF3;">
                                <small class="card-txt-category" style="background-color:#F57CFF;">Categoría: {{$post->category->name}}</small>
                                <h5 class="card-title my-2">{{$post->title}}</h5>
                                <div class="d-card-text">
                                    {{$post->content}}
                                </div>
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
                            <button class="btn btn-info fw-bolder fst-italic" data-toggle="modal" data-target="#exampleModal-{{$post}}" >Comentarios</button>                                           
                        </div>
                    </div>
                    @include('vistaC')
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