<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Igor Alexander Quispe Vásquez</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="icon" href="id-card.svg">
    <style>
        /* ESTILOS NORMALES (para escritorios muy grandes)
            ========================================================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        body,
        body * {
            display: flex;
        }

        body {
            flex-direction: column;
        }

        portada, datos, estudios, experiencia, documento, referencias {
            width: 100%;
            height: 100vh;
            /*border-bottom: 1px solid #ccc;*/
        }

        portada, information, datos {
            flex-direction: column;
        }

        /**
         * PORTADA
         */
        portada {
            /*background-color: #463F44;*/
            justify-content: space-between;
            /*background-image: url("lines.svg");*/
            background-color: #395976;
            /*background-position: center;*/
            /*background-repeat: no-repeat;*/
            background-size: cover;
            align-items: center;
            padding: 10% 5% 5% 5%;
        }


        portada > developer {
            /*background-color: dimgray;*/
            border: 1px solid #ccc;
        }


        portada > developer > photo {
            position: relative;
            justify-content: center;
            align-items: center;

        }

        portada > developer > photo > border {
            position: absolute;
            border: 1px solid #ababab;
            width: 95%;
            height: 95%;
        }

        portada > developer > information {
            padding: 20px 10px 0 10px;
            max-width: 450px;
        }

        portada > developer > information > name {
            font-size: 2.5em;
            font-style: normal;
            color: white;
        }

        portada > developer > information > occupation {
            font-size: 1.5em;
            font-style: normal;
            color: yellowgreen;
        }

        portada > developer > information > slogan {
            flex-grow: 1;
            font-size: 0.8em;
            font-style: normal;
            color: white;
        }

        portada > developer > information > contacts {
            font-size: 0.9em;
            font-style: normal;
            color: white;
        }

        portada > developer > information > contacts > * {
            margin: 0 10px;
            align-items: center;
        }

        portada > developer > information > contacts > phone > *,
        portada > developer > information > contacts > mail > *{
            margin: 0 4px;
        }

        portada > developer > information > connect {
            margin-top: 10px;
        }

        arrow {
            border-color: #ccc;
            border-style: solid;
            border-width: 0.25em 0.25em 0 0;
            border-radius: 3px;
            content: '';
            height: 2.45em;
            left: 0.15em;
            top: 0.15em;
            width: 2.45em;
            animation: translate-bottom 2s infinite;
            cursor: pointer;
        }

        /**
         * ARROWS
         */
        arrow.top {
            transform: rotate(0deg);
        }

        arrow.right {
            transform: rotate(45deg);
        }

        arrow.bottom {
            transform: rotate(135deg);
        }

        arrow.left {
            transform: rotate(-135deg);
        }

        @-webkit-keyframes translate-bottom {
            0% {
                -webkit-transform: translate(0, 0) rotate(135deg);
                transform: translate(0, 0) rotate(135deg);
            }
            50% {
                -webkit-transform: translate(0, 10px) rotate(135deg);
                transform: translate(0, 10px) rotate(135deg);
            }
            100% {
                -webkit-transform: translate(0, 0) rotate(135deg);
                transform: translate(0, 0) rotate(135deg);
            }
        }

        @keyframes translate-bottom {
            0% {
                -webkit-transform: translate(0, 0) rotate(135deg);
                transform: translate(0, 0) rotate(135deg);
            }
            50% {
                -webkit-transform: translate(0, 10px) rotate(135deg);
                transform: translate(0, 10px) rotate(135deg);
            }
            100% {
                -webkit-transform: translate(0, 0) rotate(135deg);
                transform: translate(0, 0) rotate(135deg);
            }
        }

        /**
         * MOUSE
         */
        mouse {
            cursor: pointer;
            border: 1px solid white;
            border-radius: 1em;
            width: 2em;
            height: 3.25em;
            justify-content: center;
            padding-top: 0.5em;
        }

        mouse > scroll {
            border: 1px solid white;
            height: 1em;
            animation: scroll 400ms infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateY(0em);
            }

            50% {
                transform: translateY(0.5em);
            }

            100% {
                transform: translateY(1em) scale(0.5);
            }
        }

        /**
         * ICONS
         */
        .icon.x24{
            width: 24px;
            height: 24px;
        }

        .phone {
            background-image: url("smartphone.svg");
        }

        .mail {
            background-image: url("letter.svg");
        }

        .youtube {
            background-image: url("youtube.svg");
        }

        .tumblr {
            background-image: url("tumblr.svg");
        }

        /*
        .github {
            background-image: url("github.svg");
        }
        */

        box.youtube {
            background-color: #e53935;
        }

        box.tumblr {
            background-color: #395976;
        }

        /*
        box.github {
            background-color: #ffffff;
        }
        */

        /**
         * DATOS PERSONALES
         */
        datos {
            /*
            background-image: url("abstract-water-wallpaper.svg");
            background-size: cover;
            */
        }

        datos > page {
            margin: 15px;
        }

        datos > page * {
            color: lightcoral;
            font-family: 'Playfair Display', serif;
            font-size: 6vw;
        }

        datos > formulario {
            flex-wrap: wrap;
        }

        datos > formulario > control {
            flex-direction: column;
            margin: 1em 3em;
            align-items: flex-start;
        }

        datos > formulario > control > label {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 1.5em;
            /*margin: 0 10px 0 15px;*/
            color: #8958b1;
        }

        datos > formulario > control > text {
            border: none;
            border-bottom: 1px solid darkgray;
            color: dimgray;
            font-size: 0.9em;
        }

        datos > map {
            background-color: darkgray;
            flex-grow: 1;
        }

        datos > map * {
            display: block;
        }




        /* RESPONSIVE
           ========================================================================= */

        /* Tablets en horizonal y escritorios normales
           ------------------------------------------------------------------------- */
        @media (min-width: 768px) and (max-width: 1199px) {
            portada {
                /*background-color: #463F44;*/
                justify-content: space-between;
                /*background-image: url("lines.svg");*/
                background-color: #e53935;
                /*background-position: center;*/
                /*background-repeat: no-repeat;*/
                background-size: cover;
                align-items: center;
                padding: 10% 5% 5% 5%;
            }
        }

        /* Móviles en horizontal o tablets en vertical
           ------------------------------------------------------------------------- */
        @media (max-width: 767px) {
            portada {
                justify-content: space-between;
                background-image: url("lines.svg");
                background-size: cover;
                align-items: center;
                padding: 5% 5% 5% 5%;
            }

            portada > developer {

                align-items: center;
                border: 1px solid #ccc;
                min-width: 220px;
            }

            portada > developer > photo > img {
                width: 144px;
                height: 173px;
            }

            portada > developer > information {

                padding: 0;
                max-width: 320px;
            }

            portada > developer > information > name {

                font-size: 1.4em;
            }

            portada > developer > information > occupation {
                font-size: 1.2em;

            }



            portada > mouse {
                width: 1.5em;
                height: 2.5em;
                padding-top: 0.3em;
            }

            portada > mouse > scroll {
                height: 0.8em;
            }
        }

        /* Móviles en vertical
           ------------------------------------------------------------------------- */
        @media (max-width: 480px) {
            portada {
                justify-content: space-between;
                background-image: url("lines.svg");
                background-size: cover;
                align-items: center;
                padding: 5% 5% 5% 5%;
            }

            portada > developer {
                flex-direction: column;
                align-items: center;
                border: 1px solid #ccc;
                min-width: 220px;
            }

            portada > developer > photo > img {
                width: 96px;
                height: 115px;
            }

            portada > developer > information {
                justify-content: center;
                padding: 0;
                max-width: 240px;
            }

            portada > developer > information > name {
                justify-content: center;
                font-size: 1.4em;
            }

            portada > developer > information > occupation {
                font-size: 1.2em;
                justify-content: center;
            }

            portada > developer > information > slogan {
                display: none;
            }

            portada > developer > information > contacts {
                display: none;
            }

            portada > mouse {
                width: 1.5em;
                height: 2.5em;
                padding-top: 0.3em;
            }

            portada > mouse > scroll {
                height: 0.8em;
            }
        }

    </style>
