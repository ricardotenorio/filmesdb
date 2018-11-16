<?php
	
	class Usuario
	{
		private $nome;
		private $email;
		private $senha;
		private $data;
		
		function __construct($nome, $email, $senha, $data){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->data = $data;
		}

		function getNome(){
			return $this->nome;
		}
		function setNome($nome){
			$this->nome = $nome;
		}

		function getEmail(){
			return $this->email;
		}
		function setEmail($email){
			$this->email = $email;
		}

		function getSenha(){
			return $this->senha;
		}
		function setSenha($senha){
			$this->senha = $senha;
		}

		function getData(){
			return $this->data;
		}
		function setData($data){
			$this->data = $data;
		}
	}