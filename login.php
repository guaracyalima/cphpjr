<?php 
include 'conecta.php';
include 'banco-usuario.php';
include 'logica-usuario.php';

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
	$_SESSION["danger"] = "Usuario ou senha invalido";
	header("Location: index.php");
}else{
	$_SESSION["success"] = "Usuario logado com sucesso";
	logaUsuario($usuario["email"]);
	//setcookie("usuario_logado", $usuario["email"], time() + 60);
	header("Location: index.php");
	
 }
 die();
 ?>