<?php 



include("conexao.php");
include("banco-despesas.php");


$cod_item = $_POST['cod_item'];
$nome_item = $_POST['nome_item'];

echo var_dump($cod_item);
echo var_dump($nome_item);
addItem($conexao,$cod_item,$nome_item);