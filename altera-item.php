<?php 

include("conexao.php");
include("banco-despesas.php");

$cod = $_POST['cod'];
$mes= $_POST['mes'];
$ano= $_POST['ano'];
$item = $_POST['item'];
$valor = $_POST['valor'];
$id = $_POST['id'];

alteraDespesas($conexao,$cod,$mes,$ano,$item,$valor,$id);

    

   





//echo gettype ($valor);
//echo gettype ($id);
//header("Location: sistema.php?alterado=true");

//die();

/*echo var_dump($id );
echo var_dump($cod);
echo var_dump($mes);
echo var_dump($ano);
echo var_dump($item);
echo var_dump($valor);*/





?>  







