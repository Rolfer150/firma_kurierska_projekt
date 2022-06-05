function initMap() {
    var lat = parseFloat(document.getElementById('lat').value);
    var lng = parseFloat(document.getElementById('lng').value);
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: { lat: lat, lng: lng},
    });

    new google.maps.Marker({
        position: { lat: lat, lng: lng},
        map,
        title: "Hello World!",
    });
}

window.initMap = initMap;
