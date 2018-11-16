<?php
	
	class Filme
	{
		private $titulo;
		private $ano;
		private $duracao;
		
		function __construct($titulo, $ano, $duracao){
			$this->titulo = $titulo;
			$this->ano = $ano;
			$this->duracao = $duracao;
		}

		function getTitulo(){
			return $this->titulo;
		}
		function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		function getAno(){
			return $this->ano;
		}
		function setAno($ano){
			$this->ano = $ano;
		}

		function getDuracao(){
			return $this->duracao;
		}
		function setDuracao($duracao){
			$this->duracao = $duracao;
		}
	}