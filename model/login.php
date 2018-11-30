<?php 
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	require_once 'verificarUsuario.php';

	$usuario = verificarUsuario::verificarLogin($nome, $senha);

	if($usuario){
		$msg = "Bem vindo";
		header("Location: ../page/home.php?msg=$msg");
	}