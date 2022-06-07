<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Anime</title>
    <!-- Estilos css -->
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Estilos de visibilidad -->
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

    
</head>

<body class="hidden">
  <div id="conteo">
    <div id="fondo-loader">
      <center><image src="https://imgs.developpaper.com/imgs/2018022616461051.gif"></image></center>
  </div>
  </div>
  
<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <div class="movil">
            <img src="{{asset('images/hjSin título-1.png')}}" alt="logoAnime" width="180px" class="d-inline-block align-text-top mouse-tracking">
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
          <a name="nickname" class="nav-link active" aria-current="page" href="/homeusers">Inicio
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a>
        </li>
       <!-- <li class="nav-item">
          <a name="nickname" class="nav-link" href="/postsusers">Post
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a>
        </li>-->

        <li class="nav-item">
          <a name="nickname" class="nav-link" href="/usuarioV">Posts
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a>
        </li>

        
        <li class="nav-item">
          <a name="nickname" class="nav-link" href="/blogusers">Sobre el blog
          <span class="border border-top"></span>
          <span class="border border-right"></span>
          <span class="border border-bottom"></span>
          <span class="border border-left"></span>
          </a></li>
          
          
          
        
      </ul>
      <li class="navbar navbar-expand-lg navbar-light bg-light" align="right" width="48">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick= "event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                        style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
      
    </div>
    
    
  </div>

  
</li>
</nav>



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
    <br>
    <!-- Footer -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>ACERCA DE</h6>
            <p class="text-justify">i>こんにちは E5-Ri no utsukushī mirai. </i> Es un blog que presenta reseñas, posts y opiniones sobre el mundo anime. Su significado "El hermoso futuro de los cinco", por lo que son 5 personas que buscan darte lo mejor del anime y  compartir un hermoso futuro.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Menú</h6>
            <ul class="footer-links menu">
              <li><a href="/usuarioV">Posts
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span></a></li>
              <li><a href="/blogusers">Sobre el blog
              <span class="border border-top"></span>
              <span class="border border-right"></span>
              <span class="border border-bottom"></span>
              <span class="border border-left"></span>
              </a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>ENLACES RÁPIDOS</h6>
            <ul class="footer-links menu">
              <li><a href="/homeusers">Inicio
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
            <p class="copyright-text">Copyright &copy; 2022 Todos los derechos reservados por
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
</body>

</html>
