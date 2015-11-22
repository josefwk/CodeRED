<?php
class HeatmapController {
	public static function insertHeatmap() {
		?>
<script>
		var map, heatmap;
		var gradient = [
// 				'rgba(0, 0, 0, 0)',
// 				'rgba(12, 35, 64, 1)',
// 				'rgba(25, 17, 99, 1)',
// 				'rgba(94, 22, 134, 1)',
// 				'rgba(170, 27, 143, 1)',
// 				'rgba(205, 30, 78, 1)',
// 				'rgba(241, 90, 34, 1)',
// 				'rgba(243, 112, 76, 1)',
// 				'rgba(246, 140, 119, 1)',
// 				'rgba(249, 172, 163, 1)',
// 				'rgba(252, 211, 208, 1)',
// 				'rgba(255, 255, 255, 1)'
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
		
		
		function addPoint(lat, lng) {
			heatmap.data.push({location: new google.maps.LatLng(lat, lng), weight: 5});
		}

		function ajaxGetNewLocationData(){
			var xhttp = new XMLHttpRequest();
			var locs;
			var latlng;
			var i;
			  xhttp.onreadystatechange = function() {
			    if (xhttp.readyState == 4 && xhttp.status == 200) {
				  locs = xhttp.responseText.split(" ");
				  document.getElementById("text").innerHTML = locs;
				  for(i = 0; i < locs.length; i++){	
					  latlng = locs[i].split(",");
					  addPoint(latlng[0], latlng[1]);
				  }
				  for(i = 0; i < heatmap.getData().length; i++){
						heatmap.getData()[i].weight -= .03;
				  }
			    }
			  };
			  xhttp.open('GET', '/tweet_map/controllers/new_data_points.php', true);
			  xhttp.send();
		}
		</script>
<?php
	}
	public static function insertHeatmapCallback() {
		?>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5i6slOPeFAVPgQX250x20f8G51D9nsns&signed_in=true&libraries=visualization&callback=initMap">
		</script>
<?php
	}
}

?>