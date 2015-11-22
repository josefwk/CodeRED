<?php 
class HeatmapView{
	public static function show(){
	?>
	<!DOCTYPE html>
	<html>
		<?php MasterView::insertHead(); ?>
		<body>
			<?php HeatmapController::insertHeatmap(); ?>
			<div id="map" class="jumbotron"></div>
			<div class="container-fluid">
			</div>
			<?php HeatmapController::insertHeatmapCallback(); ?>
		</body>
	</html>
	<?php
	}
}
?>