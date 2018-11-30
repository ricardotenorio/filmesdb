<?php 

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	require_once 'database/database.php';
	require_once 'verificarUsuario.php';
	require_once 'sessao.php';

	if (!VerificarUsuario::verificarNome($nome)) {
		echo 'Nome em uso';
	} elseif (!VerificarUsuario::verificarEmail($email)) {
		echo 'email em uso';
	} else {

		try {
			$conn = Database::connect();
			$stmt = $conn->prepare('INSERT INTO usuario ( nome, email, senha, salt, data ) 
				VALUES( :nome, :email, :senha, :salt, NOW() )');
			$stmt->execute(array(
				':nome' => "$nome", ':email' => "$email", 'senha' => "$senha", ':salt' => 'teste'));
			$usuario = VerificarUsuario::login($nome, $senha);
			iniciar($usuario);

			$msg = 'Cadastro realizado com sucesso';
			header("Location: ../page/home.php?msg=$msg");
			exit;
		} catch(Exception $e) {
			echo 'Error....' . $e->getMessage();
		}
	}
 ?>