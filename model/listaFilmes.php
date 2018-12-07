<?php 

	require_once 'database/database.php';

	class Lista {
		private static $initialized = false;
		private static $conn = null;

		private function __construct() {}

		private function initialize() {
			if (self::$initialized) {
            	return;
        	}
        	self::$initialized = true;
		}

		public static function criarLista($usuarioId) {
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare('INSERT INTO lista ( nome, id_usuario ) 
					VALUES( :nome, :id_usuario )');
				$stmt->execute(array(
					':nome' => "Favoritos", 'id_usuario' => $usuarioId));
			} catch (Exception $e){
				echo "error..." . $e->getMessage();
			}
		}

		public static function adicionarFilme($listaId, $filmeId) {
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare('INSERT INTO lista_filme ( id_lista, id_filme ) 
					VALUES( :id_lista, :id_filme )');
				$stmt->execute(array(
					':id_lista' => $listaId, 'id_filme' => $filmeId));
				$msg = 'Filme adicionado';
				return $msg;
			} catch (Exception $e){
				echo "error..." . $e->getMessage();
			}
		}

		public static function removerFilme($listaId, $filmeId) {
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare('DELETE FROM lista_filme WHERE id_lista = :id_lista AND id_filme = :id_filme');
				$stmt->execute(array(
					':id_lista' => $listaId, 'id_filme' => $filmeId));
				$msg = 'Filme removido';
				return $msg;
			} catch (Exception $e){
				echo "error..." . $e->getMessage();
			}
		}

		public static function getLista($usuarioId) {
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT * FROM lista WHERE id_usuario = :id_usuario LIMIT 1");
				$stmt->execute(['id_usuario' => $usuarioId]);
				$lista = $stmt->fetch(PDO::FETCH_ASSOC);

				return $lista;
			} catch(Exception $e) {
				echo 'Error....' . $e->getMessage();
				return null;
			}
		}

		public static function getListaConteudo($listaId) {
			self::initialize();
			try{
				$conn = Database::connect();
				$stmt = $conn->prepare("SELECT f.id, f.titulo, f.ano, f.duracao FROM lista_filme AS l JOIN filme AS f WHERE l.id_lista = :id_lista AND l.id_filme = f.id");
				$stmt->execute(['id_lista' => $listaId);
				$filmes = null;

				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$filmes[] = $row;
				}

				return $filmes;
			} catch(Exception $e) {
				echo 'Error....' . $e->getMessage();
				return null;
			}
		}
 ?>