<?php 
	include 'listagem_back.php';
	include 'estrutura/header_front.php'; 
?>

	<div class="container">
		<h1>Bem-vindo!</h1>
		<hr>
		
		<a href="inserir_produto_front.php" class="btn btn-success">Adicionar</a>

		<table>
			<thead>
				<tr>
					<th class="center">ID</th>
					<th>Nome</th>
					<th class="center">Preço</th>
					<th class="center">Quantidade</th>
					<th class="center">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($produtos as $produto): ?>
				<tr>
					<td class="center">1</td>
					<td><?php echo $produto['nome']; ?></td>
					<td>R$ <?php echo $produto['preco']; ?></td>
					<td class="center"><?php echo $produto['quantidade']; ?></td>
					<td class="center">
						<a href="visualizar_produto_front.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-info">Visualizar</a>
						<a href="editar_produto_front.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
						<a href="excluir_produto_back.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-danger">Excluir</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
<?php include 'estrutura/footer_front.php'; ?>