<?php

include("conexao.php");
include("banco-cliente.php");



$nome = $_POST['nome'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero-casa'];
$descricao= $_POST['complemento'];
    
/*echo var_dump($nome);
echo var_dump($tel);
echo var_dump($cel);
echo var_dump($rua);
echo var_dump($bairro);
echo var_dump($numero);
echo var_dump($descricao);

*/


adiconarCliente($conexao,$nome,$tel,$cel,$rua,$bairro,$numero,$descricao);