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


 <!doctype html>
<html lang="pt-br">
    <head>

        <title>Homepage</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="page/template/TemplateBootstrap/node_modules/bootstrap/compiler/bootstrap.css">

        <link rel="stylesheet" href="page/template/TemplateBootstrap/style/css/style.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <style>
      /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        </style>

      </head> 

      <body>
            <div class="container">
              
              <div class="row">

                <div class="col-12 text-center my-5">
                
                <h1 class="display-3"><i class="fa fa-cogs" aria-hidden="true"></i> Seja Bem Vindo(a) ao FilmesDB</h1>
                <p>Aqui você pode criar sua lista com seus filmes favoritos e avaliar quantos filmes quiser e também será informado das últimas novidades do seu interesse.Cadastre-se já!</p>

                </div>

              </div>

            </div>
        
          <nav class="navbar navbar-expand-lg navbar-light bg-gradient-primary">
            
            <div class="container">
              <a class="navbar-brand" h1 mb-0 href="index.php">FilmesDB</a>

              <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSite"></button>
                <span class="navbar-toggler-icon"></span>

                  <div class="collapse navbar-collapse" id="navbarSite">

                    <ul class="navbar-nav mr-auto">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="page/favoritos.php">Favoritos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="page/filmes.php">Filmes</a>
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

          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                      <img src="page/template/TemplateBootstrap/imgs/maxresdefault.jpg" alt="Max" width="1100" height="500">
                    </div>
                    
                    <div class="carousel-item" >
                      <img src="page/template/TemplateBootstrap/imgs/filmes-de-terror.jpg" alt="Filmes de Terror" width="1100" height="500">
                    </div>
                    
                    <div class="carousel-item">
                      <img src="page/template/TemplateBootstrap/imgs/pearl.png" alt="Pearl" width="1100" height="500">
                    </div>
                
                </div>
                
                <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>

          </div>

          <div class="container">

                <div class="row">

                  <div class="col-12 text-center">
                
                  <h1 class="display-4"><span style="font-size: 48px; color: Dodgerblue;">
                    <i class="fas fa-igloo"></i>
                    </span>
                     moovies</h1>
                  <hr>    

                  </div>

                </div>

              </div>

            <div class="row justify-content-sm-center">

              <div class="colsd-6 col-md-4">

                <div class="card mb-5 text-center">

                  <img class="card-img-top" src="page/template/TemplateBootstrap/imgs/heroes.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Filmes</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Lançamentos</h6>
                    <p class="card-text">2018</p>
                  </div>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">O poderoso chefão</li>
                    <li class="list-group-item">Mad max</li>
                    <li class="list-group-item">X-men</li>
                  </ul>
                    <div class="card-body">
                    <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#myModal">info</button>
                    <a href="#" class="card-link">simphony of destruction</a>
                    </div>
                    <div class="footer text-muted">
                      moovies
                    </div>
                
                </div>

              </div>

              <div class="colsd-6 col-md-4">

                <div class="card mb-5 text-center">

                  <img class="card-img-top" src="page/template/TemplateBootstrap/imgs/heroes.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Séries</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Lançamentos</h6>
                    <p class="card-text">2018</p>
                  </div>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Game of thrones</li>
                    <li class="list-group-item">Revenge</li>
                    <li class="list-group-item">Mr robot</li>
                  </ul>
                    <div class="card-body">
                    <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#myModal">info</button>
                    <a href="#" class="card-link">simphony of destruction</a>
                    </div>
                    <div class="footer text-muted">
                      series
                    </div>
                
                </div>

              </div>

              <div class="col-sd-6 col-md-4">

                <div class="card mb-5 text-center">

                  <img class="card-img-top" src="page/template/TemplateBootstrap/imgs/heroes.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Documentários</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Lançamentos</h6>
                    <p class="card-text">2018</p>
                  </div>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">valar morgulis</li>
                    <li class="list-group-item">valar doherys</li>
                    <li class="list-group-item">kill in all</li>
                  </ul>
                    <div class="card-body">
                    <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#myModal">info</button>

                    <a href="#" class="card-link">simphony of destruction</a>
                    </div>
                <div class="footer text-muted">
                  docs
                </div>
                </div>

              </div>
              
            </div>

            <div class="container">

              <div class="row">
                
                <div class="col-12 text-left my-5">
                  
                  <h1 class="display-4"><i class="fa fa-papper-plane text-primary" aria-hidden="true"></i> Cadastre-se!</h1>
                </div>

              </div>

              <div class="row justify-content-left mb-5">

                <div class="col-sm-12 col-md-10 col-lg8">

                  <form action="./model/cadastro.php" method="post">
                    
                    <div class="form-row">

                      <div class="form-group col-sm-4">

                        <label for="inputNome">Seu nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome">

                      </div>

                      <div class="form-group col-sm-4">
                        
                        <label for="inputEmail">Seu email</label>
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">

                      </div>

                    </div>

                    <div class="form-row">

                      <div class="form-group col-sm-4">
                        
                        <label for="inputSenha">Sua senha</label>
                        <input type="password" class="form-control" id="inputSenha" placeholder="Senha">

                      </div>

                      <div class="form-group col-sm-4">
                        
                        <label for="inputConfirmarSenha">Confirmar senha</label>
                        <input type="password" class="form-control" id="inputConfirmarSenha" placeholder="Confirmar senha">
                      
                      </div>
                      
                    </div>

                    <div class="form-row">

                      <div class="form-check">
                        
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">Desejo receber novidades por e-mail
                        </label>

                      </div>
                      
                    </div>

                    <div class="form-row">

                      <div class="col-sm-12 ">
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>

                        <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-triggers="focus" title="que issu cumparca" data-content="simmmm">Ajuda</a>
 
                      </div>

                    </div>

                    <div class="msg"><?php echo "<p>$msgCadastro</p>"; ?></div>

                  </form>
                  
                </div>
                
              </div>

              <div class="row">
                
                <div class="col-12 text-left my-5">
                  <h1 class="display-4"><i class="fa fa-papper-plane text-primary" aria-hidden="true"></i> Entrar</h1>
                </div>

              </div>

              <div class="row justify-content-left mb-5">

                <div class="col-sm-12 col-md-10 col-lg8">

                  <form action="./model/login.php" method="post">
                    
                    <div class="form-row">

                      <div class="form-group col-sm-4">

                        <label for="inputUser">Nome de usuário</label>
                        <input type="text" class="form-control" id="inputUser" placeholder="Nome">

                      </div>

                      <div class="form-group col-sm-4">
                        
                        <label for="inputSenhaUser">Sua senha</label>
                        <input type="password" class="form-control" id="inputSenhaUser" placeholder="Senha">

                      </div>

                    </div>

                    <div class="form-row">

                      <div class="col-sm-12 ">
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>

                        <a tabindex="0" class="text-primary" role="button" data-toggle="popover" data-placement="right" data-triggers="focus" title="que issu cumparca" data-content="simmmm">Esqueci minha senha</a>
 
                      </div>

                    </div>

                    <div class="msg"><?php echo"<p>$msgLogin</p>"; ?></div>

                  </form>

            	</div>

        	  </div>

              <div class="row">

                <div class="col-12 mb-3"><hr></div>
                  
                <div class="col-sm-4">

                  <h3>Site</h3>

                  <p>
                    Esse site tem como objetivo ajudar os usuários a votarem e criarem listas com seus filmes favoritos,como também,criar uma relação de interatividade entre eles,informando das últimas novidades do seu interesse.
                  </p>
                  
                </div>

                <div class="col-sm-4">

                  <h3>Menu</h3>

                  <div class="list-group text-center">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Favoritos</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Serviços</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Filmes</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Contatos</a>
                  </div>

                </div>

                  <div class="col-sm-4">

                    <h3>Gêneros</h3>

                    <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                      <a class="btn btn-outline-primary" href="#">Terror</a>
                      <a class="btn btn-outline-info" href="#">Ação</a>
                      <a class="btn btn-outline-warning" href="#">Suspense</a>
                    </div>
                    
                  </div>

                  <div class="col-12 mt-5">
                    
                    <blockquote class="text-center">

                      <p>O sucesso não é garantido, mas o fracasso é certo se você não estiver emocionalmente envolvido em seu trabalho.</p>
                      <footer class="blockquote-footer">Biz Stone<cite title="Titulo"> Fundador do twitter</cite></footer>
                      
                    </blockquote>

                  </div>
                  
              </div>
              
            </div>

            <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			          <p>Novidades em breve... ;) </p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			      
			    </div>
			  </div>
			  
			</div>

          <script src="page/template/TemplateBootstrap/node_modules/jquery/dist/jquery.js"></script>
          <script src="page/template/TemplateBootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
          <script src="page/template/TemplateBootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>

          <script>

          $(document).ready(function(){
              $('[data-toggle="popover"]').popover(); 
          });
          
          </script>
          
      </body>

</html>