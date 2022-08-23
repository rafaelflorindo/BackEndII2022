<?php

require_once("Produto.php");

//instanciar o objeto

$objetoProduto = new Produto();

$objetoProduto->setNome("Microfone");
echo "Produto: " . $objetoProduto->getNome();

//armazenar o código e o preço
//resgatar o codigo e o preço

/*$objetoProduto->nome = "Teclado";
$objetoProduto->codigo = 458;
$objetoProduto->preco = 54.89;

echo $objetoProduto->codigo;
echo " - " . $objetoProduto->nome;
echo " - " . $objetoProduto->preco;*/

//var_dump($objetoProduto);