<?php 

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	require_once 'model/database/database.php';

	try {
		$conn = Database::connect();
		$stmt = $conn->prepare('INSERT INTO usuario ( nome, email, senha, salt, data ) 
			VALUES( :nome, :email, :senha, :salt, NOW() )');
		$stmt->execute(array(
			':nome' => "$nome", ':email' => "$email", 'senha' => "$senha", ':salt' => 'teste'));
	} catch(PDOException $e) {
		echo 'Error....' . $e->getMessage();
		echo 'errrrroooor';
	}

 ?>