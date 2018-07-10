<?php 


include("conexao.php");
include("banco-despesas.php");

$cod = $_POST['cod'];
$mes= utf8_decode($_POST['select-mes-cadastro']);
$ano= $_POST['select-ano-cadastro'];
$item = $_POST['item'];
$valor = $_POST['valor'];

adiconarDespesas($conexao,$cod,$mes,$ano,$item,$valor);


