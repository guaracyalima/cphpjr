<?php 
include 'cabecalho.php';
include 'conecta.php';
include 'functions.php';
include 'logica-usuario.php';
$id = $_POST['id'];

removeProduto($conexao, $id);

$_SESSION["success"] = "Produto removido com sucesso";
header("Location: produto-lista.php");

die();//encera todas as execuções do php
 ?>
