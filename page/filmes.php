<?php 
	require_once '../model/filme.php';	
	$filmes = (array)Filme::listar();
?>
<!DOCTYPE html>
<html>
<head>
	<title>filmes</title>
</head>
<body>
	<?php foreach ($filmes as $f): ?>
	<div class="filmes">
	 	<div class="titulo"><?php echo $f['titulo']; ?></div>
	 	<div class="ano"><?php echo $f['ano']; ?></div>
	 	<div class="duracao"><?php echo $f['duracao']; ?></div>
	 	<div class="genero"><?php echo $f['nome'] ?></div>
	</div>
	<?php endforeach; ?>
</body>
</html>