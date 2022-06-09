function initMap() {

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: { lat: 49.608921, lng: 20.703381},
    });

    new google.maps.Marker({
        position: { lat: 49.608921, lng: 49.608921},
        map,
        title: "Hello World!",
    });
}

window.initMap = initMap;
