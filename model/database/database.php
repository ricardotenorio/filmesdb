<?php

	class Database
	{
		private static $dbName = 'filmesdb';
		private static $dbHost = 'localhost';
		private static $dbUsername = 'root';
		private static $dbUserPassword = 'ifpe';
		private static $conn = null;
		private static $initialized = false;

		#Singleton
		private function __construct() {}

		private static function initialize() {
        	if (self::$initialized) {
            	return;
        	}
        	self::$initialized = true;
    	}
    	public static function connect() {
    		self::initialize();
			if ( self::$conn == null ) {
				try{
					self::$conn = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
					self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				catch(PDOException $e){
					die($e->getMessage());
				}
			}
			return self::$conn;
		}
		public static function disconnect() {
			self::$conn = null;
		}
	}