<?php
	$id = $_GET['id'];
	include 'buscar_produto_back.php';
	include 'estrutura/header_front.php';
?>

	<div style="max-width: 750px; margin: 0 auto; padding-top: 2%;">
		<h1 style="font-size: 45px;">Visualizar produto: <?php echo $produto['nome']; ?></h1>
		<hr>
		
		<a href="listagem_front.php" style="background-color: #449d44; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Voltar</a>

		<br><br>

		<div style="display: block; margin-bottom: 15px; line-height: 25px;">
			<label style="max-width: 100%;">Nome: *</label>
			<input type="text" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" value="<?php echo $produto['nome']; ?>" disabled>
		</div>

		<div style="display: block; margin-bottom: 15px; line-height: 25px;">
			<label style="max-width: 100%;">Preço: *</label>
			<input type="text" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" value="<?php echo $produto['preco']; ?>" disabled>
		</div>

		<div style="display: block; margin-bottom: 15px; line-height: 25px;">
			<label style="max-width: 100%;">Quantidade: *</label>
			<input type="number" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" value="<?php echo $produto['quantidade']; ?>" disabled>
		</div>

		<div style="display: block; margin-bottom: 15px; line-height: 25px;">
			<label style="max-width: 100%;">Descrição: *</label>
			<textarea style="width: 100%; border-radius: 6px; border: 1px solid #ccc; padding: 6px; font-size: 14px; box-sizing: border-box;" rows="10" cols="30" disabled><?php echo $produto['descricao']; ?></textarea>
		</div>
	</div>
<?php include 'estrutura/footer_front.php'; ?>