<?php
include ("Tutoriais.php");

//aplicando o conceito de herança e de polimorfismo
class Artigo extends Tutoriais{
    private $dataPublicacao;
    
    public function __construct($autor, $titulo, $descricao, $dataPublicacao)
    {
        //aplicando o polimorfismo com o método construtor da classe pai
        parent::__construct($autor, $titulo, $descricao);

        //redefinindo o comportamento da classe por meio do polimorfismo
        $this->dataPublicacao = $dataPublicacao;
    }

    public function getDataPublicacao(){
        return $this->dataPublicacao;
    }
}