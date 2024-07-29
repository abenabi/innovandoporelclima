@extends('layouts.app')

@section('head')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}

  </head>
@endsection

@section('title')
    <title>Estación </title>
@endsection
@section('content')


    <div class="row" style="width: 100%;margin:0px;padding:0px;height: 100%;">
      <div class="col-8 menu">
        <h5>Estación meteorológica convencional {{$estacion->nombre}}</h5> 
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-left">
        <button type="button" class="btn btn-primary" onclick="history.back()" style="max-width: 86.6px; max-height: 37.6px; min-width: 86.6px; min-height: 37.6px; padding: 0; display: flex; align-items: center; justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg> 
            &nbsp;Atrás
        </button>
        @if($estacion->estado->id == 1)
          <script>
              document.addEventListener('DOMContentLoaded', function () {
                  Swal.fire({
                      title: 'Estación en Mantenimiento',
                      text: 'La estación está actualmente en mantenimiento.',
                      icon: 'warning',
                      confirmButtonText: 'Aceptar'
                  });
              });
          </script>
          <br>
          <div class="d-flex align-items-center" style="background: #ffffff;padding-left:10px;padding-right:10px;border-radius:5px;margin-right:10px;">
<img src="{{ asset('/' . $estacion->estado->icono_file_path) }}" class="card-img-top " alt="..." style="max-height: 37.6px; max-width:37.6px;"><span><b>Estación en mantenimiento</b></span></div>
@endif
        </div>
        <div class="row generalidades" style="display: flex;">
          <div class="col datos-generales">
            <h6 style="text-align: center;"><b>Generalidades de la estación</b></h6>
            {{-- <b>Estado: </b>{{$estacion->estado->nombre}}<br>
            <b>Estado: </b>{{$estacion->estado->id}}<br> --}}
            <b>Ubicación: </b>{{$estacion->latitude}}, {{$estacion->longitude}} <br>
            <b>Departamento: </b>{{$estacion->departamento->nombre}} <br>
            <b>Dirección: </b>{{$estacion->direccion}} <br>
            <b>Fecha de fundación: </b>{{$estacion->fecha_de_fundacion}} <br>
            <b>Responsable: </b>{{$estacion->responsable}} <br>
            <b>Certificaciones y estándares: </b>{{$estacion->certificaciones}}<br>
            <b>Accesibilidad y horarios: </b>{{$estacion->accesibilidad_y_horarios}}<br>
          </div>
          <div class="col imagenes">
            <div class="thumbnail-container" id="thumbnailContainer" style="margin-top:12px;text-align: center;">
              <img id="thumbnailImage" src="{{ asset('/' . $primeraImagen->file_path) }}" class="thumbnail" alt="Thumbnail">

              <span id="thumbnailLabel" class="thumbnail-label">Ver imágenes</span>
            </div>        
            <div id="carouselOverlay" class="overlay">
              <div id="carouselExampleIndicators" class="carousel slide pointer-event custom-carousel">
                <button class="close-btn" onclick="hideCarousel()" style="border-radius: 5px">&times;</button>
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  @foreach($estacion->imagen_estacion as $index => $imagen)
                  <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                      <img src="{{ asset('/' . $imagen->file_path) }}" class="d-block w-100 img-limited-height" alt="{{ $imagen->descripcion }}">
                      <div class="carousel-caption d-none d-md-block" style="background: #45454589;padding:0px;border-radious:5px;">
                        <p>{{$imagen->descripcion}}</p>
                      </div>
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row generalidades" style="display: flex; height: 500px;">
          <div class="dropdown">
              <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selecciona una variable
              </a>
          
              <ul class="dropdown-menu">
                  @foreach ($variables as $variable)
                      <li>
                          <a class="dropdown-item" href="#" data-icon="{{ asset($variable['icono_file_path']) }}" data-nombre="{{ $variable['nombre'] }}">
                              <img src="{{ asset($variable['icono_file_path']) }}" alt="{{ $variable['nombre'] }}" style="max-height: 20px; max-width: 20px; margin-right: 10px;">
                              {{ $variable['nombre'] }}
                          </a>
                      </li>
                  @endforeach
              </ul>
          </div>
      
          <div id="variable-info" class="ms-3" style="display: flex; align-items: center;">
              <img id="variable-icon" src="" alt="" style="max-height: 50px; max-width: 50px; margin-right: 10px;">
              <span id="variable-name"></span>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              {{-- <canvas id="myChart" width="400" height="200"></canvas> --}}
              {{-- <div class="container mt-5">
                <div id="chart-container" style="position: relative;">
                    <canvas id="myChart" width="600" height="400"></canvas>
                    <div id="tooltip" class="tooltip-img" style="display: none;"></div>
                </div>
            </div> --}}
          </div>
      </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <main>
                  <div id="reader"></div>
                  <div id="result"></div>
                </main>
            </div>
          </div> 
        </div>
      </div>
      <div class="col-4 right">
        <div class="aside" style="border-radius: 5px;padding:10px">
          <h6>Instrumentos de medición</h6>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($estacion->instrumentos as $instrumento )
              <div class="col">
                  <a href="{{url('instrumento/'.$instrumento->estacion_instrumento->id)}}" class="text-decoration-none text-dark">
                  <div class="card">
                    <img src="{{ asset('/' . $instrumento->icono_file_path) }}" class="card-img-top img-centered" alt="..." style="max-width: 150px; max-height: 150px;margin-top:10px;">

                    <div class="card-body">
                      <h5 class="card-title">{{$instrumento->nombre}}</h5>
                      <p class="card-text">{{$instrumento->descripcion}}</p>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

  <style>

