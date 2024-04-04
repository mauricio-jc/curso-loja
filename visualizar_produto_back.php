<?php
	include 'banco_de_dados/conexao.php';

	$conexao = abrirConexao();

	$sql = "SELECT * FROM produtos WHERE id = $id LIMIT 1";
	$query = mysqli_query($conexao, $sql);
	$produto = $query->fetch_assoc();

	fecharConexao($conexao);

	if($produto <= 0) {
		echo "Nenhum produto encontrado.";
        echo "<a href='listagem_front.php'>Voltar</a>";
	}