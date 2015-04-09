<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MJ Transportes e Logística</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

</head>
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
	
	
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Entre em contato conosco</h5>
					<address>
					<strong>MJ Transportes e Logística</strong><br>
					 Av: Presidente Altino, 1358<br>
					 São Paulo, SP.</address>
					<p>
						<i class="icon-phone"></i>CNPJ: 10.551.485/0001-65 <br>
						<i class="icon-phone"></i>Tel: (11) 3714-2540 <br>						
						<i class="icon-envelope-alt"></i> mj.sac@mjtransportes.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Páginas</h5>
					<ul class="link-list">
						<li><a href="index.php">Home</a></li>
						<li><a href="quemsomos.php">Quem Somos</a></li>
						<li><a href="servicos.php">Serviços</a></li>						
						<li><a href="nossosclientes.php">Nossos Clientes</a></li>						
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</div>
			</div>
			
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; MJ Transportes e Logística, Todos os direitos reservados. </span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>						
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>




<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
	

	
