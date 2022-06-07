@extends('layouts.base')

@section('contenido')
<!-- Contenido -->
<div class="container">
    {{ Breadcrumbs::render('postsone') }}
</div>
<section class="container content">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <h1 align="center"><b>Platinum End プラチナエンド </b></h1>
        <br>
        <p> <b><br>Mirai kakeashi </br></b>Es el protagonista principal de la historia. Es un estudiante solitario recién graduado cuya familia murió en un accidente cuando el solo era un niño, por lo tanto, fue adoptado por su tía y su familia. En un principio, eran amables con él, pero un tiempo después, empezó a recibir constantes abusos por parte de ellos, los cuales lo maltrataban y lo trataban como un esclavo.
        No solo eso, sino que también era maltratado por sus compañeros de clases, quienes se alejaban y se burlaban de él constantemente debido a su mala higiene, ya que sus tíos le tiraban alcohol.
        Una vez que se gradua, decide suicidarse arrojandose por un edificio, hasta que antes de la caída es salvado por su Ángel Guardián, Nasse, quién lo convierte en un Candidato a Dios y le otorga un par de Alas y Flechas Ángelicales. Ella le revela a Mirai que la muerte de su familia no fue un accidente. Su tía y su tío sabotearon el auto de la familia, provocando que explotara con la familia de Mirai adentro, para obtener el dinero de su familia.
        Debido a su pasado, Mirai es una persona muy pesimista. También, es incapaz de odiar o despreciar a alguien por más daño que reciba, debido a las enseñanzas de sus padres. En un principio, es muy propenso a sentir mucho miedo en situaciones peligrosas, tanto así que es incapaz de pensar con claridad, hasta que más tarde se acostumbra a enfrentar sus miedos y a su vida como un Candidato a Dios.</p>
</br>
<br>
<div class="col-md-4 col-12 justify-center ">
    <div class="card m-auto" style="width: 18rem;">
                    <div class="card-body"  data-aos="flip-left" data-aos-duration="3000">
        <img class="card-img-top" src="{{asset('images/mirai.jpg')}}" >
        <div class="row"> </div>
    </div>
</div>
<br>
    <div>
        <a href="/noticia" class="link-danger">Noticias recientes de Platinum End プラチナエンド</a>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</br>
</section>
        @endsection

