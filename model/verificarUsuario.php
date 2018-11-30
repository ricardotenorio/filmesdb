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

		// verifica informações do login. R-> usuário ou false
		public static function verificarLogin( $nome, $senha ){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = :nome AND senha = :senha LIMIT 1");
				$stmt->execute(['nome' => $nome, 'senha' => $senha]);
				$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

				return $usuario;
			} catch(Exception $e) {
				echo 'Error....' . $e->getMessage();
				return null;
			}
		}

		// Checa se nome de usuario já existe. R-> true ou false
		public static function verificarNome( $nome ){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = :nome LIMIT 1");
				$stmt->execute(['nome' => $nome]);
				$livre = $stmt->fetch(PDO::FETCH_ASSOC);

				if ($livre) {
					return false;
				} else {
					return true;
				}
			} catch(Exception $e) {
				echo 'Error...' . $e->getMessage();
			}
		}

		// Checa se email já existe. R-> true ou false
		public static function verificarEmail( $email ){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email LIMIT 1");
				$stmt->execute(['email' => $email]);
				$livre = $stmt->fetch(PDO::FETCH_ASSOC);

				if ($livre) {
					return false;
				} else {
					return true;
				}
			} catch(Exception $e) {
				echo 'Error...' . $e->getMessage();
			}
		}


	}
