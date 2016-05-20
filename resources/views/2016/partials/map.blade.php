<section id="galeria" class="fundo-azul">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Mapa das inscrições</h2>

                <div id="map_canvas" style="width: 100%; height: 300px;"></div>

                <div id="vue-google-map">
                    @{{ $data | json  }}
                </div>
            </div>
        </div>
    </div>
</section>

@section('javascript')
    <script>
        var googleMaps = null;
        var map = null;

        function loadScript(src,callback)
        {
            var script = document.createElement("script");
            script.type = "text/javascript";
            if(callback)script.onload=callback;
            document.getElementsByTagName("head")[0].appendChild(script);
            script.src = src;
        }

        loadScript(
            'http://maps.googleapis.com/maps/api/js?v=3&callback=initialize&key={{ config('services.googleMaps.key') }}',
            function() {}
        );

        function initialize()
        {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(-22.9372644, -43.2067568),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#3b5998"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.province",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#3b5998"
                                },
                                {
                                    "saturation": -22
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#f7f7f7"
                                },
                                {
                                    "saturation": 10
                                },
                                {
                                    "lightness": 76
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#f7f7f7"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "color": "#3b5998"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "invert_lightness": false
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "weight": 0.43
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#8b9dc3"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#3b5998"
                                }
                            ]
                        }
                    ],
            };

            console.log('initialize');

            var map = new google.maps.Map(document.getElementById('map_canvas'),
                    mapOptions);


        }

        function createMarker(map, latLng, title, icon)
        {
            console.log('createMarker');

            console.log(typeof google);

            if (typeof google == 'undefined')
            {
                return false;
            }

            return new google.maps.Marker(
            {
                position: latLng,
                map: map,
                title: title,
                icon: '/pj2016/images/google-marker.png'
            });
        }
    </script>
@stop

