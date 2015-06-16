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
<div class="container">
<h2>Obrigado Por Entrar em Contato Conosco</h2>

<?php 

$nome = filter_var($_POST['nome'],FILTER_SANITIZE_STRIPPED);
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$assunto = filter_var($_POST['assunto'], FILTER_SANITIZE_EMAIL);
$mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING);

/*$email = filter_var_array($_POST,array('email' => FILTER_SANITIZE_EMAIL,
									   'email' => FILTER_VALIDATE_EMAIL));*/
$to = 'mj.sac@mjtransportes.com';

/*
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $emaildominio\r\n";
$headers .= "Return-Path: $emaildominio\r\n";
*/

$EmailMessage = 'Mensagem: ' . $mensagem . '<br><br>' . ' De: '. $nome . '<br>' . 'E-mail: ' . $email;

if (mail($to, $assunto, $EmailMessage, $headers)){
	echo 'Olá ' .$nome . ' Obrigado pelo seu contato' . '<br>' .
		 'Sua mensagem foi enviada com sucesso';
}else {
	echo 'Desculpe, sua mensagem não foi enviada, tente novamente mais tarde!' . '<br><br>';
}
	
?>

<a class="btn btn-default" href="index.php" role="button">Voltar</a>

</div>
</body>
</html>