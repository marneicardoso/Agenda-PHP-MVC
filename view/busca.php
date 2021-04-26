<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Contatos</title>
</head>
<body>
    <h3>Contatos</h3>

    <?php
    include_once "include/menu.php";
    ?>

    <br><br>

    <!-- Resultado da busca dos Contatos no DB -->
    <form action="../controller/contatoController.php" method="post">
        <label for="campo">Buscar contato</label>
        <input type="text" id="campo" name="campo">

        <br><br>
        <label for="nome">Nome</label>
        <input type="radio" id="nome" name="tipo" value="nome" checked>

        <label for="email">E-mail</label>
        <input type="radio" id="email" name="tipo" value="email">

        <br><br>
        <button name="btnBuscarContato">Buscar</button>
    </form>
</body>
</html>