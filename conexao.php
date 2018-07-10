<?php 

$conexao = mysqli_connect('localhost','root','','controle-quentinhas');

if($conexao){
 
}else{
    
    echo "Falha na conexão" . mysqli_connect_error();
}


