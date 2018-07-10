<?php 



include("conexao.php");


 $carne = $_POST['carne'];

$query_carne = "insert into carne (carnes) value('{$carne}')";
mysqli_query($conexao,$query_carne);