<?php
	include 'banco_de_dados/conexao.php';

	$conexao = abrirConexao();

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$descricao = $_POST['descricao'];

	$sql = "INSERT INTO produtos(nome, preco, quantidade, descricao) VALUES ('$nome', $preco, $quantidade, '$descricao')";

	$query = mysqli_query($conexao, $sql);

	fecharConexao($conexao);
        
    if($query) {
        echo "Produto inserido com sucesso.";
        echo "<a href='listagem_front.php'>Voltar</a>";
    }
    else {
        echo "Problemas ao tentar adicionar o produto.";
        echo "<a href='inserir_produto_front.php'>Voltar</a>";
    }