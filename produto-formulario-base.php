<input type="hidden" name="id" value="<?=$produto['id']?>">
		<tr>
			<td>Nome</td>

	<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
	
		</tr>
		
<tr>
	<td>Preço</td>
	<td><input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></td>
</tr>

<tr>
	<td>Descrição</td>
	<td>
	<input class="form-control" type="text" name="descricao" value="<?=$produto['descricao']?>"></td>
</tr>

<tr>
<td></td>
	<td>
		<input type="checkbox" name="usado" <?= $usado ?> value="true">Usado
	</td>
</tr>

<tr>
	<td>Categoria</td>
	<td>
		<select name="categoria_id" class="form-control">
			<?php 
			foreach ($categorias as $categoria):
				$essaEaCategoria = $produto['categoria_id'] == $categoria['id'];
				$selecao = $essaEaCategoria ? "selected='selected'" : ""; 

				?>
					<option value="<?=$categoria['id']?>" <?= $selecao ?>> <?=$categoria['nome']?></option>
				<?php
			endforeach
		 ?>
		</select>
		
	</td>
</tr>