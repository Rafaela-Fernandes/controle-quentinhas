<?php 
include("conexao.php");
include("banco-vendas.php");


$data_venda = $_POST['data_venda'];
$qtd_vendas =$_POST['qtd_vendas'];
$valor_venda =$_POST['valor_venda'];
$id = $_POST['id'];




  
  
// $data_venda = array();

 // for($i=0;$i<sizeof($id);$i++)
     
    //  array_push($data_venda, date('Y/d/m', strtotime($data_venda_array[$i])));
    //  echo $data_venda[$i] . "<br>";
 // 

alteraVendas($conexao,$data_venda,$qtd_vendas,$valor_venda,$id);







echo  var_dump($data_venda);

  /*echo var_dump($qtd_vendas);
 echo var_dump($valor_venda);
 echo var_dump($total_venda);
echo var_dump($id);*/







