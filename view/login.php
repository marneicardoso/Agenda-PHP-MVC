<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login</h3>

    <?php
    include_once "include/menu.php";
    ?>

    <br><br>
    <form action="../controller/usuarioController.php" method="POST">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email"> <!-- Self Closing (Se fecha nela mesma) -->

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha">

        <button name="btnLogin">Login</button>
        <!-- Valores de button
            Submit (padrão)
            Button
            Reset
        -->
    </form>
</body>
</html>