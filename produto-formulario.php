<?php include 'cabecalho.php'; 
include 'conecta.php';
include 'banco-categoria.php';
include 'logica-usuario.php';
verificaUsuario();
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao);
?>
<h1>Formulario de produto</h1>
<form action="adiciona-produto.php" method="post">
	
	<table class="table table-hover">

		<?php include 'produto-formulario-base.php'; ?>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>

		
	</table>

</form>
<?php include 'rodape.php'; ?>