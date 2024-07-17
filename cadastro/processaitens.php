<?php
include_once('conexao.php');

// Verificando se houve um envio do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['categoria'], $_POST['nome'], $_POST['marca'])) {
    $categoria = $_POST['categoria'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];

    // Usando prepared statements para evitar injeção de SQL
    $stmt = $conexao->prepare("INSERT INTO itens (categoria, nome, marca) VALUES (?,?,?)");
    $stmt->bind_param("sss", $categoria, $nome, $marca);

    if ($stmt->execute()) {
        echo "Dados Enviados!";
    } else {
        echo "Erro ao inserir dados: ". $stmt->error;
    }  

    $stmt_itens->close();
}
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['local'], $_POST['data'], $_POST['valor'], $_POST['energia'])) {
        $local = $_POST['local'];
        $data = $_POST['data'];
        $valor = $_POST['valor']; 
        $energia = $_POST['energia'];
    
        // Usando prepared statements para evitar injeção de SQL
        $stmt = $conexao->prepare("INSERT INTO itens (local, data, valor, energia) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $local, $data, $valor, $energia);
    
        if ($stmt->execute()) {
            echo "Dados Enviados!";
        } else {
            echo "Erro ao inserir dados: ". $stmt->error;
        }  

        $stmt_itens->close();

    } 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['descricao'])) {
        $descricao = $_POST['descricao'];

        // Usando prepared statements para evitar injeção de SQL
        $stmt = $conexao->prepare("INSERT INTO itens (descricao) VALUES (?)");
        $stmt->bind_param("s", $descricao);
    
        if($stmt->execute()) {
            echo "Dados Enviados!";
        } else {
            echo "Erro ao inserir dados: ". $stmt->error;
        }  
        $stmt_itens->close();
    }
    


