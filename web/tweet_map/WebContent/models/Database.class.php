<?php
class Database {
    private static $database;
	private static $dsn = 'mysql:host=127.0.0.1;dbname=';
	private static $databaseName;
	private static $options = 
	   array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	
	public static function getDB() {
		if (!isset (self::$database) || self::$database == null) {
			try {
				$databaseName = 'tweetview';
				$username = 'root';
				$password = 'rootjwk';
				self::$databaseName = $databaseName;
				$dbspec = self::$dsn.self::$databaseName.";charset=utf8";
				self::$database = new PDO ($dbspec, $username, $password, self::$options);
			} catch ( PDOException $e ) {
				self::$database = null;
				echo "Failed to open connection to ".self::$databaseName."   ".$e->getMessage();
			}
		}
		return self::$database;
	}
	
	public static function clearDB() {
		self::$database = null;
	}
	
}
?>