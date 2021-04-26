<?php
session_start();
?>

<div>
    <a href="home.php">HOME</a>
    <a href="produtos.php">PRODUTOS</a>
    <a href="busca.php">BUSCAR</a>
    <a href="cadastro.php">CADASTRO</a>
    <?php
    if (isset($_SESSION['nome'])) {
        ?>
        <a href="logout.php"><?= $_SESSION['nome']; ?></a>
        <?php
    
    } else {
        ?>
        <a href="login.php">LOGIN</a>
        <?php
    }
    ?>
</div>
<!-- Alt + Shift + F (Formatar o código) -->
<!-- Ctrl + ; (comentários) -->