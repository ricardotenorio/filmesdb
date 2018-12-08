<?php 
	
	require_once 'database/database.php';

	class Filme {
		private static $initialized = false;
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
				$stmt = $conn->prepare("SELECT f.id, f.titulo, f.ano, f.duracao, g.id, g.nome FROM filme AS f JOIN genero AS g JOIN filme_genero AS fg WHERE
				f.id = fg.id_filme AND g.id = fg.id_genero ORDER BY f.titulo");
				$stmt->execute();
				$filmes = null;

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$filmes[] = $row;
				}
				return $filmes;
			} catch(Exception $e){
				echo 'Error...' . $e->getMessage();
			}
		}

		public static function listarPorGenero($genero){
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT f.id, f.titulo, f.ano, f.duracao, g.nome FROM filme AS f JOIN genero AS g JOIN filme_genero AS fg WHERE f.id = fg.id_filme AND g.id = fg.id_genero AND g.nome = :genero ORDER BY f.titulo");
				$stmt->execute(['genero' => $genero]);
				$filmes = null;

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$filmes[] = $row;
				}

				return $filmes;
			} catch(Exception $e){
				echo 'Error...' . $e->getMessage();
			}
		}
	}