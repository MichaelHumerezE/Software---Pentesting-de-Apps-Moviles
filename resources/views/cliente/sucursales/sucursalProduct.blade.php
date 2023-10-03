@extends('cliente.cliente')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">{{ $producto->name }}</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="">Producto</li>
                        <li class="active">{{ $producto->name }}</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
    <div id="map" style="width: 100%; height: 400px;"></div>
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-110">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h3 class="breadcrumb-header" id="sucursal"></h3>
                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <div class="mb-3">
                                            <input class="input" type="text" name="latitud" id="latitud"
                                                placeholder="Latitud" disabled />
                                        </div>
                                        <div class="mb-3">
                                            <input class="input" type="text" name="longitud" id="longitud"
                                                placeholder="Longitud" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="primary-btn order-submit" onclick="calclularRuta()"><i class="fa fa-map"></i> ¿Cómo
                        Llegar?</button>
                </div>
            </div>
        </div>
    </main>

    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap&v=weekly"
        defer></script>

    <script>
        let marker = [];

        function initMap() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        },
                        zoom: 15
                    });

                    // Crear marcador en la posición actual
                    marker['a'] = new google.maps.Marker({
                        position: new google.maps.LatLng(position.coords.latitude, position.coords
                            .longitude),
                        map: map,
                        title: 'Mi ubicación',
                        icon: {
                            url: '/img/act.png', // Ruta al archivo de ícono personalizado
                            scaledSize: new google.maps.Size(40, 40), // Tamaño personalizado del ícono
                            /*origin: new google.maps.Point(0, 0), // Punto de origen del ícono
                            anchor: new google.maps.Point(50, 50) // Punto de anclaje del ícono*/
                        }
                    });

                    // Agregar evento de clic al marcador
                    marker['a'].addListener('click', function() {
                        const content = '<div>' +
                            '<h5>' + marker['a'].getTitle() + '</h5>' +
                            '<p>Mi ubicación actual</p>' +
                            '</div>';

                        const infoWindow = new google.maps.InfoWindow({
                            content: content
                        });

                        infoWindow.open(map, marker['a']);
                    });

                    const sucursales = [
                        <?php
                        // Supongamos que tienes un arreglo de objetos stdClass llamado $sucursales
                        foreach ($sucursales as $sucursal) {
                            echo '{ lat: ' . $sucursal->latitud . ', lng: ' . $sucursal->longitud . ', name: "' . $sucursal->nombre . '", direccion: "' . $sucursal->direccion . '", cantidad: ' . $sucursal->cantidad . ' },';
                        }
                        ?>
                    ];
                    console.log(sucursales);

                    for (let i = 0; i < sucursales.length; i++) {
                        marker[i] = new google.maps.Marker({
                            position: new google.maps.LatLng(sucursales[i]['lat'], sucursales[i]['lng']),
                            map: map,
                            title: sucursales[i]['name']
                        });

                        // Agregar evento de clic al marcador
                        marker[i].addListener('click', function() {
                            document.getElementById("latitud").value = this.getPosition().lat();
                            document.getElementById("longitud").value = this.getPosition().lng();
                            const sucursal = document.getElementById("sucursal");
                            sucursal.textContent = sucursales[i]['name'];
                            const content = '<div>' +
                                '<h5>' + marker[i].getTitle() + '</h5>' +
                                '<p>Dirección: ' + sucursales[i]['direccion'] + '</p>' +
                                '<p>Cantidad Disponible: ' + sucursales[i]['cantidad'] + '</p>' +
                                '</div>';

                            const infoWindow = new google.maps.InfoWindow({
                                content: content
                            });

                            infoWindow.open(map, marker[i]);
                        });
                    }
                });
            } else {
                // Manejar el caso en el que el navegador no admita la geolocalización
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: -17.7799086353198,
                        lng: -63.18265591059412
                    },
                    zoom: 15
                });
            }
        }

        function calclularRuta() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const origen = `${position.coords.latitude},${position.coords.longitude}`;
                    const latitudDestino = encodeURIComponent(document.getElementById('latitud').value);
                    const longitudDestino = encodeURIComponent(document.getElementById('longitud').value);

                    const url = `https://www.google.com/maps/dir/?api=1&origin=${origen}&destination=${latitudDestino},${longitudDestino}`;

                    window.location.href = url;
                }, function(error) {
                    alert('Error al obtener la ubicación: ' + error.message);
                });
            } else {
                alert('El navegador no soporta geolocalización.');
            }
        }
    </script>
@endsection
