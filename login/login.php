<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="javascript.js" defer></script>
</head>

<body>
    <button class="botao1" id="botao">
        &#9776
    </button>
    <ul class="menu_lista" id="menu">
        <div class="menu_conteudo">
            <li><a href="../cadastro/index1.html">CADASTRO</a></li>
            <li><a href="../modulo_01/index3.html">MÓDULO 01</a></li>
            <li><a href="../modulo_02/index4.html">MÓDULO 02</a></li>

        </div>
    </ul>
    <div class="formulario">
        <form action="">
            <label for="inome">Nome User</label>
            <br>
            <input type="text" name="" id="inome" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="isenha">Senha User</label>
            <br>
            <input type="password" name="" id="isenha" required minlength="5" placeholder="5 digitos" size="35"
                style="background-color: #F1F3F6">
            <br>
            <input class="btn" type="submit" onclick="cadastro()">
        </form>
    </div>
</body>

</html>