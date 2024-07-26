@extends('layouts.app')

@section('head')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}

    </head>
@endsection

@section('title')
    <title>Instrumento </title>
@endsection
@section('content')
    <div class="row" style="width: 100%;margin:0px;padding:0px;height: 100%;">
        <div class="col-5 menu">
            <h5>Instrumento {{ $instrumento->instrumento->nombre }}</h5>
            {{-- <br> --}}
            <button type="button" class="btn btn-primary" onclick="history.back()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>
                &nbsp;Atrás
            </button>
            <div class="col datos-generales">
                <div class="row generalidades" style="display: flex;">
                    <h6 style="text-align: center;"><b>Generalidades del instrumento</b></h6>
                    <div class="col datos-generales">
                        <h6 style="text-align: center;"><b>Generalidades de la estación</b></h6>
                        {{-- <b>Estado: </b>{{$estacion->estado->nombre}}<br> --}}
                        <b>Variable: </b> {{$variable->nombre}}<br>
                        <b>Altura sobre el nivel del suelo: </b>{{ $instrumento->instrumento->altura_sobre_nivel_suelo }} <br>
                        <b>Descripcion: </b>{{ $instrumento->instrumento->descripcion }} <br>
                        <b>Marca: </b>{{ $instrumento->marca }} <br>
                        <b>Fecha de adquisición: </b>{{ $instrumento->fecha_de_fundacion }} <br>
                        <b>Parámetros que mide: </b><br>
                        <ul style="list-style-type: disc; margin-left:20px;">
                            @foreach ( $instrumento->instrumento->Parametros as $parametro)
                                <li>{{$parametro->nombre}} ({{$parametro->Unidad_De_Medida->abreviatura}})</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col imagenes">
                        <div class="thumbnail-container" id="thumbnailContainer"
                            style="margin-top:12px;text-align: center;">
                            <img id="thumbnailImage"
                                src="https://img.freepik.com/foto-gratis/colores-vibrantes-que-arremolinan-caos-submarino-futurista-generado-ia_188544-9692.jpg?w=1060&t=st=1721846477~exp=1721847077~hmac=51e02754ebd0d6ed13cbf64a449ce310e0f8be74f87af68e5f1847d5c83d27d4"
                                class="thumbnail" alt="Thumbnail">
                            <span id="thumbnailLabel" class="thumbnail-label">Ver imágenes</span>
                        </div>
                        <div id="carouselOverlay" class="overlay">
                            <div id="carouselExampleIndicators" class="carousel slide pointer-event custom-carousel">
                                <button class="close-btn" onclick="hideCarousel()"
                                    style="border-radius: 5px">&times;</button>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://img.freepik.com/foto-gratis/colores-vibrantes-que-arremolinan-caos-submarino-futurista-generado-ia_188544-9692.jpg?w=1060&t=st=1721846477~exp=1721847077~hmac=51e02754ebd0d6ed13cbf64a449ce310e0f8be74f87af68e5f1847d5c83d27d4"
                                            class="d-block w-100 img-limited-height">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://img.freepik.com/foto-gratis/pajaro-buho-flores-colores-generativo-ai_206725-745.jpg?w=360&t=st=1721846839~exp=1721847439~hmac=8119427179d820d5e93e8e9b4f48d7479f19eab8b83fa2202fb1a7f28a3205be"
                                            class="d-block w-100 img-limited-height" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://img.freepik.com/foto-gratis/diseno-colorido-diseno-espiral_188544-9588.jpg?w=1060&t=st=1721846859~exp=1721847459~hmac=4db7037477f1e19e335bb87026e2d2bd21dd067a0233b4a490513794ae13b985"
                                            class="d-block w-100 img-limited-height" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 right">
            <div class="aside" style="border-radius: 5px;padding:10px">
                <h6>Parámetros de medición</h6>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                </div>
            </div>
        </div>

        <style>
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                display: none;
                /* Initially hidden */
                justify-content: center;
                align-items: center;
                z-index: 1050;
                /* Higher than other elements */
            }

            .custom-carousel {
                width: 600px;
                height: 600px;
                background: #1f1f1f;
                position: relative;
                margin: 15px;
                border-radius: 8px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* .carousel-inner{
            display: flex; align-items: center; justify-content: center
        } */

            .custom-carousel .carousel-inner img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 8px;
            }

            .close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                background: #fff;
                border: none;
                font-size: 1.5rem;
                cursor: pointer;
                z-index: 1060;
            }

            .thumbnail-container {
                position: relative;
                display: inline-block;
                width: 200px;
                height: 200px;
                cursor: pointer;
            }

            .thumbnail {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 8px;
            }

            .thumbnail-label {
                position: absolute;
                bottom: 10px;
                /* Position the label 10px from the bottom */
                left: 50%;
                transform: translateX(-50%);
                /* Center horizontally */
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                padding: 5px 10px;
                border-radius: 5px;
                font-size: 1rem;
                text-align: center;
            }

            .img-limited-height {
                max-height: 600px;
                width: auto;
                /* Mantiene la proporción de la imagen */
                object-fit: cover;
                /* Opcional: Para cubrir el área especificada sin distorsionar la imagen */
            }

            .generalidades {
                border-radius: 5px;
                /* border: 2px solid rgb(216, 216, 216); */
                margin: 12px;
                background-color: #ffffff;
                padding-top: 12px;
                padding-bottom: 12px;
            }

            * {
                box-sizing: border-box;
            }

            .row::after {
                content: "";
                clear: both;
                display: block;
            }

            [class*="col-"] {
                float: left;
                padding: 10px;
            }

            html {
                font-family: "Lucida Sans", sans-serif;
            }

            .header {
                background-color: #9933cc;
                color: #ffffff;
                padding: 15px;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .estaciones {
                background-color: #ffffff;
                /* padding: 15px; */
                color: #313131;
                text-align: center;
                font-size: 14px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                height: 100%;
                border-radius: 5px
            }

            /* .menu li:hover {
                background-color: #CFE2FF;
            } */

            .aside {
                background-color: #ffffff;
                /* padding: 15px; */
                color: #313131;
                text-align: center;
                font-size: 14px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                height: 100%;
            }

            /* For desktop: */
            .col-1 {
                width: 8.33%;
            }

            .col-2 {
                width: 16.66%;
            }

            .col-3 {
                width: 25%;
            }

            .col-4 {
                width: 33.33%;
            }

            .col-5 {
                width: 41.66%;
            }

            .col-6 {
                width: 50%;
            }

            .col-7 {
                width: 58.33%;
            }

            .col-8 {
                width: 66.66%;
            }

            .col-9 {
                width: 75%;
            }

            .col-10 {
                width: 83.33%;
            }

            .col-11 {
                width: 91.66%;
            }

            .col-12 {
                width: 100%;
            }

            @media only screen and (max-width: 768px) {

                /* For mobile phones: */
                [class*="col-"] {
                    width: 100%;
                    padding-top: 12px;
                }

            }

            .col a {
                text-decoration: none;
                color: inherit;
            }

            .col a:hover .card-body {
                background-color: rgb(186, 214, 248);
                /* Color deseado al pasar el mouse */
            }
        </style>
        <script>
            document.getElementById('thumbnailContainer').addEventListener('click', function() {
                document.getElementById('carouselOverlay').style.display = 'flex';
            });

            function hideCarousel() {
                document.getElementById('carouselOverlay').style.display = 'none';
            }
        </script>
    @endsection
