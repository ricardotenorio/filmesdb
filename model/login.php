<?php 
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];

	require_once 'verificarUsuario.php';

	$usuario = verificarUsuario::verificarLogin($nome, $senha);

	var_dump($usuario);
