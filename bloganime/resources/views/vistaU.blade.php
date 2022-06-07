


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos css -->
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Estilos de visibilidad -->
    <link rel="stylesheet" href="{{asset('css/estilo.css') }}">



        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->


        <!-- Styles -->


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


</head>

<body class="hidden">
  
  </div>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <div class="movil">
            <img src="{{asset('images/alma.png')}}" alt="logoAnime" width="180px" class="d-inline-block align-text-top mouse-tracking">
        </div>

        <div class="escritorio">
            <img src="{{asset('images/hjSin título-1.png')}}" alt="logoAnime" width="100px" class="d-inline-block align-text-top">
        </div>


    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
        <li class="nav-item">
          <a name="nickname" class="nav-link" href="/vistaU">Posts
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a>
        </li>

        <li class="nav-item">
          <a name="nickname" class="nav-link" href="/dashboard">Principal
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a>
        </li>

        <li class="nav-item">
        <div class="hidden sm:flex sm:items-center sm:ml-6" style="padding: 10px; "  >
                <x-dropdown align="right" width="28">
                    <x-slot name="trigger">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" >
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Salir') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a></li>
      </ul>
      <!-- Busqueda
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      -->
    </div>
  </div>
</nav>
<!-- Settings Dropdown -->

<!-- Carousel para escritorio -->
<header class="escritorio">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.kym-cdn.com/photos/images/original/001/495/828/e66.png" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="https://i.redd.it/65hi5fic80y21.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="https://i.redd.it/1pcqpedkiii41.png" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <!--<span class="visually-hidden">Previous</span>-->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <!--<span class="visually-hidden">Next</span>-->
  </button>
</div>
</header>

<!-- Carousel para movil -->
<header class="movil">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://gogocatrina.com/wp-content/uploads/2020/08/anime-o-animacion.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
    <img src="https://as01.epimg.net/meristation/imagenes/2018/01/04/reportaje/1515052800_234389_1531824063_sumario_normal.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
    <img src="https://larepublica.pe/resizer/NGLsPoudoZAKXNNgWvEgdXWZInQ=/1200x660/top/arc-anglerfish-arc2-prod-gruporepublica.s3.amazonaws.com/public/IUAJNXWO3NC6LKYW3RBFYNNRHI.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <!--<span class="visually-hidden">Previous</span>-->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <!--<span class="visually-hidden">Next</span>-->
  </button>
</div>
</header>

    <!-- Contenido -->
<br>
    @yield('contenido')

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
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                <a href="/vistaU" name="nickname" class="mx-3 pb-3 btn btn-outline-success d-block d-md-inline fw-bolder fst-italic fs-6 {{isset($categoryIdSelected)? '': 'selected-category'}} " >Todas</a>

                  @foreach ($categories as $category)
                    <a href="{{route('vistaU.category', $category->name)}}" name="nickname" class=" mx-3 pb-3 btn btn-outline-success d-block d-md-inline fw-bolder fst-italic fs-6 {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category': '' }}" >{{$category->name}}</a>
                  @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    @foreach ($vistaU as $post)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;" data-aos="fade-right" data-aos-duration="3000">
                            <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->name}}">
                            <div class="card-body" data-aos="flip-left" data-aos-duration="3000" style="background-color:#F7EFF3;">
                                <small class="card-txt-category" style="background-color:#F57CFF;">Categoría: {{$post->category->name}}</small>
                                <h5 class="card-title my-2">{{$post->title}}</h5>
                                <div class="d-card-text"> <FONT FACE="arial" size=3>
                                    {{$post->content}} </font>
                                </div>
                                <!--<a href="#" class="post-link"><b>Leer más</b></a>-->
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"><b><font size=2> {{$post->author}} </font> </b></span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> <b><font size=2>{{$post->created_at->diffForHumans()}}</font> </b></span>
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
    <!-- Footer -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">i>こんにちは E5-Ri no utsukushī mirai </i> Un blog que prrsenta reseñas, posts y opiniones sobre el mundo anime. Su significado "El hermoso futuro de los cinco", por lo que son 5 personas que buscan darte lo mejor del anime y  compartir un hermoso futuro.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categorias</h6>
            <ul class="footer-links menu">
              <li><a href="#">Post
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span></a></li>
              <li><a href="#">Noticias
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span>
              </a></li>
              <li><a href="#">Contenido
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span>
              </a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links menu">
              <li><a href="#">Nosotros
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span>
              </a></li>
              <li><a href="#">Sobre el blog
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span>
              </a></li>
              <li><a href="#">Privacy Policy
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span>
              </a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 Todos los derechos reservvados por
         <a href="#"> 5-Ri no utsukushī mirai, Blog.</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>

<!-- Scripts-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
let x = $(document.querySelector('[name="nickname"]'));
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $('[name="nickname"]');
  x.mouseover(entraMouse);
  x.mouseout(saleMouse);
}

function entraMouse() {
  $(this).css("background-color", "#4C739A");
}

function saleMouse() {
  $(this).css("background-color", "#ffffff00");
}
</script>

  <script>
    const conteo = function(milisegundos){
      setTimeout(function(){
        $('#conteo').fadeOut();
        $('body').removeClass('hidden');
      },milisegundos);
      
    };
    conteo(1000);
  </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
let x = $(document.querySelector('[name="nickname"]'));
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $('[name="nickname"]');
  x.mouseover(entraMouse);
  x.mouseout(saleMouse);
}

function entraMouse() {
  $(this).css("background-color", "#4C739A");
}

function saleMouse() {
  $(this).css("background-color", "#ffffff00");
}
</script>

  <script>
    const conteo = function(milisegundos){
      setTimeout(function(){
        $('#conteo').fadeOut();
        $('body').removeClass('hidden');
      },milisegundos);
      
    };
    conteo(1000);
  </script>
</body>

</html>