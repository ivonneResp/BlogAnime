@extends('layouts.base')

@section('contenido')
<!-- Contenido -->

<!-- Titulo  -->
<div class="container">
{{ Breadcrumbs::render('home') }}
    <div class="row">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <div class="col-12">
            <h class="h1-titulo fst-italic"><b><center>Los Animes mas destacados </center></b></h>
        </div>
    </div>
</div>
<br>
<!-- Posts -->
<div class="container">
    <!-- Primerra fila -->
    <div class="row">
        <!-- Columna derewcha -->
        <div class="col-12 col-md-12 col-lg-6">
            <div class="">
                <img src="https://phantom-marca.unidadeditorial.es/7e66427b31aa2ed202352d152f6d801f/resize/1320/f/jpg/assets/multimedia/imagenes/2022/01/21/16427899382505.jpg" class="card-img-top" alt="..." data-aos="fade-right" data-aos-duration="1500">
                <div class="card-body" data-aos="fade-up" data-aos-duration="3000">
                    <h5 class="card-title h5">El retumbar a comenzado, el final cada vez esta más cerca, todo lo planeado por Eren se esta haciendo relalidad, Tatakae!!!</p>
                </div>
            </div>
        </div>

        <!-- Columna izquierda -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <h3 class="h3"><center>Más visto</center></h3>
            <br>
            <div class="row">
                <!-- Primera columna -->
                <div class="col-12">
                    <div class="" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <br>
                                <img class="img-thumbnail" src="https://www.tonica.la/__export/1607370609701/sites/debate/img/2020/12/07/kimetsu-no-yaiba-portada.jpg_1902800913.jpg" alt="..." class="img-fluid rounded-start" data-aos="fade-down-left"data-aos-duration="1500">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" data-aos="fade-up" data-aos-duration="3000">
                                <h5 class="card-title h5">Arco del Herrero</h5>
                                    <p class="card-text">La Tercera entrega de kimetsu no yaiba mostrará una épica batalla contra los mayores aliados de los cazadores. Los Pilares Kanroji y Tokito no se quedarán de brazos cruzados.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-12">
                    <div class="" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <br>
                                <img class="img-thumbnail" src="https://ae01.alicdn.com/kf/Ha4fee770cb4b44a996c53331be9d6a43S/Bordado-de-diamantes-cuadrados-pintura-de-Anime-Jujutsu-Kaisen-Kits-de-punto-de-cruz-mosaico-decoraci.jpg" class="img-fluid rounded-start" alt="..." data-aos="fade-down-left"data-aos-duration="1500">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" data-aos="fade-up" data-aos-duration="3000">
                                <h5 class="card-title h5">Segunda temporada</h5>
                                    <p class="card-text">Ya es oficial: El anime de Jujutsu Kaisen regresará con una segunda temporada. La adaptación a la pequeña pantalla del manga de Gege Akutami en las páginas de la Weekly Shonen Jump tendrá una Temporada 2 en 2023.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<br>
<div class="container">
    <hr class="divicion-one">
</div>
<br>

<!-- Segunda seccion  -->
<div class="container">
    <!-- Primera fila  -->
    <div class="row">
        <div class="col-12  col-md-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="#">
                        <img src="images/sono.jpg" alt="" class="img-thumbnail" data-aos="flip-left" data-aos-duration="1500">
                    </a>
                </div>
                <div class="col-12 col-md-9">
                    <a href="#" class="link-none-edit" ><h4 class="h4"><center>La risa de Gojo causo un gran impacto</center></h4></a>
                    <br>
                    <p data-aos="flip-right" data-aos-duration="3000">Cuándo Mi querida disfrazada La última vez que mostró a la extraña pareja, Marin acababa de decirle a Gojo que el próximo evento de cosplay se llevará a cabo en dos semanas después de ...</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-3">
                <a href="#">
                        <img src="images/kimetsu2.jpg" alt="" class="img-thumbnail" data-aos="flip-left" data-aos-duration="1500">
                    </a>
                </div>
                <div class="col-12 col-md-9">
                    <a href="#" class="link-none-edit"><h4 class="h4"><center>Se anuncia una tercera temporada</center></h4></a>
                    <br>
                    <p data-aos="flip-right" data-aos-duration="3000"> Vengo a anunciaros con una sonrisa de oreja a oreja que... <b>¡La tercera temporada de Kimetsu no Yaiba ya está en camino!</b>  Así lo han confirmado los responsables de la franquicia, y ya tenemos un primer...</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="#">
                        <img src="images/35147.jpg" alt="" class="img-thumbnail" data-aos="flip-left" data-aos-duration="1500">
                    </a>
                </div>
                <div class="col-12 col-md-9">
                    <a href="#" class="link-none-edit"><h4 class="h4"><center>One Piece se convirtió en el anime más visto en EE. UU.</center></h4></a>
                    <br>
                    <p data-aos="flip-right" data-aos-duration="3000"> Un reciente estudio sobre las preferencias de los fanáticos reportó que One Piece es el anime más visto en Estados Unidos.</p>
                </div>
            </div>


        </div>

        <div class="col-12 col-md-12 col-lg-3">
            <div class="escritorio">
                <a href="#">
                <div class="c-img-hover">
                    <img src="https://w0.peakpx.com/wallpaper/915/834/HD-wallpaper-ataque-a-los-titanes-anime-shingeki-no-kyojin.jpg" alt="" class="img-thumbnail" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="text-conten">
                        <h4 class="h4">
                        ¿En que orden ver <br> Shingeki no Kyojin?
                        </h4>
                    </div>

                </div>
                </a>
                <h3 class="h3" data-aos="fade-up-left" data-aos-duration="1500"> <center>Lo mejor de Shingeki no Kyojin</center> </h3>

            </div>

            <div class="movil">
                <div >
                    <img src="https://w0.peakpx.com/wallpaper/915/834/HD-wallpaper-ataque-a-los-titanes-anime-shingeki-no-kyojin.jpg" alt="" class="img-thumbnail">
                    <a href="#" class="link-none-edit">
                        <div>
                            <br>
                            <h4 class="h4" > <center>¿En que orden ver Shingeki no Kyojin? </center></h4>
                        </div>

                    </a>

                </div>

            </div>

        </div>
        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>


    </div>

</div>


<!--<a href="/historia" class="post-link"><b>Leer más</b></a> -->

@endsection

<!--
<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
<div id="texto-animado">
        <p id="parrafo-animado">Ejemplo de animación en vivo con el scroll.</p>
    </div>

const divanimado = document.getElementById("texto-animado");

        document.addEventListener("scroll", event => {
            if( window.scrollY>=400 ) {
                document.getElementById("parrafo-animado").classList.add("animate");
            }

        }, { passive: true });
.animate { position: relative; animation: aparecer 5s forwards; }

@keyframes aparecer {
    from { left: 0; }
    to { left: 50%; }
}
-->
