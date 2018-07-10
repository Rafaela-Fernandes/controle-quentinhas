<?php 


include("conexao.php");
include("banco-despesas.php");


$cod_item = $_POST['cod_item'];


//echo var_dump($cod_item);
//echo var_dump($nome_item);

$query = "DELETE from cad_item WHERE cod_item= {$cod_item}";
mysqli_query($conexao,$query);
