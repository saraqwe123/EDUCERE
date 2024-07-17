<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo1.css">
    <script src="javascript1" defer></script>
</head>

<body>
    <button class="botao1" id="botao">
        &#9776
    </button>
    <ul class="menu_lista" id="menu">
        <div class="menu_conteudo">
            <li><a href="../login/login.php">LOGIN</a></li>
            <li><a href="../modulo_01/index3.html">MÓDULO 01</a></li>
            <li><a href="../modulo_02/index4.html">MÓDULO 02</a></li>

        </div>
    </ul>
    <div class="formulario">
        <form method="POST" action="processa.php">
            <label for="icpf">CPF</label>
            <br>
            <input type="text" name="cpf" id="icpf" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="irg">RG</label>
            <br>
            <input type="text" name="rg" id="irg" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="iemail">Email</label>
            <br>
            <input type="email" name="email" id="iemail" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="inome">Nome User</label>
            <br>
            <input type="text" name="nome" id="inome" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="isenha">Senha User</label>
            <br>
            <input type="password" name="senha" id="isenha" required minlength="5" placeholder="5 digitos" size="35"
                style="background-color: #F1F3F6">
            <br>
            <label for="">Chave de acesso</label>
            <br>
            <input type="text" name="premium" id="ipremium" placeholder="Users supremos" size="35" style="background-color: #F1F3F6">
            <br>
            <input class="btn" type="submit" name="submit" onclick="cadastro()">
        </form>
    </div>
</body>
</html>

