<?php 
	session_start();
	$msg = $_GET['msg'];
	echo "$msg";
	var_dump($_SESSION);

	echo "<a href=\"../page/filmes.php\">filmes</a>";
	echo "<a href=\"../page/favoritos.php\">favoritos</a>";
 ?>