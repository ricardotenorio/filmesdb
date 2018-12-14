<?php 
	session_start();
	$filme = $_POST["filme-id"];
	$lista = $_SESSION["list_id"];

	require_once 'listaFilmes.php';

	$msg = Lista::adicionarFilme($lista, $filme);

	header("Location: ../page/favoritos.php");
	exit;
