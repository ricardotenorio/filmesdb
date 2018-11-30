<?php 
	
	require_once 'database/database.php';

	class Filme {
		private static $intialized = false;
		private static $conn = null;

		private function __construct() {}

		private function initialize(){
			if (self::$initialized) {
            	return;
        	}
        	self::$initialized = true;
		}

		public static function listar(){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->query("SELECT * FROM filme JOIN genero");
				$filmes = $stmt->fetch(PDO::FETCH_ASSOC);

				return filmes;
			} catch(Exception $e){
				echo 'Error...' . $e->getMessage();
			}
		}

		public static function listarPorGenero($genero){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->query("SELECT f.id, f.titulo, f.ano, f.duracao, g.nome FROM filme AS f JOIN genero AS g JOIN filme_genero AS fg WHERE g.nome = :genero ORDER BY f.titulo");
				$filmes = $stmt->fetch(PDO::FETCH_ASSOC);

				return $filmes;
			} catch(Exception $e){
				echo 'Error...' . $e->getMessage();
			}
		}