<?php include 'estrutura/header_front.php'; ?>

	<div style="max-width: 500px; margin: 0 auto; padding-top: 2%;">
		<h1 style="font-size: 45px;">Adicionar produto</h1>
		<hr>
		
		<a href="listagem_front.php" style="background-color: #449d44; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Voltar</a>

		<br><br>

		<form action="inserir_produto_back.php" method="post">
			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<label style="max-width: 100%;">Nome: *</label>
				<input type="text" name="nome" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" required>
			</div>

			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<label style="max-width: 100%;">Preço: *</label>
				<input type="text" name="preco" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" required>
			</div>

			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<label style="max-width: 100%;">Quantidade: *</label>
				<input type="number" name="quantidade" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" required>
			</div>

			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<label style="max-width: 100%;">Descrição: *</label>
				<textarea name="descricao" style="width: 100%; border-radius: 6px; border: 1px solid #ccc; padding: 6px; font-size: 14px; box-sizing: border-box;" rows="10" cols="30" required></textarea>
			</div>

			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<button type="submit" style="background-color: #286090; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Salvar</button>
			</div>
		</form>
	</div>
<?php include 'estrutura/footer_front.php'; ?>