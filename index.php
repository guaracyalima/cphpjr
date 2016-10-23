<?php 
include 'cabecalho.php';
include 'logica-usuario.php';
?>


<h1>Bem vindo</h1>
<?php 
if (usuarioEstaLogado()) { ?>

<p class="text-success">Você esta logado como <?= usuarioLogado()?></p> 
<a href="logout.php">Sair</a>

<?php } else { ?>
<hr>

<h2>Login</h2>
<form action="login.php" method="post">
	<table class="table table-hover">
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="form-control"></td>
		</tr>

		<tr>
			<td>Senha</td>
			<td><input type="password" class="form-control" name="senha"></td>
		</tr>

		<tr>
			<td></td>
			<td><button class="btn btn-primary">Login</button></td>
		</tr>
	</table>
</form>
<?php } include 'rodape.php'; ?>