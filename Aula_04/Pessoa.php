<?php
class Pessoa
{
    public $nome;
    public $endereco;

    public function __construct($nome, Endereco $end)
    {
        $this->nome = $nome;
        $this->endereco = $end;
    }
}