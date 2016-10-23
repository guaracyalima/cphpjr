<?php 
include 'mostra-alerta.php';
mostraAlerta("success");
mostraAlerta("danger");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Minha loja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">Minha lojinha</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="produto-formulario.php">Adiciona produto</a></li>
						<li><a href="produto-lista.php">Produtos</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="#">Sobre</a></li>

					</ul>
				</div>
			</div>	
	</div>

	<div class="container">
		<div class="principal">