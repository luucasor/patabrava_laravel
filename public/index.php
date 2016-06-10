<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Loja virtual</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/animate.css" />
		<meta name="viewport" content="width=device-width" />
		<style>
			.navbar-header button {
				color: #fff
			}
			.fullscreen {
				width:100%;
			}
			main {
				padding-top:50px;
			}
			footer {
				background:#333;
				color:#fff;
				padding:20px 0;
				text-align:center;
			}
			#banner{
				padding-top:50px;	
			}
			#submenu{
				background: blank;
				padding-top:15px;
				font-size: 15px;
			}
			.botoes{
				border-color: blank;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="container">
				<nav class="navbar navbar-fixed-top" role="navigation">
  					<div class="navbar-header navbar-inverse">
						<a href="#menu" class="navbar-brand">Pata*Brava</a>
          				<button type="button" data-target="#menu" data-toggle="collapse" class="navbar-toggle">Buscar</button>
          				<a href="#bs-example-navbar-collapse-2" class="navbar-brand"></a>
          				<button type="button" data-target="#submenu" data-toggle="collapse" class="navbar-toggle">Categorias</button>
  					</div>
					<div class="collapse navbar-collapse navbar-inverse" id="menu">
	          			<form class="navbar-form navbar-right">
    	      			  <div class="form-group">
        	  			    <input type="text" class="form-control" placeholder="Digite a sua busca" />
          				  </div>
          				  <input type="submit" value="Buscar" class="btn btn-default" />
          				</form>
  					</div>
					<div class="container-fluid">
						<div class="row">
  							<div class="collapse navbar-collapse navbar-inverse" id="submenu">
            		 	 		<a class="botoes col-xs-4 col-sm-4 col-md-2 text-center btn btn-default">Anéis</a>
	            		 		<a class="botoes col-xs-4 col-sm-4 col-md-2 text-center btn btn-default">Brincos</a>
	            		 		<a class="botoes col-xs-4 col-sm-4 col-md-2 text-center btn btn-default">Colares</a>
	            		 		<a class="botoes col-xs-4 col-sm-4 col-md-2 text-center btn btn-default">Pulseiras</a>
	            		 		<a class="botoes col-xs-4 col-sm-4 col-md-2 text-center btn btn-default">Tal mãe/filha</a>
	            			 	<a class="botoes col-xs-4 col-sm-4 col-md-2 text-center btn btn-default">Unissex</a>
  							</div>
  						</div>
  					</div>
				</nav>
			</div>
		</header>
		<main>
			<div class="container-fluid">
				<div class="row" id="banner">
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/banner1.jpg" alt="Moda" class="fullscreen" />
							</div>
							<div class="item">
								<img src="img/banner2.jpg" alt="Moda Infantil" class="fullscreen" />
							</div>
						</div>
						<a href="#carousel" class="left carousel-control" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#carousel" class="right carousel-control" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div id="novidades">
							<h3 class="text-center">Novidades</h3>
						</div>

						<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay=”1s”>
							<figure>
								<img src="img/camisa-azul.png" alt="Camisa azul importada" />

								<div>
									<h4>Camisa Azul Importada</h4>
									<p>Camisa azul importada com preço acessível e com pano de qualidade</p>
								</div>
							</figure>
							<div class="btn-group">
								<a href="#" class="btn btn-default">R$ 190,00</a>
								<a href="#" class="btn btn-primary">
									<span class="glyphicon glyphicon-shopping-cart">
									</span>

									Comprar

								</a>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay=”1s”>
							<figure>
								<img src="img/camisa-rosa.png" alt="Camisa rosa argentina" />

								<div>
									<h4>Camisa Rosa Argentina</h4>
									<p>Camisa rosa argentina com preço acessível e com pano de qualidade</p>
								</div>
							</figure>
							<div class="btn-group">
								<a href="#" class="btn btn-default">R$ 210,00</a>
								<a href="#" class="btn btn-primary">
									<span class="glyphicon glyphicon-shopping-cart">
									</span>

									Comprar

								</a>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay=”1s”>
							<figure>
								<img src="img/camisa-azul.png" alt="Camisa azul nacional" />

								<div>
									<h4>Camisa Azul Nacional</h4>
									<p>Camisa azul nacional com preço acessível e bonita</p>
								</div>
							</figure>
							<div class="btn-group">
								<a href="#" class="btn btn-default">R$ 90,00</a>
								<a href="#" class="btn btn-primary">
									<span class="glyphicon glyphicon-shopping-cart">
									</span>

									Comprar

								</a>
							</div>
						</div>

						<div id="maisVendidos">
							<h3 class="text-center">Mais Vendidos</h3>
						</div>

						<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay=”1s”>
							<figure>
								<img src="img/camisa-azul.png" alt="Camisa azul importada" />

								<div>
									<h4>Camisa Azul Importada</h4>
									<p>Camisa azul importada com preço acessível e com pano de qualidade</p>
								</div>
							</figure>
							<div class="btn-group">
								<a href="#" class="btn btn-default">R$ 190,00</a>
								<a href="#" class="btn btn-primary">
									<span class="glyphicon glyphicon-shopping-cart">
									</span>

									Comprar

								</a>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay=”1s”>
							<figure>
								<img src="img/camisa-rosa.png" alt="Camisa rosa argentina" />

								<div>
									<h4>Camisa Rosa Argentina</h4>
									<p>Camisa rosa argentina com preço acessível e com pano de qualidade</p>
								</div>
							</figure>
							<div class="btn-group">
								<a href="#" class="btn btn-default">R$ 210,00</a>
								<a href="#" class="btn btn-primary">
									<span class="glyphicon glyphicon-shopping-cart">
									</span>

									Comprar

								</a>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 thumbnail text-center wow fadeInUp" data-wow-delay=”1s”>
							<figure>
								<img src="img/camisa-azul.png" alt="Camisa azul nacional" />

								<div>
									<h4>Camisa Azul Nacional</h4>
									<p>Camisa azul nacional com preço acessível e bonita</p>
								</div>
							</figure>
							<div class="btn-group">
								<a href="#" class="btn btn-default">R$ 90,00</a>
								<a href="#" class="btn btn-primary">
									<span class="glyphicon glyphicon-shopping-cart">
									</span>

									Comprar

								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<p>Avenida Paulista nº 1</p>
    		<p>(11) 2239-1234</p>
		</footer>
		<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/wow.min.js" type="text/javascript"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>