.img-centered {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none; /* Initially hidden */
      justify-content: center;
      align-items: center;
      z-index: 1050; /* Higher than other elements */
    }

    .custom-carousel {
      width: 600px;
      height: 600px;
      background: #1f1f1f;
      position: relative;
      margin: 15px;
      border-radius: 8px;
      display: flex;justify-content: center;align-items: center;
    }
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

    #myChart {
            position: relative;
        }
        .tooltip-img {
            position: absolute;
            pointer-events: none;
            background: rgba(0, 0, 0, 0.75);
            color: #fff;
            padding: 10px;
            border-radius: 3px;
            font-size: 12px;
            white-space: normal; /* Permite el ajuste del texto */
            max-width: 300px; /* Ancho máximo del tooltip */
            overflow: hidden; /* Oculta el contenido que se desborda */
            word-wrap: break-word; /* Permite que las palabras largas se ajusten */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Añade una sombra para mejorar la visibilidad */
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
      bottom: 10px; /* Position the label 10px from the bottom */
      left: 50%;
      transform: translateX(-50%); /* Center horizontally */
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 1rem;
      text-align: center;
    }

    .img-limited-height {
  max-height: 600px;
  width: auto; /* Mantiene la proporción de la imagen */
  object-fit: cover; /* Opcional: Para cubrir el área especificada sin distorsionar la imagen */
}

    .generalidades{
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

.estaciones{
    background-color: #ffffff;
  /* padding: 15px; */
  color: #313131;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  height:100%;
  border-radius: 5px
}

.menu li:hover {
  background-color: #CFE2FF;
}

.aside {
  background-color: #ffffff;
  /* padding: 15px; */
  color: #313131;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  height:100%;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;padding-top: 12px;
  }
  
}

.col a {
            text-decoration: none;
            color: inherit;
        }
        .col a:hover .card-body {
            background-color: rgb(186, 214, 248); /* Color deseado al pasar el mouse */
        }
</style>
  <script>
    document.getElementById('thumbnailContainer').addEventListener('click', function() {
      document.getElementById('carouselOverlay').style.display = 'flex';
    });
  
    function hideCarousel() {
      document.getElementById('carouselOverlay').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function () {
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        const variableIcon = document.getElementById('variable-icon');
        const variableName = document.getElementById('variable-name');

        dropdownItems.forEach(item => {
            item.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default action
                const iconSrc = this.getAttribute('data-icon');
                const name = this.getAttribute('data-nombre');

                variableIcon.src = iconSrc;
                variableName.textContent = name;
            });
        });
    });
  </script>

<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var tooltipEl = document.getElementById('tooltip');

        // Define las imágenes para diferentes rangos de temperatura
        var imageUrls = {
            low: '/Iconos/temperatura_minima.gif', // Baja temperatura
            moderate: '/Iconos/temperatura_media.gif', // Temperatura moderada
            high: '/Iconos/temperatura_maxima.gif' // Alta temperatura
        };

        var recomendacion = {
            low: 'Asegúrate de vestirte en capas y mantenerte abrigado. Es recomendable consumir bebidas calientes y evitar exposiciones prolongadas al aire libre para prevenir resfriados.',
            moderate: 'Trata de mantenerte hidratado bebiendo suficiente agua. Usa ropa ligera y protectora del sol si estás al aire libre, y considera tomar descansos en áreas frescas.',
            high: 'Es crucial mantenerse bien hidratado. Evita las actividades físicas intensas durante las horas más cálidas del día. Usa ropa ligera, sombrero y protector solar. Busca refugio en lugares frescos y con aire acondicionado.'
        };
        

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['21/6/2021', '22/6/2021', '23/6/2021', '24/6/2021', '25/6/2021', '26/6/2021', '27/6/2021'],
                datasets: [{
                    label: 'Temperatura máxima (°C)',
                    data: [33, 30.5, 28.8, 32.4, 32, 31.2, 29.6],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        enabled: false, // Desactivar el tooltip predeterminado
                        external: function(context) {
                            // Obtén las coordenadas del tooltip
                            var tooltipModel = context.tooltip;
                            if (tooltipModel.opacity === 0) {
                                tooltipEl.style.display = 'none';
                                return;
                            }

                            // Definir la imagen en función del valor de la temperatura
                            var temp = tooltipModel.dataPoints[0].raw;
                            var imageUrl;
                            var recommendation;
                            if (temp < 30) {
                                imageUrl = imageUrls.low;
                                recommendation = recomendacion.low;
                            } else if (temp < 32) {
                                imageUrl = imageUrls.moderate;
                                recommendation = recomendacion.moderate;
                            } else {
                                imageUrl = imageUrls.high;
                                recommendation = recomendacion.high;
                            }

                            // Mostrar el tooltip y posicionarlo
                            if (tooltipModel.body) {
                                var title = tooltipModel.title[0];
                                var body = tooltipModel.body.map(b => b.lines).join('\n');
                                
                                tooltipEl.innerHTML = `
                                    <div>
                                        <img src="${imageUrl}" alt="Imagen" style="width: 100px; height: auto;"/>
                                        <div>Fecha: ${title}</div>
                                        <div>Temperatura: ${body} °C</div>
                                        <div><p>Recomendación: ${recommendation}</p></div>
                                    </div>
                                `;
                                tooltipEl.style.display = 'block';
                                tooltipEl.style.left = `${tooltipModel.caretX}px`;
                                tooltipEl.style.top = `${tooltipModel.caretY - tooltipEl.offsetHeight}px`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
