<?php
	$id = $_GET['id'];
	include 'visualizar_produto_back.php';
	include 'estrutura/header_front.php';
?>

	<div class="container-md">
		<h1>Visualizar produto: <?php echo $produto['nome']; ?></h1>
		<hr>
		
		<a href="listagem_front.php" class="btn btn-success">Voltar</a>

		<br><br>

		<div class="form-group">
			<label>Nome: *</label>
			<input type="text" class="form-control" value="<?php echo $produto['nome']; ?>" disabled>
		</div>

		<div class="form-group">
			<label>Preço: *</label>
			<input type="text" class="form-control" value="<?php echo $produto['preco']; ?>" disabled>
		</div>

		<div class="form-group">
			<label>Quantidade: *</label>
			<input type="number" class="form-control" value="<?php echo $produto['quantidade']; ?>" disabled>
		</div>

		<div class="form-group">
			<label>Descrição: *</label>
			<textarea class="form-textarea" rows="10" cols="30" disabled><?php echo $produto['descricao']; ?></textarea>
		</div>
	</div>
<?php include 'estrutura/footer_front.php'; ?>