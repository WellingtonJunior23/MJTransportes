<?php 
	include_once 'componentes/topo.php';
?>

<body>
<div id="wrapper">
	
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span>MJ</span> TRANSPORTES E LOGÍSTICA</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="quemsomos.php">Quem somos</a></li>
                        <li><a href="servicos.php">Serviços</a></li>                                                
                        <li><a href="nossosclientes.php">Nossos Clientes</a></li>                        
                        <li class="active"><a href="contato.php">Contato</a></li>
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
					<li class="active">Contato</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6769119506503!2d-46.751661599999984!3d-23.544120199999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceff53c92ce8e7%3A0x32ef50c1468da48e!2sAv.+Pres.+Alt%C3%ADno%2C+1358+-+Jaguare%2C+S%C3%A3o+Paulo+-+SP%2C+05323-002!5e0!3m2!1spt-BR!2sbr!4v1422290513216" width="600" height="450" frameborder="0" style="border:0"></iframe>		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Entre em contato conosco preenchendo o <strong>fomulário de contato abaixo</strong></h4>
				<form id="contactform" action="enviarEmail.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Sua mensagem foi enviada com sucesso, Obrigado!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="nome" placeholder="* Nome Completo" required />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Endereço de e-mail" required />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="assunto" placeholder="* Assunto" required />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="mensagem" class="input-block-level" placeholder="* Sua mensagem aqui..." required></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Enviar Mensagem</button>								
								<span class="pull-right margintop20">* Todos os campos são de preenchimento obrigatório, Obrigado!</span>
							</p>
						</div>
					</div>
				</form>
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
	

	
