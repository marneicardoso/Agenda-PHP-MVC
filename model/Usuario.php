<?php
class Usuario
{
    // Atributos da classe
    private $id;
    private $nome;
    private $email;
    private $senha;

    // Métodos Mágicos (Get e Set)
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}

/* Set
    Verbo == Atribuir
    Substantivo == Conjunto
*/