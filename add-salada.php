<?php 


include("conexao.php");


$salada = $_POST['salada'];
$query_salada = "insert into salada (saladas) value('{$salada}')";
mysqli_query($conexao,$query_salada);