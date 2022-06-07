function initMap() {
    let lat = parseFloat(document.getElementById('lat').value);
    let lng = parseFloat(document.getElementById('lng').value);
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: { lat: lat, lng: lng},
    });

    new google.maps.Marker({
        position: { lat: lat, lng: lng},
        map,
        title: "Hello World!",
    });
}

window.initMap = initMap;
