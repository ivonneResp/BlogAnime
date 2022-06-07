@extends('layouts.base')

@section('contenido')


<!-- Contenido -->
<section  class="container-fluid content">
        {{ Breadcrumbs::render('posts') }}
        <!-- Posts -->
        <div>
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item disabled">
    </li>
    <button class="page-link" id="boton-post" onclick="ver_post(1)">1</button>
    <button class="page-link" id="boton-post" onclick="ver_post(2)">2</button>
    <button class="page-link" id="boton-post" onclick="ver_post(3)">3</button>
    <li class="page-item">
    </li>
  </ul>
</nav>
</div>
        <div class="row justify-content-center">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <div id="texto-post"class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/platinum.jpg')}}" alt="dragonball" data-aos="fade-right" data-aos-duration="1500">
                        <div class="card-body" data-aos="fade-up" data-aos-duration="3000">
                            <small class="card-txt-category">Platinum End</small>
                            <h5 class="card-title my-2">RESEÑA</h5>
                            <div class="d-card-text">
                                Es un una obra más que interesante y bastante prometedora hasta el momento en cuanto a su premisa de acción, fantasía y misterio. Ohba y Obata vuelven a sus orígenes gracias a esta obra, un manga donde los ángeles ceden sus armas a los hombres para que uno de ellos se convierta en el nuevo Dios.
                            </div>
                            <a href="/postsone" class="post-link"><b>Leer más</b></a>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span class="card-txt-author">5-Ri no utsukushī mirai</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="card-txt-date">Hace 1 día</span>
                                </div>
                                <div class="col-6 text-right">
                                <button type="button" class="btn btn-outline-secondary">Ver post</button>
</div>
<div class="col-6 text-right">
                                <input type="button" class="btn btn-outline-secondary" onclick="alerta()" value="Comentar"></input>
</div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post 2 -->
                <div class="col-md-4 col-12 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/koroshi.jpg')}}" alt="kimetsu" data-aos="fade-down" data-aos-duration="1500">
                    <div class="card-body" data-aos="flip-left" data-aos-duration="3000" >
                        <small class="card-txt-category">Koroshi Ai</small>
                        <h5 class="card-title my-2">RESEÑA</h5>
                        <div class="d-card-text">
                            Dos asesinos se enfrentan cara a cara. Por un lado está Chateau, una cazadora de recompensas, y por otro lado el misterioso y poderoso Ryang-Ha. Chateau y Ryang-Ha se convertirán en enemigos tras este enfrentamiento... o así debería haber sido, pero por algún motivo, a Ryang-Ha le acaba gustando Chateau y se dedica a seguirla a todas partes.
                        </div>
                        <!--<a href="#" class="post-link"><b>Leer más</b></a>-->
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author">5-Ri no utsukushī mirai</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date">Hace 1 día</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/komi.jpg')}}" alt="onepiece" div data-aos="fade-left" data-aos-duration="1500">
                <div class="card-body" data-aos="fade-up" data-aos-duration="3000">
                    <small class="card-txt-category">Komi-san wa, Comyushou desu</small>
                    <h5 class="card-title my-2">RESEÑA</h5>
                    <div class="d-card-text">
                        Shouko Komi inmediatamente recibe una abrumadora atención y popularidad debido a su estoica belleza y refinada elegancia, por lo que sus compañeros la perciben como una diosa. Sin embargo, solo Hitohito Tadano,es capaz de descubrir que detrás de lo que todo el mundo cree, en realidad Komi tiene un serio problema para comunicarse con los demás. Tadano decide entonces ayudarla a cumplir su sueño de hacer cien amigos.
                    </div>
                    <!--<a href="#" class="post-link"><b>Leer más</b></a>-->
                    <hr>
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="card-txt-author">5-Ri no utsukushī mirai</span>
                        </div>
                        <div class="col-6 text-right">
                            <span class="card-txt-date">Hace 1 día</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function ver_post(numero){
        $.ajax({
            type: 'POST',
            url: "{{route('posts.buscar')}}",
            data: {id: numero},
            //dataType: 'json',
            success: function (valor) {
                $('#texto-post').html(valor);
            },
            error: function(err){
                console.log(err);
            }
        });
    }
</script>
<div class="col-12">
</div>
<!--<script>
        window.onscroll = function(ev) {
    if ((window.innerHeight + window.pageYOffset ) >= document.body.offsetHeight) {
        alert("ya has llegado al final de los posts");
        }
    };
</script>-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</div>
</section>

<script>
    function alerta(){
        alert("Debe iniciar sesion para poder comentar");
    }
</script>
@endsection
