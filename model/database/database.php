<?php

	class Database
	{
	    private static $dbName = 'filmesdb' ;
	    private static $dbHost = 'localhost' ;
	    private static $dbUsername = 'root';
	    private static $dbUserPassword = 'root';
	     
	    private static $conn  = null;
	    

		#Singleton
		private function __construct() {
	        
	    }
	     
	    public static function connect() {
			if ( null == self::$conn ) {     
		        try {
					self::$conn =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
					self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
		        }
		        catch(PDOException $e) {
					die($e->getMessage()); 
		        }
	       }
	       return self::$conn;
	    }
	     
	    public static function disconnect() {
	        self::$conn = null;
	    
	}	

        