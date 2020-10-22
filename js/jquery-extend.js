    (function ($) {

        $.GoogleMapsAutocomplete = function (options, _callback = false) {
            var settings = {
                'AutoComplete': false,
                'MapConvas': 'map-canvas',
                'default_lat': 26.2235305,
                'default_lng': 50.5875935,
                'zoom': 17
            };

            settings.AutoComplete = options.AutoComplete;
            settings.MapConvas = options.MapConvas;
            settings.default_lat = Number(options.default_lat);
            settings.default_lng = Number(options.default_lng);
            settings.zoom = Number(options.zoom);
            window.initAutocomplete = function () {

                if (settings.AutoComplete != false) {
                    var autocomplete;
                    var uluru = {lat: settings.default_lat, lng: settings.default_lng};
                    var map = new google.maps.Map(
                            document.getElementById(settings.MapConvas), {zoom: settings.zoom, center: uluru});
                    var marker = new google.maps.Marker({position: uluru, map: map});

                    autocomplete = new google.maps.places.Autocomplete(document.getElementById(settings.AutoComplete), {types: ['geocode']});
                    autocomplete.setFields(['address_component']);
                    autocomplete.addListener('place_changed', function () {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function (position) {
                                var geolocation = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };

                                marker.setPosition(new google.maps.LatLng(geolocation.lat, geolocation.lng));
                                google.maps.LatLng(geolocation.lat, geolocation.lng);

                                if (_callback != false) {
                                    _callback({
                                        'marker': marker,
                                        'google': google,
                                        'lat': geolocation.lat,
                                        'lng': geolocation.lng
                                    });
                                }

                            });
                        }

                    });


                    google.maps.event.addListener(map, 'click', function (event) {
                        var $lat = event.latLng.lat();
                        var $lng = event.latLng.lng();

                        var service = new google.maps.places.PlacesService(map);
                        service.nearbySearch({
                            location: {
                                lat: $lat,
                                lng: $lng
                            },
                            radius: 3
                        }, function (place, status) {
                            if (status == google.maps.places.PlacesServiceStatus.OK) {
                                map.fitBounds(new google.maps.LatLngBounds(
                                        new google.maps.LatLng($lat, $lng),
                                        new google.maps.LatLng($lat, $lng)
                                        ));
                                marker.setPosition(new google.maps.LatLng($lat, $lng));
                                map.setZoom(16);
                                service.getDetails({
                                    placeId: place[0].place_id
                                }, function (place, status) {
                                    $('.map_postion').text('');
                                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                                        $Event_data = {
                                            'place': place,
                                            'name': place.formatted_address,
                                            'lat': place.geometry.location.lat(),
                                            'lng': place.geometry.location.lng(),
                                            'events': google.maps.event
                                        };
                                        var $_text = $Event_data.name;

                                        $('.map_postion').text($_text);
                                        if (_callback != false) {
                                            _callback($Event_data);
                                        }
                                    }
                                });
                            }
                        });


                    });

                }
            };

            setTimeout(() => {
                $('body').append('<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjmF9nneXiMC3LujPbx-sA12RujVhESAw&libraries=places&callback=initAutocomplete"></script>');
            }, 1000);


        };


    })(jQuery);