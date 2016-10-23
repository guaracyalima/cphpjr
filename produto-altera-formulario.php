<?php include 'cabecalho.php'; 
include 'conecta.php';
include 'banco-categoria.php';
include 'functions.php';

$id = $_GET['id'];

$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);

$usado = $produto['usado'] ? "checked='checked'" : ""; //verifica se é usado ou não
?>
		<h1>Aleterar de produto</h1>
<form action="altera-produto.php" method="post">
	
	<table>
		<?php include 'produto-formulario-base.php'; ?>

<tr>
	<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
</tr>

	
	</table>

	</form>
	<?php include 'rodape.php'; ?>