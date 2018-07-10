<?php 

include("conexao.php");

$mes = $_GET['mes'];
$ano = $_GET['ano'];

$query = "DELETE FROM item where mes = '{$mes}' and  ano = '{$ano}'";
mysqli_query($conexao,$query);

echo $mes;
echo $ano;



?>



 