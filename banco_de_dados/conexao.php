<?php
    function abrirConexao() {
        $endereco = 'localhost';
        $usuario = 'root';
        $senha = '';
        $bancoDeDados = 'curso_loja';
        $conexao = mysqli_connect($endereco, $usuario, $senha, $bancoDeDados);

        if(!$conexao) {
            die('Falha na conexão com o banco de dados: ' . mysqli_connect_error());
        }

        return $conexao;
    }

    function fecharConexao($conexao) {
        mysqli_close($conexao);
    }
