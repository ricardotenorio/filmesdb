<?php 
	require_once '../model/filme.php';
	$filmes = Filme::listar();

	if (!empty($filmes)) {

	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Filmes</title>
 </head>
 <body>
 	<div class="filmes">
 		<div class="titulo"></div>
 		<div class="ano"></div>
 		<div class="duracao"></div>
 		<div class="ano"></div>
 	</div>
 
 </body>
 </html>