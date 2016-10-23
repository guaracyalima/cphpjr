<?php 
include 'cabecalho.php'; 
include 'conecta.php';
include 'functions.php';
include 'logica-usuario.php';

?>
<table class="table table-striped table-hover">

<?php 
	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto):
?>
			<tr>
				<td><?= $produto['nome'] ?></td>
				<td><?= $produto['preco'] ?></td>
				<td><?= substr($produto['descricao'] , 0, 15)?></td>
				<td><?= $produto['categoria_nome'] ?></td>
				<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">Alterar</a></td>
				<td>

					<form action="remove-produto.php?id=<?= $produto['id'] ?>" method="post">
						<input type="hidden" name="id" value="<?= $produto['id'] ?>">
						<button class="btn btn-danger" >remover</button>	
					</form>
					
				</td>
			</tr>		
		<?php		
	endforeach
 ?>
</table>

<?php include 'rodape.php'; ?>