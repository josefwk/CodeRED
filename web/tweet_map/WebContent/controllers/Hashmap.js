var map, heatmap;
var gradient = [
    'rgba(0, 0, 0, 0)',
    'rgba(12, 35, 64, 1)',
    'rgba(25, 17, 99, 1)',
    'rgba(94, 22, 134, 1)',
    'rgba(170, 27, 143, 1)',
    'rgba(205, 30, 78, 1)',
    'rgba(241, 90, 34, 1)',
    'rgba(243, 112, 76, 1)',
    'rgba(246, 140, 119, 1)',
    'rgba(249, 172, 163, 1)',
    'rgba(252, 211, 208, 1)',
    'rgba(255, 255, 255, 1)'
  ];
  
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: 37.775, lng: -122.434},
    mapTypeId: google.maps.MapTypeId.SATELLITE
  });

  heatmap = new google.maps.visualization.HeatmapLayer({
    data: [],
    map: map,
    gradient: gradient
  });
}


function addPoint(lat, long) {
  heatmap.data.push(new google.maps.LatLng(lat, long));
}