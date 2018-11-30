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
 	</form>

 	<h1>Login</h1>
 	<form action="./model/login.php" method="post">
 		<label>Nome de Usuário:</label>
 		<input type="text" name="nome" />
 		<label>Senha:</label>
 		<input type="password" name="senha" />
 		<input type="submit" name="submit" Value="Logar" />
 	</form>
 </body>
 </html>