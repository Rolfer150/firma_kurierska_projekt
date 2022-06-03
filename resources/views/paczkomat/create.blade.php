@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodawanie paczkomatu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('paczkomat.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="powiat" class="col-md-4 col-form-label text-md-end">Powiat</label>

                                <div class="col-md-6">
                                    <select id="powiat_id" class="form-control @error('powiat_id') is-invalid @enderror" name="powiat_id" required>
                                        <option>Brak</option>
                                        @foreach($powiaty as $powiat)
                                            <option value="{{$powiat->id}}">{{$powiat->powiat}}</option>
                                        @endforeach
                                    </select>

                                    @error('powiat_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lat" class="col-md-4 col-form-label text-md-end">Szerokość geograficzna</label>

                                <div class="col-md-6">
                                    <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ old('lat') }}" required autocomplete="lat" autofocus>

                                    @error('lat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lng" class="col-md-4 col-form-label text-md-end">Długość geograficzna</label>

                                <div class="col-md-6">
                                    <input id="lng" type="text" class="form-control @error('lng') is-invalid @enderror" name="lng" value="{{ old('lng') }}" required autocomplete="lng" autofocus>

                                    @error('lng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="opis_paczkomat" class="col-md-4 col-form-label text-md-end">Opis</label>

                                <div class="col-md-6">
                                    <input id="opis_paczkomat" type="text" class="form-control @error('opis_paczkomat') is-invalid @enderror" name="opis_paczkomat" autofocus>

                                    @error('opis_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="miasto_paczkomat" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                <div class="col-md-6">
                                    <input id="miasto_paczkomat" type="text" class="form-control @error('miasto_paczkomat') is-invalid @enderror" name="miasto_paczkomat" required>

                                    @error('miasto_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ulica_paczkomat" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                <div class="col-md-6">
                                    <input id="ulica_paczkomat" type="text" class="form-control @error('ulica_paczkomat') is-invalid @enderror" name="ulica_paczkomat" required>

                                    @error('ulica_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="numer_ulicy_paczkomat" class="col-md-4 col-form-label text-md-end">Numer ulicy</label>

                                <div class="col-md-6">
                                    <input id="numer_ulicy_paczkomat" type="number" class="form-control @error('numer_ulicy_paczkomat') is-invalid @enderror" name="numer_ulicy_paczkomat" required>

                                    @error('numer_ulicy_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kod_pocztowy_paczkomat" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                                <div class="col-md-6">
                                    <input id="kod_pocztowy_paczkomat" type="text" class="form-control @error('kod_pocztowy_paczkomat') is-invalid @enderror" name="kod_pocztowy_paczkomat" required>

                                    @error('kod_pocztowy_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Zapisz wszystko
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
    <html>

    <head>
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
        <meta charset="utf-8">
    </head>

    <body>
    <div id="map-canvas" style="width: 1518px; height: 722px;">
    </div>

    </body>

    </html>
    <script type="text/javascript">
        var map;
        var latlng;
        var infowindow;

        $(document).ready(function() {
            //get data set from the backend in a json structure
            var data = [{
                "description": "Paczkomat na Jojku",
                "latitude": "49.6176267",
                "longitude": "20.7166797"
            },
                {
                    "description": "Paczkomat na ul. Lwowskiej",
                    "latitude": "49.624616",
                    "longitude": "20.706526"
                },

                {
                    "description": "Paczkomat w Parku Strzeleckim",
                    "latitude": "49.617521",
                    "longitude": "20.686003"
                },

                {
                    "description": "Paczkomat w Piątkowej",
                    "latitude": "49.626869",
                    "longitude": "20.760680"
                }


            ]
            ViewCustInGoogleMap(data);
        });

        function ViewCustInGoogleMap(data) {
            var gm = google.maps; //create instance of google map
            //add initial map option
            var mapOptions = {
                center: new google.maps.LatLng(49.6176267, 20.7166797),
                zoom: 13.1,
            };
            //bine html tag to show the google map and bind mapoptions
            map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            //create instance of google information windown
            infowindow = new google.maps.InfoWindow();
            var marker, i;
            //var MarkerImg = "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle.png";
            //var MarkerImg2 = "https://maps.gstatic.com/intl/en_us/mapfiles/markers2/measle_blue.png";

            //loop through all the locations and point the mark in the google map
            for (var i = 0; i < data.length; i++) {
                marker = new gm.Marker({
                    position: new gm.LatLng(data[i]['latitude'], data[i]['longitude']),
                    map: map,
                    // icon: MarkerImg
                });


                //add info for popup tooltip
                google.maps.event.addListener(
                    marker,
                    'click',
                    (
                        function(marker, i) {
                            return function() {
                                infowindow.setContent(data[i]['description']);
                                infowindow.open(map, marker);
                            };
                        }
                    )(marker, i)

                );
            }

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgDWBXUaAtdpQJ8wjRHzQLUFrIaE3RYG0&sensor=true"
            type="text/javascript"></script>

@endsection
