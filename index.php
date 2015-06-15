<?php 
	include_once 'componentes/topo.php';
?>

<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                
                    <a class="navbar-brand" href="index.php"><span>MJ </span>Transportes e Logística</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="quemsomos.php">Quem Somos</a></li>                        
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="nossosclientes.php">Nossos Clientes</a></li>                        
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1.png" alt="" />
                <div class="flex-caption">
                    <h3>Transportes</h3> 
					<p>Atuamos em todo o território nacional através de grandes parceiros.</p> 
					<a href="servicos.php" class="btn btn-theme">Saiba Mais</a>
                </div>
              </li>
              <li>
                <img src="img/slides/2.png" alt="" />
                <div class="flex-caption">
                    <h3>Serviços de Paletização</h3> 
					<p>Paletizamos a estrechamos sua mercadoria para entrega nos grandes magazines.</p> 
					<a href="servicos.php" class="btn btn-theme">Saiba Mais</a>
                </div>
              </li>
              <li>
                <img src="img/slides/3.png" alt="" />
                <div class="flex-caption">
                    <h3>Transportes Aéreo</h3> 
					<p>Somos correntista com as principais Cias aéreas como Gol, Variglog, Tam, etc.</p> 
					<a href="servicos.php" class="btn btn-theme">Saiba Mais</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>A SUA TRANQUILIDADE É A NOSSA SATISFAÇÃO</span> </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>A MJ Transportes</h4>
								<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>
								</div>
								<p>
								 Conheça um pouco mais a respeito da MJ Transportes.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="quemsomos.php">Saiba Mais</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Nossos Clientes</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
								 Conheça todos os clientes atendidos pela MJ.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="nossosclientes.php">Saiba Mais</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Serviços</h4>
								<div class="icon">
								<i class="fa fa-edit fa-3x"></i>
								</div>
								<p>
								 Conheça todos os serviços prestados pela MJ Transportes.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="servicos.php">Saiba Mais</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Localização</h4>
								<div class="icon">
								<i class="fa fa-code fa-3x"></i>
								</div>
								<p>
								 Clique e saiba onde estamos localizados.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="contato.php">Saiba Mais</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		
		
	</div>
	</section>
	
	<?php 
		include_once 'componentes/footer.php';
	?>
	
	<?php 
		include_once 'componentes/arquivosjs.php';
	?>

</body>
</html>
