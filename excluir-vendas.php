<?php 


include("conexao.php");




$id = $_POST['id'];


echo var_dump($id);
mysqli_query($conexao, "DELETE FROM vendas WHERE id = {$id}");  