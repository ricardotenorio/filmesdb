<?php 
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	require_once 'verificarUsuario.php';
	require_once 'sessao.php';

	$usuario = verificarUsuario::login($nome, $senha);

	if($usuario){

		iniciar($usuario);
		$msg = "Bem vindo";
		header("Location: ../page/home.php?msg=$msg");
		exit;
	} else {
		$msg =  urlencode("Nome de usuário ou senha inválidos!"); 
		header("Location: ../index.php?msgLogin=$msg");
		exit;
	}