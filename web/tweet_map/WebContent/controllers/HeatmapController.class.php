<?php
class HeatmapController {
	public static function insertHeatmap() {
		?>
		<script>
		var map, heatmap;
		var gradient = [
			'rgba(0, 255, 255, 0)',
			'rgba(0, 255, 255, 1)',
			'rgba(0, 191, 255, 1)',
			'rgba(0, 127, 255, 1)',
			'rgba(0, 63, 255, 1)',
			'rgba(0, 0, 255, 1)',
			'rgba(0, 0, 223, 1)',
			'rgba(0, 0, 191, 1)',
			'rgba(0, 0, 159, 1)',
			'rgba(0, 0, 127, 1)',
			'rgba(63, 0, 91, 1)',
			'rgba(127, 0, 63, 1)',
			'rgba(191, 0, 31, 1)',
			'rgba(255, 0, 0, 1)'
		];
		
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 5,
				center: {lat: 29.7604, lng: -95.3698},
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});
		
			heatmap = new google.maps.visualization.HeatmapLayer({
				data: [],
				map: map,
				gradient: gradient
			});
		}
		
		
		function addPoint(lat, lng) {
			heatmap.data.push({location: new google.maps.LatLng(lat, lng), weight: .5});
		}

		function ajaxGetNewLocationData(){
			var xhttp = new XMLHttpRequest();
			var locs;
			var latlng;
			var i;
			xhttp.onreadystatechange = function() {
				if (xhttp.readyState == 4 && xhttp.status == 200) {
					locs = xhttp.responseText.split(" ");
					for(i = 0; i < locs.length; i++){	
						latlng = locs[i].split(",");
						addPoint(latlng[0], latlng[1]);
					}
				}
			};
		  xhttp.open('GET', '/tweet_map/controllers/new_data_points.php', true);
		  xhttp.send();
			  for(a = heatmap.data.length-1; a >= 0 ; a--) {
				  heatmap.data.setAt(a,{location: heatmap.data.getAt(a).location, weight: heatmap.data.getAt(a).weight-.05});
  				  if(heatmap.data.getAt(a).weight<0.31){
					  heatmap.data.setAt(a,null);
				  }
			  }
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