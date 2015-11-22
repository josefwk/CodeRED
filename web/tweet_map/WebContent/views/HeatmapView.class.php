<?php 
class HeatmapView{
	public static function show(){
	?>
	<!DOCTYPE html>
	<html>
		<?php MasterView::insertHead(); ?>
		<body onload="window.setInterval(ajaxGetNewLocationData, 250);">
			<?php HeatmapController::insertHeatmap(); ?>
			<div id="map" class="jumbotron"></div>
			<div class="container-fluid">
				<div id="text"></div>
			</div>
			<?php HeatmapController::insertHeatmapCallback(); ?>
		</body>
	</html>
	<?php
	}
}
?>