const containerClass = 'map-container'
const containers = document.querySelectorAll(`.${containerClass}`);


containers.forEach(container => {
    // Creating map options
    var mapOptions = {
        center: [container.dataset.longitude, container.dataset.latitude],
        zoom: 16
    }

    var map = new L.map(container.id, mapOptions);

    // Creating a Layer object
    var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    // Adding layer to the map
    map.addLayer(layer);

    let marker = new L.Marker([container.dataset.longitude, container.dataset.latitude]);
    marker.addTo(map); 
});
