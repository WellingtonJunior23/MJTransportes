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
                        <li class="active"><a href="quemsomos.php">Quem Somos</a></li>                        
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="nossosclientes.php">Nossos Clientes</a></li>                        
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
					<li class="active">Quem Somos</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	
	
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-lg-offset-1">
				<h2><span>Quem Somos</span></h2>
				<p>
				A <strong>M.J Transportes e Logística</strong> foi fundada com a filosofia e a meta de oferecer aos seus clientes, 
				serviços qualificados e específicos para obter sempre o melhor processo logístico nos seus serviços, 
				conquistando novas oportunidades e clientes. Possuimos uma equipe de profissionais altamente qualificados, 
				dedicados e pronto a desenvolver soluções que melhor se enquadrem ao perfil de seus clientes. 
				Com as constantes atualizações do mercado e após alguns estudos constatamos que grande parte dos clientes 
				estavam tendo dificuldades para locomoção de seus materiais para todas as regiões,
				com isso a M.J Transportes e Logística se especializou para solucionar estas necessidades. 
				</p>
				
				<h4><span>Missão</span></h4>
				<p>
				Prestar um serviço de Logística e Transportes com qualidade, respondendo com prontidão e eficiência as solicitações
				e exigências dos clientes, disponibilizando soluções variadas de Logística a fim de fidelizar uma relação profissional
				satisfatória.
				</p>
				
				<h4><span>Valores</span></h4>
				<p>
				Justiça, Respeito, Comprometimento, Confiança, Honestidade e Ética.
				</p>
				
				<h4><span>Visão</span></h4>
                <p>
                Ser o melhor e conceituado parceiro logístico do território nacional.
                </p>										
			</div>
		</div>
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
	

	