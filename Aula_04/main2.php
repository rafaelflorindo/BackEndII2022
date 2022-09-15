<?php

include("Produto.php");
include("Carrinho.php");

$produto1 = new Produto("Monitor");
$produto2 = new Produto("Gabinete");
$produto3 = new Produto("Mouse");

$carrinho1 = new Carrinho("Leonardo", "Pendrive 64 GB");
$carrinho1->addProduto($produto1);
$carrinho1->addProduto($produto2);
$carrinho1->addProduto($produto3);

echo "Cliente: " . $carrinho1->cliente; 
echo "<br> Produtos no carrinho. <br>";
$i = 1;
foreach($carrinho1->getProduto() as $produto){
    //var_dump($produto);
    echo $i++;
    echo " - " . $produto->nomeProduto;
    echo "<br>";
}
echo "Brinde: ". $carrinho1->brinde->descricao;
//var_dump($carrinho1->brinde); 
//var_dump($produto3);