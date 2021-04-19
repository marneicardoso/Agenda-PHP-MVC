<?php

// Sempre devemos verificar se um objeto
// ou variável NÃO é null, antes de utilizá-los
if (isset($_POST['btnCadastrarContato'])) {
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
    require_once "../model/Contato.php";
    require_once "../model/ContatoService.php";

    // Guarda os dados informados no formulário
    //$nome       = $_POST['nome'];
    //$fone       = $_POST['fone'];
    //$email      = $_POST['email'];

    // Cria o objeto das classes Contato e ContatoService
    $contato = new Contato();
    $service = new ContatoService();

    // Preenche o objeto com os dados informados
    $contato->nome = $_POST['nome'];
    $contato->fone = $_POST['fone'];
    $contato->email = $_POST['email'];

    $service->cadastrarContato($contato);
}

function editar()
{

}

function excluir()
{

}
