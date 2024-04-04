<?php
	include 'banco_de_dados/conexao.php';

	$conexao = abrirConexao();

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$descricao = $_POST['descricao'];

	$sql = "UPDATE produtos 
			SET nome = '$nome',
				preco = $preco,
				quantidade = $quantidade,
				descricao = '$descricao'
			WHERE id = $id";

        
    $query = mysqli_query($conexao, $sql);
    
    fecharConexao($conexao);

	if($query) {
        echo "Produto atualizado com sucesso.";
        echo "<a href='listagem_front.php'>Voltar</a>";
    }
    else {
        echo "Problemas ao tentar atualizar o produto.";
        echo "<a href='inserir_produto_front.php'>Voltar</a>";
    }