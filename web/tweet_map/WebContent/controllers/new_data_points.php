<?php
require_once '../models/Database.class.php';

//$selectQuery = "SELECT `geo_lat`,`geo_long` from `tweets` WHERE `geo_lat`!=0 AND `geo_long`!=0 AND `created_at`>=(NOW() + INTERVAL 1 HOUR - INTERVAL 2 SECOND)";
$selectQuery = "SELECT `geo_lat`,`geo_long`, `created_at`, `tweet_id` from `tweets` WHERE `geo_lat`!=0 AND `geo_long`!=0";

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

foreach ($locationSets as $locationSet) {
	$deleteQuery = "DELETE FROM tweetview.tweets WHERE tweet_id = ".$locationSet["tweet_id"];
	$db->query($deleteQuery);
}

$deleteQuery = "DELETE FROM tweetview.tweets WHERE geo_lat = '0'";
?>