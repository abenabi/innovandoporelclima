@extends('layouts.app')

@section('head')
<link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />
@endsection

@section('title')
    <title>Innovando por el clima</title>
@endsection
@section('content')

<style>
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
    width: 100%;
  }
}
    
    #map{
        width:100%;
        height: 588px;
        border-radius: 5px;
        /* margin: 5px; */
    }

    summary {
	color: #34b3a0;
	cursor: pointer;
	display: block;
	font-weight: bold;
}
summary::before {
	color: #3484b3;
	content: "\25BC";
	font-size: 24px;
	padding-right: 6px;
	vertical-align: text-top;
}
details[open] summary::before {
	content: "\25B2";
}

details.accordion-item:not([open]) .accordion-button {
  background-color: var(--bs-accordion-bg);
}

details.accordion-item:not([open]):last-of-type .accordion-button {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}

details.accordion-item:not([open]) .accordion-button::after {
  background-image: var(--bs-accordion-btn-active-icon);
  transform: unset;
}

details.accordion-item[open] .accordion-button::after {
  background-image: var(--bs-accordion-btn-icon);
  transform: var(--bs-accordion-btn-icon-transform);
}

/* Hide the default disclosure triangle on Safari */
summary.accordion-button::-webkit-details-marker {
  display: none;
}
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <main style="border-radius: 10px;
            border-color:#ffffff;">
          <div id="reader"></div>
          <div id="result"></div>
        </main>
    </div>
  </div> 
</div>
    <div class="row" style="width: 100%;margin:0px;padding:0px;height: 100%;">
        <div class="col-3 menu">
            <div class="estaciones" style="border-radius: 5px;padding:10px">
              <h6>Estaciones meteorológicas convencionales</h6>
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Zona occidental
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                      @if (empty($estacionesZonaOccidental))
                      <p>No hay estaciones meteorológicas en la zona occidental</p>
                      @else
                        <ul class="list-group list-group-flush">
                        @foreach ($estacionesZonaOccidental as $estacion)
                        <li class="list-group-item">
                          <a href="{{url('estacion/'.$estacion->id)}}" class="text-decoration-none">
                              {{$estacion->nombre}}
                          </a>
                        </li>
                        @endforeach
                        </ul>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      Zona central
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      @if (empty($estacionesZonaCentral))
                      <p>No hay estaciones meteorológicas en la zona central</p>
                      @else
                        <ul class="list-group list-group-flush">
                        @foreach ($estacionesZonaCentral as $estacion)
                        <li class="list-group-item">
                          <a href="{{url('estacion/'.$estacion->id)}}" class="text-decoration-none">
                              {{$estacion->nombre}}
                          </a>
                        </li>
                        @endforeach
                        </ul>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      Zona paracentral
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                      @if (empty($estacionesZonaParacentral))
                      <p>No hay estaciones meteorológicas en la zona paracentral</p>
                      @else
                        <ul class="list-group list-group-flush">
                        @foreach ($estacionesZonaParacentral as $estacion)
                          <li class="list-group-item">
                            <a href="{{url('estacion/'.$estacion->id)}}" class="text-decoration-none">
                                {{$estacion->nombre}}
                            </a>
                          </li>
                        @endforeach
                        </ul>
                      @endif
                    </div>
                  </div>
                </div>


                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                      Zona paracentral
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                      @if (empty($estacionesZonaOriental))
                      <p>No hay estaciones meteorológicas en la zona oriental</p>
                      @else
                        <ul class="list-group list-group-flush">
                        @foreach ($estacionesZonaOriental as $estacion)
                          <li class="list-group-item">
                            <a href="{{url('estacion/'.$estacion->id)}}" class="text-decoration-none">
                                {{$estacion->nombre}}
                            </a>
                          </li>
                        @endforeach
                        </ul>
                      @endif
                    </div>
                  </div>
                </div>
                
              </div>
            </div> 
            
        </div>
        <div class="col-6">
            <div id='map' class ="flex-item-left"></div>
        </div>
        <div class="col-3 right">
            <div class="aside" style="border-radius: 5px;padding:10px">
              <h6>Mediciones generales</h6>
            </div>
          </div>
        </div>
    </div>
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script>
        let map, markers = [];
        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            map = L.map('map', {
                center: {
                    lat: 13.7434,
                    lng: -88.2776,
                },
                zoom: 9
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            map.on('click', mapClicked);
            initMarkers();
        }
        initMap();

        /* --------------------------- Initialize Markers --------------------------- */
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

            for (let index = 0; index < initialMarkers.length; index++) {

                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<h6>Estación meteorológica ${data.title}</h6><b>Locación: </b>${data.position.lat},  ${data.position.lng}<br><b>Departamento: </b>${data.departamento}<br><br>
                <a href="{{ url('/estacion') }}/${data.id_estacion}" class="text-decoration-none">
                Consultar estación
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-sun-fill" viewBox="0 0 16 16">
  <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z"/>
  <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708zm1.734 3.374a2 2 0 1 1 3.296 2.198q.3.423.516.898a3 3 0 1 0-4.84-3.225q.529.017 1.028.129m4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377M14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
</svg>
              </a>`);
                map.panTo(data.position);
                markers.push(marker)
            }
        }

        function generateMarker(data, index) {
            return L.marker(data.position, {
                    draggable: data.draggable,title:data.title
                })
                .on('click', (event) => markerClicked(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
        }

        /* ------------------------- Handle Map Click Event ------------------------- */
        function mapClicked($event) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerClicked($event, index) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        /* ----------------------- Handle Marker DragEnd Event ---------------------- */
        function markerDragEnd($event, index) {
            console.log(map);
            console.log($event.target.getLatLng());
        }
    </script>
@endsection