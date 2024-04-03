<?php
	include 'banco_de_dados/conexao.php';

	$conexao = abrirConexao();

	$sql = "SELECT * FROM produtos";
	$query = mysqli_query($conexao, $sql);
	$produtos = [];

    if(mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            array_push($produtos, $row);
        }
    }

	fecharConexao($conexao);