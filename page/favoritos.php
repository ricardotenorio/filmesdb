<?php 
	require_once '../model/listaFilme.php';	
	$filmes = (array)Lista::getListaConteudo($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>favoritos</title>
</head>
<body>
	<h1>Favoritos</h1>
	<?php foreach ($filmes as $f): ?>
	<div class="filmes">
	 	<div class="titulo"><?php echo $f['titulo']; ?></div>
	 	<div class="ano"><?php echo $f['ano']; ?></div>
	 	<div class="duracao"><?php echo $f['duracao']; ?></div>
	</div>
	<?php endforeach; ?>
</body>
</html>