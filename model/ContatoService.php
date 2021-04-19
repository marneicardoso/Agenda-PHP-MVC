<?php
class ContatoService
{
    public function cadastrarContato($contato)
    {
        // Verifica se os campos obrigatórios foram preenchidos


        // inclui o arquivo ContatoDAO
        require_once "ContatoDAO.php";

        // Cria o objeto da classe ContatoDAO
        $dao = new ContatoDAO();

        // Envia os dados para cadastrar no DB
        $cadastrou = $dao->cadastrarContatoDAO($contato);

        // Verifica se houve sucesso ao cadastrar
        if ($cadastrou) {
            echo "Cadastro efetuado com sucesso!";
        
        } else {
            echo "Erro ao efetuar o cadastro.";
        }


        // AJUSTAR A FORMATAÇÃO
        // Limpa o campo de telefone
        $foneFormatado = str_replace("(", "", $contato->fone);
        $foneFormatado = str_replace(")", "", $foneFormatado);
        $foneFormatado = str_replace(" ", "", $foneFormatado);
        $foneFormatado = str_replace("-", "", $foneFormatado);
        $contato->fone = $foneFormatado;
    }
}

// PSR - function e class a abertura do bloco é embaixo
/*class ContatoService
{
    // É recomendado que NÃO seja passado mais que 3 parâmetros
    public function cadastrarContato($contato)
    {
        if (strcmp($contato->nome, "") == 0) {
            return "Preencha o campo nome";
        }

        //return "OK";
    }
}*/