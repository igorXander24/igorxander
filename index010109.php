<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
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
            /*background: #222*/
            flex-direction: column;
        }

        scroll {
            position: absolute;
        }

        scroll, arrow {
            flex-direction: column;
        }


        mouse {
            height: 31px;
            width: 21px;
            border-radius: 15px;
            transform: none;
            border: 2px solid white;
            top: 170px;
        }

        wheel {
            height: 8px;
            width: 2px;
            margin: 5px auto;
            background: white;
            position: relative;
        }

        wheel {
            -webkit-animation: mouse-wheel 1.2s ease infinite;
            -moz-animation: mouse-wheel 1.2s ease infinite;
        }

        @-webkit-keyframes mouse-wheel {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                -webkit-transform: translateY(6px);
                -ms-transform: translateY(6px);
                transform: translateY(6px);
            }
        }

        @-moz-keyframes mouse-wheel {
            0% {
                top: 1px;
            }
            50% {
                top: 2px;
            }
            100% {
                top: 3px;
            }
        }

        arrow {
            margin-top: 6px;
            align-items: center;
        }

        one,
        two,
        three {
            width: 8px;
            height: 8px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-right: 2px solid white;
            border-bottom: 2px solid white;
            margin: 0 0 3px 0;
        }

        one,
        two,
        three {
            -webkit-animation: mouse-scroll 1s infinite;
            -moz-animation: mouse-scroll 1s infinite;
        }

        one {
            -webkit-animation-delay: .1s;
            -moz-animation-delay: .1s;
            -webkit-animation-direction: alternate;
        }

        two {
            -webkit-animation-delay: .2s;
            -moz-animation-delay: .2s;
            -webkit-animation-direction: alternate;
        }

        three {
            -webkit-animation-delay: .3s;
            -moz-animation-delay: .3s;
            -webkit-animation-direction: alternate;
        }

        @-webkit-keyframes mouse-scroll {
            0% {
                opacity: 0;
            }
            50% {
                opacity: .5;
            }
            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes mouse-scroll {
            0% {
                opacity: 0;
            }
            50% {
                opacity: .5;
            }
            100% {
                opacity: 1;
            }
        }

        @-o-keyframes mouse-scroll {
            0% {
                opacity: 0;
            }
            50% {
                opacity: .5;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes mouse-scroll {
            0% {
                opacity: 0;
            }
            50% {
                opacity: .5;
            }
            100% {
                opacity: 1;
            }
        }

        portada, datos, estudios, experiencia, documento, referencias {
            width: 100%;
            height: 100vh;
            border-bottom: 1px solid #ccc;
        }

        portada {
            background-color: #243747;
            align-items: center;
            padding: 120px 60px;
        }

        portada {
            flex-direction: column;

        }

    </style>
</head>
<body>

<!-- Scrool -->
<!--
<scroll>
    <mouse>
        <wheel></wheel>
    </mouse>
    <arrow>
        <one></one>
        <two></two>
        <three></three>
    </arrow>
</scroll>
-->

<!-- Portada -->
<portada>
    <developer>
        <photo>
            <img src="igorxander.jpg" alt="Igor Alexander" width="240px" height="288px">
        </photo>
        <information>
            <name>
                Igor Alexander @developer
            </name>
            <slogan></slogan>
        </information>
    </developer>
</portada>
<!-- Información Personal -->
<datos></datos>
<estudios></estudios>
<conocimientos></conocimientos>
<experiencia></experiencia>
<documento></documento>
<documento></documento>
<documento></documento>
<referencias></referencias>
<!-- -->
</body>
</html>