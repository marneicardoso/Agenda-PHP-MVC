<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Contato</title>
</head>
<body>
    <h3>Cadastro Contato</h3>

    <?php
    include_once "include/menu.php";
    ?>

    <br><br>
    <form action="../controller/contatoController.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <!-- As linguagens de Back-End (PHP, Java, C#) precisam
            do atributo NAME para receber os dados  -->

        <!-- O atributo ID é utilizado no JavaScript -->

        <br><br>
        <label for="fone">Telefone</label>
        <input type="text" id="fone" name="fone">
        
        <br><br>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">

        <button name="btnCadastrarContato">Cadastrar</button>
        <!-- Valores de button
            Submit (padrão)
            Button
            Reset
        -->

        <!-- <input type="button" value="Cadastrar"> (deprecated) -->
    </form>
</body>
</html>