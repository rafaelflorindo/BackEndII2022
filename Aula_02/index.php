<?php
include ("Professor.php");
$bd = new Professor();

echo "<pre>";
echo "<h1>LISTANDO REGISTRO</H1>";
$result = $bd->listar();
var_dump($result);

/*$teste = $bd->inserir('Arthur Florindo');
if($teste){
    echo "<h1>LISTANDO REGISTRO APÓS INSERT</H1>";
    $result = $bd->listar();
    var_dump($result);
}else{
    echo "Erro ao inserir";
}
*/
/*$teste = $bd->atualizar(5, 'Arthur Oliveira Florindo');
if($teste){
    echo "<h1>LISTANDO REGISTRO APÓS UPDATE</H1>";
    $result = $bd->listar();
    var_dump($result);
}else{
    echo "Erro ao Atualizar";
}*/

/*$teste = $bd->deletar(4);
if($teste){
    echo "<h1>LISTANDO REGISTRO APÓS DELETE</H1>";
    $result = $bd->listar();
    var_dump($result);
}else{
    echo "Erro ao Deletar";
}*/

$result = $bd->listarUm(2);
echo "<h1>LISTANDO O REGISTRO</H1>";
var_dump($result);
echo "</pre>";