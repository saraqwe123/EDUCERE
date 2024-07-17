<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'controle_patrimonio';
$porta = '3307';

//VARIAVEL PRA FAZER A CONEXAO COM O MYSQL
$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

//verificando a conexao
if ($conexao->connect_errno) {
    // Se houver um erro de conexão, exibe uma mensagem de erro detalhada
    echo "Erro de conexão com o banco de dados: " . $conexao->connect_error;
}
?>