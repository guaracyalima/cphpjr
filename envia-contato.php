<?php 
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "guaracyaraujolima@gmail.com";
$mail->Password = "Master4Java";

$mail->setForm("guaracyaraujolima@gmail.com", "Curso de PHP e MySQL");
$mail->addAddress("guaracyaraujolima@gmail.com");
$mail->Subject = "Email de contato do site";
$mail->msgHTML("<html>de: {$nome}<br />email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	$_SESSION["success"] = "Mensagem envida com sucesso";
	header("Location: index.php");
}else{
	$_SESSION["danger"] = "Erro ao enviar email" . $mail->ErrorInfo;
	header("Location: contato.php");
}
die();
?>
