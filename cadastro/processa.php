<?php
include_once('conexao.php');

// Verificando se houve um envio do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $premium = $_POST['premium'];

    // Usando prepared statements para evitar injeção de SQL
    $stmt = $conexao->prepare("INSERT INTO cadastro_usuarios (cpf, rg, email, nome, senha, chave) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $cpf, $rg, $email, $nome, $senha, $premium);
//aqui a gente passa os dados de forma mais segura
    if ($stmt->execute()) { //se for enviado
       ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="estilo2.css">
                <script src="javascript2.js" defer></script>
            </head>
            <body id="icorpo">
                <header>
                    <div>
                        <img class="top" src="./imagem/salvar.png" alt="">
                        salvar
                    </div>
                    <div>
                        <img class="top" src="./imagem/impressao.png" alt="">
                        imprimir
                    </div>
                    <div>
                        <img class="top" src="./imagem/cancelar.png" alt="">
                        cancelar
                    </div>
                    <div>
                        <img class="top" src="./imagem/lixeira.png" alt="">
                        excluir
                    </div>
                </header>
                <div class="container">
                    <p id="dois">consulta</p>
                    <p id="tres">cadastro</p>
                    <div class="meio">
                        Cadastro de Itens
                    </div>
                    <form method="POST" action="processaitens.php">
                        <label for="icategoria" id="label0">Selecione a categoria do item</label>
                        <input type="text" id="icategoria" disabled>
                        <label for="inome" id="label0">Nome do item</label>
                        <input type="text" id="inome" name="nome"disabled>
                        <label for="imarca" id="label3">Marca</label>
                        <input type="text" id="imarca" name="marca" disabled>
                    </form>
                    <div class="informacoes">
                        <form method="POST" action="processaitens.php" id="preencher">
                            <label for="ilocal" id="label1">Local do item</label>
                            <input type="text" id="ilocal" name="local" disabled>
                            <label for="idata" id="label4">Data de entrada</label>
                            <input type="text" id="idata" name="data" disabled>
                            <label for="ivalor" id="label5">Valor estimado</label>
                            <input type="text" id="ivalor" name="valor" disabled>
                            <label for="inergia" id="label6">Quantidade de energia</label>
                            <input type="text" id="inergia" name="energia" disabled>
                        </form>
                        <form method="POST" action="processaitens.php"id="descricao">
                            <label for="idescricao" id="label2">Descrição</label>
                            <input type="text" id="idescricao" name="descricao" disabled>
                        </form>
                    </div>
                    <div class="fotos">
                        imagem
                    </div>
                </div>
                <div class="mostrar" style="display: none">
                    <form action="" class="conteudo">
                        <label for="">Para conseguir cadastrar itens, entre com sua chave de acesso</label>
                        <br>
                        <input type="text" name="premium" id="ipremium" placeholder="Users supremos">
                        <button class="botao_verifica">Enviar</button>
                    </form>
                </div>
            </body>
        </html>
        <?php
    } else {
        echo "Erro ao inserir dados: ". $stmt->error; //se nao for enviado
    }
    $stmt->close();
}
?>