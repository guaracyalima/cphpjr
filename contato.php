<?php require_once("cabecalho.php"); ?>

<form action="envia-contato.php" method="post">
	<label>
		Nome
		<input type="text" name="nome" class="form-control">
	</label>

	<label>
		Email
		<input type="email" name="email" class="form-control">
	</label>

	<label>
		Mensagem
		<textarea class="form-control" name="mensagem"></textarea>
	</label>

	<button class="btn btn-primary">Enviar</button>
	
</form>

<?php require_once("rodape.php"); ?>