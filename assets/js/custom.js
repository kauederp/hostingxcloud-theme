//* YOUR CUSTOMIZED JAVASCRIPT *//

var map = L.map('map',{
    dragging:false,
    zoomControl:false,
    attributionControl	:false,
    doubleClickZoom:false
}).setView([20.1,-4.2],2);



L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 2,
    minZoom:2,
    

    
}).addTo(map);

let factor = 1.5
var brIcon = L.icon({
    iconUrl:"assets/img/map-flags/brazil.svg",
    iconSize:     [38/factor, 38/factor],
    iconAnchor:   [22/factor, 38/factor]
})
L.marker([-27.61,-48.28], {icon: brIcon}).addTo(map);
