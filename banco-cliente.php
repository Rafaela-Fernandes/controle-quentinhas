<?php 



function  adiconarCliente($conexao,$nome,$tel,$cel,$rua,$bairro,$numero,$descricao){
    $query = "insert into cliente (nome,telefone,celular,rua,bairro,numero,descricao) values('{$nome}','{$tel}','{$cel}','{$rua}','{$bairro}',{$numero},'{$descricao}')";
    return mysqli_query($conexao,$query);
    
}




function exibirClientes($conexao){
    
$clientes = array();    
$query = "select* from cliente"; 
$resultado = mysqli_query($conexao,$query);

    while($cliente = mysqli_fetch_assoc($resultado)):
    
      array_push($clientes, $cliente);
    
    endwhile;
    
    
    
    return $clientes;
    
}




function alteraClinte($conexao,$nome,$tel,$cel,$rua,$bairro,$numero,$descricao,$id){
    
    
   $query = "UPDATE cliente set nome = '{$nome}', telefone = {$tel}, celular = {$cel}, rua = '{$rua}', bairro = '{$bairro}',  numero = {$numero}, descricao = '{$descricao}' WHERE id = {$id}";
    
return mysqli_query($conexao, $query);
    
}

?>


