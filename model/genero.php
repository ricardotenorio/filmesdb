<?php 
	
	require_once 'database/database.php';

	class Genero {
		private static $initialized = false;
		private static $conn = null;

		private function __construct() {}

		private function initialize(){
			if (self::$initialized) {
            	return;
        	}
        	self::$initialized = true;
		}

		public static function adicionar($genero){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("INSERT INTO genero ( nome ) 
					VALUES( :nome )");
				$stmt->execute(array( ':nome' => $genero ));
			} catch(Exception $e) {
				echo "Error..." . $e->getMessage();
			}
		}

		public static function recuperar($generoNome){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT * FROM genero WHERE nome = :nome LIMIT 1");
				$stmt->execute(['nome' => $generoNome]);
				$genero = $stmt->fetch(PDO::FETCH_ASSOC);

				return $genero;
			} catch(Exception $e) {
				echo 'Error....' . $e->getMessage();
				return null;
			}
		}

	}
		
?>