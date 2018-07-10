<?php 

include("conexao.php");

$id = $_GET['id'];
$tabela = $_GET['tabela'];

$query="delete from {$tabela} where id = {$id}";
mysqli_query($conexao,$query);





