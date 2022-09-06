<?php
//testar sem herança
//include ("classes/Tutoriais.php");

/*
//testar sem herança
$tutorial = new Tutoriais("Rafael", "Manipulação de Dados", "CRUD utilizando PDO");

$tutorial->autor = "Rafael";
$tutorial->setTitulo("Manipulação de Dados");
$tutorial->descricao = "CRUD utilizando PDO";*/

/*echo "Autor = " . $tutorial->getAutor(); 
echo "<br>Titulo = " . $tutorial->getTitulo(); 
echo "<br>Descrição = " . $tutorial->getDescricao(); 
*/

//testar com herança
include ("classes/Artigos.php");

$artigo = new Artigo("Rafael", "Manipulação de Dados", "CRUD utilizando PDO", "2022-09-06");

echo "Autor = " . $artigo->getAutor(); 
echo "<br>Titulo = " . $artigo->getTitulo(); 
echo "<br>Descrição = " . $artigo->getDescricao();
echo "<br>Data de Publicacao = " . $artigo->getDataPublicacao();
echo "<hr>Data Interface = ". $artigo->data();