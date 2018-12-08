<?php 
	$msgLogin = '';
	$msgCadastro = '';

	if (isset($_GET['msgLogin'])){ 
		$msgLogin = $_GET['msgLogin'];
	}
	if (isset($_GET['msgCadastro'])){ 
		$msgCadastro = $_GET['msgCadastro'];
	}

  ?>

 <html>
 <head>
 	<title>teste cadastro</title>
 </head>
 <body>
 	<h1>Cadastro</h1>
 	<form action="./model/cadastro.php" method="post">
 		<label>Nome de Usuário:</label>
 		<input type="text" name="nome" />
 		<label>Email:</label>
 		<input type="text" name="email" />
 		<label>Senha:</label>
 		<input type="password" name="senha" />
 		<label>Confirmar Senha:</label>
 		<input type="password" name="re-senha" />
 		<input type="submit" name="submit" Value="Enviar" />
 		<div class="msg"><?php echo "<p>$msgCadastro</p>"; ?></div>
 	</form>

 	<h1>Login</h1>
 	<form action="./model/login.php" method="post">
 		<label>Nome de Usuário:</label>
 		<input type="text" name="nome" />
 		<label>Senha:</label>
 		<input type="password" name="senha" />
 		<input type="submit" name="submit" Value="Logar" />
 		<div class="msg"><?php echo"<p>$msgLogin</p>"; ?></div>
 	</form>
 </body>
 </html>