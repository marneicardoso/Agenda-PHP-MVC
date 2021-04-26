<?php
class UsuarioDAO
{
    public function cadastrarUsuarioDAO($usuario)
    {
        // Inclui o arquivo da classe ConexaoDB
        require_once "ConexaoDB.php";

        // Cria o objeto da classe ConexaoDB
        $db = new ConexaoDB();

        // Abre a conexão com o DB
        $conexao = $db->abrirConexaoDB();

        // Monta a query (cadastro)
        $sql = "INSERT INTO
                    usuario (nome, email, senha)
                VALUES
                    (?, ?, ?)";

        // Cria o Prepared Statement
        $stmt = $conexao->prepare($sql);
        
        // Vincula o parâmetro que será inserido no DB
        $stmt->bind_param("sss", $_nome, $_email, $_senha);
        // s == string
        // i == int
        // f == float
        // b == Blob

        // Recebe os valores guardados no objeto
        $_nome = $usuario->nome;
        $_email = $usuario->email;
        $_senha = $usuario->senha;

        // Executa o Statement
        $cadastrou = $stmt->execute();

        // Fecha o Statement e Conexão
        $stmt->close();
        $db->fecharConexaoDB($conexao);

        return $cadastrou;
    }

    public function buscarUsuarioDAO($usuario)
    {
        // Inclui o arquivo da classe ConexaoDB
        require_once "ConexaoDB.php";

        // Cria o objeto da classe ConexaoDB
        $db = new ConexaoDB();

        // Abre a conexão com o DB
        $conexao = $db->abrirConexaoDB();

        // Monta a query (busca)
        $sql = "SELECT
                    *
                FROM
                    usuario
                WHERE
                    email = ?
                ";
        
        // Cria o Prepared Statement
        $stmt = $conexao->prepare($sql);

        // Vincula o parâmetro que será inserido no DB
        $stmt->bind_param("s", $_email);
        // s == string
        // i == int
        // f == float
        // b == Blob

        // Recebe os valores guardados no objeto
        $_email = $usuario->email;

        // Executa o Statement
        $stmt->execute();

        // Guarda o resultado encontrado
        $resultado = $stmt->get_result()->fetch_assoc();

        // Fecha o Statement e Conexão
        $stmt->close();
        $db->fecharConexaoDB($conexao);

        return $resultado;
    }
}