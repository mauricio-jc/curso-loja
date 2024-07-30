<?php 
	include 'listagem_back.php';
	include 'estrutura/header_front.php'; 
?>

	<div style="max-width: 1191px; margin: 0 auto; padding-top: 2%;">
		<h1 style="font-size: 45px;">Bem-vindo!</h1>
		<hr>
		
		<a href="inserir_produto_front.php" style="background-color: #449d44; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Adicionar</a>
		<a href="login_front.php" style="background-color: #c9302c; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Sair do sistema</a>

		<table style="width: 100%;">
			<thead>
				<tr>
					<th style="font-weight: bold; text-align: center; border: 1px solid #ccc; padding: 4px 12px;">ID</th>
					<th style="font-weight: bold; border: 1px solid #ccc; padding: 4px 12px;">Nome</th>
					<th style="font-weight: bold; text-align: center; border: 1px solid #ccc; padding: 4px 12px;">Preço</th>
					<th style="font-weight: bold; text-align: center; border: 1px solid #ccc; padding: 4px 12px;">Quantidade</th>
					<th style="font-weight: bold; text-align: center; border: 1px solid #ccc; padding: 4px 12px;">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($produtos as $produto): ?>
				<tr>
					<td style="border: 1px solid #ccc; text-align: center; padding: 4px 12px;"><?php echo $produto['id']; ?></td>
					<td style="border: 1px solid #ccc; padding: 4px 12px;"><?php echo $produto['nome']; ?></td>
					<td style="border: 1px solid #ccc; text-align: center; padding: 4px 12px;">R$ <?php echo $produto['preco']; ?></td>
					<td style="border: 1px solid #ccc; text-align: center; padding: 4px 12px;"><?php echo $produto['quantidade']; ?></td>
					<td style="border: 1px solid #ccc; text-align: center; padding: 4px 12px;">
						<a href="visualizar_produto_front.php?id=<?php echo $produto['id']; ?>" style="background-color: #5bc0de; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Visualizar</a>
						<a href="editar_produto_front.php?id=<?php echo $produto['id']; ?>" style="background-color: #286090; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Editar</a>
						<a href="excluir_produto_back.php?id=<?php echo $produto['id']; ?>" style="background-color: #c9302c; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Excluir</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
<?php include 'estrutura/footer_front.php'; ?>