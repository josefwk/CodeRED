<?php 
class LocationDatabase{
	
	public static function getAllLocations(){
		$selectQuery = "SELECT `geo_lat`,`geo_long` from `tweets` WHERE `geo_lat`!=0 AND `geo_long`!=0";
		try{
			# Get Database
			$db = Database::getDB ();
	
			# Get Relevant User Values
			$statement = $db->prepare($selectQuery);
			$statement->execute();
			$locationSets = $statement->fetchAll(PDO::FETCH_ASSOC);
			$statement->closeCursor();
	
			return $userSets;
		} catch (Exception $e){
			return false;
		}
	}
	
	private static function sanitize($value){
		$value = trim($value);
		$value = stripslashes ($value);
		$value = htmlspecialchars ($value);
		return $value;
	}
}
?>