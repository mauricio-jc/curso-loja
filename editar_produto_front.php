<?php
	$id = $_GET['id'];
	include 'buscar_produto_back.php';
	include 'estrutura/header_front.php';
?>

	<div class="container-md">
		<h1>Editar produto: <?php echo $produto['nome']; ?></h1>
		<hr>
		
		<a href="listagem_front.php" class="btn btn-success">Voltar</a>

		<br><br>

		<form action="editar_produto_back.php" method="post">
			<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
			
			<div class="form-group">
				<label>Nome: *</label>
				<input type="text" name="nome" class="form-control" value="<?php echo $produto['nome']; ?>">
			</div>

			<div class="form-group">
				<label>Preço: *</label>
				<input type="text" name="preco" class="form-control" value="<?php echo $produto['preco']; ?>">
			</div>

			<div class="form-group">
				<label>Quantidade: *</label>
				<input type="number" name="quantidade" class="form-control" value="<?php echo $produto['quantidade']; ?>">
			</div>

			<div class="form-group">
				<label>Descrição: *</label>
				<textarea name="descricao" class="form-textarea" rows="10" cols="30"><?php echo $produto['descricao']; ?></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Atualizar</button>
			</div>
		</form>
	</div>
<?php include 'estrutura/footer_front.php'; ?>