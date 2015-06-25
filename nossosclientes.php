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
                    <a class="navbar-brand" href="index.php"><img alt="Logo" src="img/logo.png" title="Home"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="quemsomos.php">Quem somos</a></li>
                        <li><a href="servicos.php">Serviços</a></li>                                                
                        <li class="active"><a href="nossosclientes.php">Nossos Clientes</a></li>                        
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Nossos Clientes</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	<hr>
	<div class="container">
	<div class="col-lg-8">
		<div class="row">
			<div class="col-lg-12 col-lg-offset-2">
				<h3 class="heading">Principais Clientes</h3>
				
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
					<li>
					<img src="img/MC.png" alt="Mc Donalds">
					<img src="img/mundial.png" alt="Mundial Logistics">
					<img src="img/fast.png" alt="Fast Frame">
					<img src="img/fujitsu.png" alt="Fujitsu">
					<img src="img/ats.png" alt="ATS">
					<img src="img/weir.png" alt="Weir">
					</li>			
					</ul>
					</section>
				</div>
			</div>			 
		</div>
	</div>
	</div>
	
	<?php 
		include_once 'componentes/footer.php';
	?>
	
	<?php 
		include_once 'componentes/arquivosjs.php';
	?>
	
</body>
</html>
	