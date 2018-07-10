<?php 

include("conexao.php");
include("banco-despesas.php");

 
$id = $_POST['id'];


 $query = "delete from item where id = {$id}";
        mysqli_query($conexao,$query);



echo var_dump($id);
//header("Location: sistema.php");
//die();




