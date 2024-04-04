<?php
	include 'banco_de_dados/conexao.php';

	$conexao = abrirConexao();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' LIMIT 1";
	$query = mysqli_query($conexao, $sql);
	$usuario = $query->fetch_assoc();

	fecharConexao($conexao);

	if($usuario > 0) {
		header('Location: listagem_front.php');
	}
	else {
		echo "E-mail ou senha inválidos.";
        echo "<a href='login_front.php'>Voltar</a>";
	}