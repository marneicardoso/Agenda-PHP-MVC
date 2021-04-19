<?php

// Sempre devemos verificar se um objeto
// ou variável NÃO é null, antes de utilizá-los
if (isset($_POST['btnCadastrarUsuario'])) {
    cadastrar();

} elseif (isset($_POST['editar'])) {
    editar();

} elseif (isset($_POST['excluir'])) {
    excluir();

} else {
    header('Location: ../view/home.php');
}

// PSR - function e class a abertura do bloco é embaixo
function cadastrar()
{
    // Inclui os arquivos (Model)
    require_once "../model/Usuario.php";
    require_once "../model/UsuarioService.php";

    // Cria o objeto das classes Contato e ContatoService
    $usuario = new Usuario();
    $service = new UsuarioService();

    // Preenche o objeto com os dados informados
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];

    $service->cadastrarUsuario($usuario);
}