</head>
<body>

<!-- Portada -->
<portada>
    <developer>
        <photo>
            <img src="igorxander.jpg" alt="Igor Alexander" width="240px" height="288px">
            <border></border>
        </photo>
        <information>
            <name>
                IgorAlexander
            </name>
            <occupation>
                @SoftwareDeveloper
            </occupation>
            <slogan>
                Escribir código es como escribir un libro y lo puedes hacer en equipo o individual, debe ser coherente pe. si se decide escribir a Don Quijote al principio no puedes decir que era alto y luego cambiarlo por alguien bajo.
            </slogan>
            <contacts>
                <phone>
                    <icon class="icon x24 phone"></icon>
                    <number>+51930426899</number>
                </phone>
                <mail>
                    <icon class="icon x24 mail"></icon>
                    <address>xanderxd12@gmail.com</address>
                </mail>
            </contacts>
            <connect>
                <box class="youtube">
                    <icon class="icon x24 youtube"></icon>
                </box>
                <box class="tumblr">
                    <icon class="icon x24 tumblr"></icon>
                </box>
                <!--
                <box class="github">
                    <icon class="icon x24 github"></icon>
                </box>
                -->
            </connect>
        </information>
    </developer>
    <!--<arrow class="bottom"></arrow>-->
    <mouse>
        <scroll></scroll>
    </mouse>
</portada>
<!-- Información Personal -->
<datos>
    <page>
        <number>1</number>
        <description>
            : Datos Personales
        </description>
    </page>
    <formulario>
        <control>
            <label>Apellidos y Nombres: </label>
            <text>Igor Alexander Quispe Vásquez</text>
        </control>
        <control>
            <label>DNI: </label>
            <text>46914430</text>
        </control>
        <control>
            <label>Fecha de Nacimiento: </label>
            <text>4 de diciembre, 1990</text>
        </control>
        <control>
            <label>Edad: </label>
            <text>28 años</text>
        </control>
        <control>
            <label>Estado Civil: </label>
            <text>Soltero</text>
        </control>
        <control>
            <label>Nacionalidad: </label>
            <text>Peruano</text>
        </control>
        <control>
            <label>Celular: </label>
            <text>+51930426899</text>
        </control>
        <control>
            <label>Domicilio: </label>
            <text>Ca. Ramón Castilla #352 Villa Hermosa - Chepén - La Libertad</text>
        </control>
    </formulario>
    <map id="map"></map>
</datos>
<estudios></estudios>
<conocimientos></conocimientos>
<experiencia></experiencia>
<documento></documento>
<documento></documento>
<documento></documento>
<referencias></referencias>
<!-- -->
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: -7.216500, lng: -79.431779};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 15, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<!--Load the API from the specified URL igor alexander quispe
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVKcPUhgJAHD4D8gMCqTPMn45My6mlLb4&callback=initMap">
</script>

</body>
</html>
