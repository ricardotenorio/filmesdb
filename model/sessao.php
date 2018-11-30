<?php 
	
	function iniciar($usuario) {
		session_start();

		if ($usuario) {
			$_SESSION['user_id'] = $usuario['id'];
			$_SESSION['user_name'] = $usuario['nome'];
			$_SESSION['user_email'] = $usuario['email'];
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
 