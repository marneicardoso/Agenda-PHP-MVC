<?php
class ContatoDAO
{
    public function cadastrarContatoDAO($contato)
    {
        // Inclui o arquivo da classe ConexaoDB
        require_once "ConexaoDB.php";

        // Cria o objeto da classe ConexaoDB
        $db = new ConexaoDB();

        // Abre a conexão com o DB
        $conexao = $db->abrirConexaoDB();

        // Monta a query (cadastro)
        $sql = "INSERT INTO
                    contato (nome, email, fone)
                VALUES
                    (?, ?, ?)";

        // Cria o Prepared Statement
        $stmt = $conexao->prepare($sql);
        
        // Vincula o parâmetro que será inserido no DB
        $stmt->bind_param("sss", $_nome, $_email, $_fone);
        // s == string
        // i == int
        // f == float
        // b == Blob

        // Recebe os valores guardados no objeto
        $_nome = $contato->nome;
        $_email = $contato->email;
        $_fone = $contato->fone;

        // Executa o Statement
        $cadastrou = $stmt->execute();

        // Fecha o Statement e Conexão
        $stmt->close();
        $db->fecharConexaoDB($conexao);

        return $cadastrou;
    }

    public function buscarContatoDAO($campo, $tipo)
    {
        // Inclui o arquivo da classe ConexaoDB
        require_once "ConexaoDB.php";

        // Cria o objeto da classe ConexaoDB
        $db = new ConexaoDB();

        // Abre a conexão com o DB
        $conexao = $db->abrirConexaoDB();

        $sql = "";
        $stmt = null;

        // Verifica se o campo está em branco
        if (empty($campo)) {
            $sql = "SELECT * FROM usuario";
            $stmt = $conexao->prepare($sql);
        
        } elseif (strcmp($tipo, "email") == 0) {
            $sql = "SELECT * FROM usuario WHERE email = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("s", $_campo);
            $_campo = $campo;
        
        } elseif (strcmp($tipo, "nome") == 0) {
            $sql = "SELECT * FROM usuario WHERE nome LIKE ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("s", $_campo);
            $_campo = $campo."%"; // Complementa o LIKE (SQL)
        }

        // Executa o Statement
        $stmt->execute();

        // Guarda o resultado encontrado
        $resultado = $stmt->get_result();

        // Fecha o Statement e Conexão
        $stmt->close();
        $db->fecharConexaoDB($conexao);

        return $resultado;
    }
}