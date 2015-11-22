<?php 
class HeatmapView{
	public static function show(){
	?>
	<!DOCTYPE html>
	<html>
		<?php MasterView::insertHead(); ?>
		<body onload="window.setInterval(ajaxGetNewLocationData, 250);">
			<?php HeatmapController::insertHeatmap(); ?>
			<?php MasterView::insertNavbar(); ?>
			<div id="map" class="jumbotron"></div>
			<div class="container-fluid">
				<div id="text"></div>
			</div>
			<?php HeatmapController::insertHeatmapCallback(); ?>
Time
<input type="range" id="myTimeRange" min=timeVariable max=timeVariable>

Speed
<input type="range" id="myTimeRange" min=1 max=3600 defaultValue=1>

			
		</body>
	</html>
	<?php
	}
}
?>