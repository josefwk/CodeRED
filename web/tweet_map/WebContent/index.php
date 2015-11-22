<?php
	include("includer.php");
	
	###(SECTION) Parse URL
	$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
	
	$urlPieces = split("/", $url);

	if(count($urlPieces) < 2){
		$control = "hashtag";
	} else {
		$control = $urlPieces[2];
	}
	###(ENDSECTION) Parse URL

	###(SECTION) Redirect
	switch($control){
		case "hashtag":
			HashtagView::show(null);
			break;
		case "heatmap":
			HeatmapView::show(null);
			break;
		default:
			HeatmapView::show(null);
	};
	###(ENDSECTION) Redirect
?>