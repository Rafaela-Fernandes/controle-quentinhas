<?php 
include("conexao.php");
$idd = $_POST['idd'];
mysqli_query($conexao, "DELETE FROM cliente WHERE id = {$idd}");  