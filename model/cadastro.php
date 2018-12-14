<?php 
	if ( (isset($_POST["nome"]) and $_POST["nome"] != "") and (isset($_POST["email"]) and $_POST["email"] != "") and (isset($_POST["senha"]) and $_POST["senha"] != "") ) {
		
	
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		require_once 'database/database.php';
		require_once 'verificarUsuario.php';
		require_once 'sessao.php';
		require_once 'listaFilmes.php';


		if (!VerificarUsuario::verificarNome($nome)) {
			$msg = 'Nome em uso';
			header("Location: ../index.php?msgCadastro=$msg");
			exit;
		} elseif (!VerificarUsuario::verificarEmail($email)) {
			$msg = 'email em uso';
			header("Location: ../index.php?msgCadastro=$msg");
			exit;
		} else {

			try {
				$conn = Database::connect();
				$stmt = $conn->prepare('INSERT INTO usuario ( nome, email, senha, salt, data ) 
					VALUES( :nome, :email, :senha, :salt, NOW() )');
				$stmt->execute(array(
					':nome' => "$nome", ':email' => "$email", 'senha' => "$senha", ':salt' => 'teste'));
				$usuario = VerificarUsuario::login($nome, $senha);
				
				//cria lista de favoritos do usuário ao fazer o cadastro
				Lista::criarLista($usuario['id']);
				//inicia a sessão
				iniciar($usuario);

				$msg = 'Cadastro realizado com sucesso';
				header("Location: ../page/home.php?msg=$msg");
				exit;
			} catch(Exception $e) {
				echo 'Error....' . $e->getMessage();
			}
		}
	} else {
		$msg = 'Preencha todos os campos!';
		header("Location: ../index.php?msgCadastro=$msg");
		exit;
	}

 ?>