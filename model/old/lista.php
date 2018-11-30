<?php
	require_once('usuario.php');
	require_once('filme.php')
	
	class Lista
	{
		private $nome;
		private $usuario;
		private $filmes;

		function __construct($nome, $usuario, $filmes){
			$this->nome = $nome;
			$this->usuario = $usuario;
			$this->filmes = $filmes;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nome){
			$this->nome = $nome;
		}

		function getUsuario(){
			return $this->usuario;
		}
		function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		function getFilmes(){
			return $this->filmes;
		}
		function setFilmes($filmes){
			$this->filmes = $filmes;
		}
		function addFilme($filme){
			$this->filmes[] = $filme;
		}

	}