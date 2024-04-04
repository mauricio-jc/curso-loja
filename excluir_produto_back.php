<?php
	include 'banco_de_dados/conexao.php';

	$conexao = abrirConexao();

	$id = $_GET['id'];

	$sql = "DELETE FROM produtos WHERE id = $id";
	$query = mysqli_query($conexao, $sql);
    
    fecharConexao($conexao);

   	if($query) {
        echo "Produto excluído com sucesso.";
        echo "<a href='listagem_front.php'>Voltar</a>";
    }
    else {
        echo "Problemas ao tentar excluir o produto.";
        echo "<a href='inserir_produto_front.php'>Voltar</a>";
    }