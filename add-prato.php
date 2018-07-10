<?php 


include("conexao.php");

 $prato = $_POST['prato'];



$query_prato = "insert into prato_principal (pratos) value('{$prato}')";
mysqli_query($conexao,$query_prato);





