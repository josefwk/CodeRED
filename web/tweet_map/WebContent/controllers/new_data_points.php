<?php
require_once '../models/Database.class.php';

//$selectQuery = "SELECT `geo_lat`,`geo_long` from `tweets` WHERE `geo_lat`!=0 AND `geo_long`!=0 AND `created_at`>=(NOW() + INTERVAL 1 HOUR - INTERVAL 2 SECOND)";
$selectQuery = "SELECT `geo_lat`,`geo_long`, `created_at`, `tweet_id` from `tweets` WHERE `geo_lat`!=0 AND `geo_long`!=0 AND `created_at` > (timeVariable - INTERVAL myTimeScaleVal SECOND) AND `created_at` <= timeVariable";

# Get Database
$db = Database::getDB ();

# Get Relevant User Values
$statement = $db->prepare($selectQuery);
$statement->execute();
$locationSets = $statement->fetchAll(PDO::FETCH_ASSOC);
$statement->closeCursor();

foreach ($locationSets as $locationSet){
	echo $locationSet["geo_lat"].",".$locationSet["geo_long"].",".$locationSet["created_at"]." ";
}


$deleteQuery = "DELETE FROM tweetview.tweets WHERE geo_lat = '0'";
?>