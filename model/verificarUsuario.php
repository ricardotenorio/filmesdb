<?php 
	
	require_once 'database/database.php';

	class verificarUsuario
	{
		private static $initialized = false;
		private static $conn = null;
		
		private function __construct() {}

		private function initialize(){
			if (self::$initialized) {
            	return;
        	}
        	self::$initialized = true;
		}

		public static function verificarLogin( $nome, $senha ){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = :nome AND senha = :senha");
				$stmt->execute(['nome' => $nome, 'senha' => $senha]);
				$usuario = $stmt->fetch();

				return $usuario;
			} catch(Exception $e) {
				echo 'Error....' . $e->getMessage();
				return null;
			}
		}

	}
