<?php include 'estrutura/header_front.php'; ?>

	<div class="container-sm">
		<h1>Adicionar produto</h1>
		<hr>
		
		<a href="listagem_front.php" class="btn btn-success">Voltar</a>

		<br><br>

		<form action="inserir_produto_back.php" method="post">
			<div class="form-group">
				<label>Nome: *</label>
				<input type="text" name="nome" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Preço: *</label>
				<input type="text" name="preco" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Quantidade: *</label>
				<input type="number" name="quantidade" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Descrição: *</label>
				<textarea name="descricao" class="form-textarea" rows="10" cols="30" required></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
	</div>
<?php include 'estrutura/footer_front.php'; ?>