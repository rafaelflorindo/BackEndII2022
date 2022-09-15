<?php
include ("Brinde.php");

class Carrinho{
    public $cliente;
    public $produtos;

    public $brinde;

    public function __construct($cliente, $parametro)
    {
        $this->cliente = $cliente;
        $this->brinde = new Brinde($parametro);
    }

    public function addProduto(Produto $prod){
        $this->produtos[] = $prod;
    }

    public function getProduto(){
        return $this->produtos;
    }
}