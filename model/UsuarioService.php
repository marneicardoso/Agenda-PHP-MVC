<?php
class UsuarioService
{
    public function cadastrarUsuario($usuario)
    {
        // Verifica se os campos obrigatórios foram preenchidos


        // inclui o arquivo UsuarioDAO
        require_once "UsuarioDAO.php";

        // Cria o objeto da classe UsuarioDAO
        $dao = new UsuarioDAO();

        // Envia os dados para cadastrar no DB
        $cadastrou = $dao->cadastrarUsuarioDAO($usuario);

        // Verifica se houve sucesso ao cadastrar
        if ($cadastrou) {
            echo "Cadastro efetuado com sucesso!";
        
        } else {
            echo "Erro ao efetuar o cadastro.";
        }
    }
}