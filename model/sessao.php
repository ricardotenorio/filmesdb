<?php 
	require_once 'listaFilmes.php';

	function iniciar($usuario) {
		session_start();
		$lista = Lista::getLista($usuario);

		if ($usuario) {
			$_SESSION['user_id'] = $usuario['id'];
			$_SESSION['user_name'] = $usuario['nome'];
			$_SESSION['user_email'] = $usuario['email'];
			$_SESSION['user_creation'] = $usuario['data'];
			$_SESSION['list_id'] = $lista['id'];
			$_SESSION['list_name'] = $lista['nome'];
			return true;
		} else {
			echo "Usuário inválido";
			return false;
		}
	}

	function encerrar(){
		session_start();
		session_destroy();
	}
 