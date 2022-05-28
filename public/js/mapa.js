var map;
var latlng;
var infowindow;

$(document).ready(function() {
    //get data set from the backend in a json structure
    var data = [{
        "description": "Siedziba - Firma kurierska",
        "latitude": "49.608921",
        "longitude": "20.703381"
    },

        {
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
