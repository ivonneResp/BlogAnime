@section('contenido')

<style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            padding: 0;
            margin: 0
        }

        #notfound {
            position: relative;
            height: 100vh;
            background:linear-gradient(30deg, lightsalmon,goldenrod, gold, goldenrod, lightsalmon);
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .notfound {
            max-width: 460px;
            width: 100%;
            text-align: center;
            line-height: 1.4
        }

        .notfound .notfound-401 {
            height: 158px;
            line-height: 153px
        }

        .notfound .notfound-401 h1 {
            font-family: josefin sans, sans-serif;
            color: #222;
            font-size: 220px;
            letter-spacing: 10px;
            margin: 0;
            font-weight: 700;
            text-shadow: 2px 2px 0 #c9c9c9, -2px -2px 0 #c9c9c9
        }

        .notfound .notfound-401 h1>span {
            text-shadow: 2px 2px 0 	#FF7F50, -2px -2px 0 #FFA07A, 0 0 8px #FFA07A 
        }

        .notfound a {
            font-family: josefin sans, sans-serif;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            background: 0 0;
            color: #000;
            border: 2px solid #8B4513;
            display: inline-block;
            padding: 10px 25px;
            font-weight: 700;
            -webkit-transition: .2s all;
            transition: .2s all
        }


    </style>

<div id="notfound">
        <div class="notfound">
            <div class="notfound-401">
            <h1><span>4</span><span>0</span><span>1</span></h1>
    </div>
<div>
    <h1>NO AUTORIZADO</h1>
    <h2>No tiene permiso para acceder al sitio web sin antes iniciar sesión.</h2>
    <ul>
        <img class="notfound-401" src="{{ asset('images/401.jpg') }}" alt="noautorizado">
    </ul>
</div>
<div>
    <a href="/">REGRESAR AL INICIO</a>
</div>

<div>

</div>
@endsection