<?php

include ("Pessoa.php");
include ("Endereco.php");

$nome = "Rafael";
$logradouro = "Rua 123, 456";

$endereco1 = new Endereco($logradouro);

$pessoa1 = new Pessoa($nome, $endereco1);

var_dump($pessoa1);
//echo "<br>";
//var_dump($endereco1);

