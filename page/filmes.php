<?php 
  session_start();
	require_once '../model/filme.php';
	$filmes = (array)Filme::listar();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>filmes</title>
	        <!-- Required meta tags -->
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	        <!-- Bootstrap CSS -->
	        <link rel="stylesheet" href="template/TemplateBootstrap/node_modules/bootstrap/compiler/bootstrap.css">

	        <link rel="stylesheet" href="template/TemplateBootstrap/style/css/style.css">

	        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	</head>

	<body>

		<body>
            <div class="container">
              
              <div class="row">

                <div class="col-12 text-center my-5">
                
                <h1 class="display-3"><i class="fa fa-cogs" aria-hidden="true"></i> Sua lista de filmes</h1>

                </div>

              </div>

            </div>
        
          <nav class="navbar navbar-expand-lg navbar-light bg-gradient-primary">
            
            <div class="container">
              <a class="navbar-brand" h1 mb-0 href="../index.php">FilmesDB</a>

              <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSite"></button>
                <span class="navbar-toggler-icon"></span>

                  <div class="collapse navbar-collapse" id="navbarSite">

                    <ul class="navbar-nav mr-auto">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="favoritos.php">Favoritos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="filmes.php">Filmes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                      </li>
                      
                    </ul>

                  <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Gêneros
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Terror</a></li>
                          <li><a href="#">Ação</a></li>
                          <li><a href="#">Aventura</a></li>
                        </ul>
                  </div>

                    <form class="form-inline">
                      <input class="form control ml-4 mr-2" type="search" placeholder="Buscar...">
                      <button class="btn btn-dark" type="submit">ok</button>
                    </form>

                 </div>

             </div>

          </nav>

		<?php foreach ($filmes as $f): ?>
		<div class="filmes">
		 	<div class="titulo"><?php echo $f['titulo']; ?></div>
		 	<div class="ano"><?php echo $f['ano']; ?></div>
		 	<div class="duracao"><?php echo $f['duracao']; ?></div>
		 	<div class="genero"><?php echo $f['nome'] ?></div>
      
      <form action="../model/adicionarFavorito" method="post">
      <input type="hidden" name="filme-id" value="<?php echo $f['id']; ?>">
      <?php 
        if ($_SESSION['user_id'] != null) {
          echo '<input type="submit" name="adicionar" value="Adicionar">';
        } ?>
      </form>
		</div>
		<?php endforeach; ?>
	</body>
</html>