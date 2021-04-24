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

    public function efetuarLogin($usuario)
    {
        // Inclui o arquivo UsuarioDAO
        require_once "UsuarioDAO.php";

        // Cria o objeto de UsuarioDAO
        $dao = new UsuarioDAO();

        // Guarda o resultado buscado
        $resultado = $dao->buscarUsuarioDAO($usuario);

        // Se houver resultado na busca
        if ($resultado != null) {
            // Recebe os valores vindos do DB
            //$emailDB = $resultado['email']; // Já buscado na Query
            $senhaDB = $resultado['senha'];

            // Criptografa a Senha

            // Compara o valor informado com o valor do DB
            if (strcmp($senhaDB, $usuario->senha) == 0) {
                echo "Login efetuado com sucesso!";
                return $resultado;
            }

        // Se não houver resultado
        } else {
            echo "Nenhum resultado encontrado.";
        }
    }
}