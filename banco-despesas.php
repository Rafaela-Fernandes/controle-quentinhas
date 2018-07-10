<?php 


// array de meses para select
function meses($conexao){
    
$meses= array();
$query= "SELECT * FROM  meses";
$resultado = mysqli_query($conexao,$query);
    while($mes = mysqli_fetch_assoc($resultado)):
    array_push($meses, $mes); 
    endwhile;
    return $meses;
}
    
function anos($conexao){
    
$anos= array();

$query= "SELECT * FROM  anos";
$resultado = mysqli_query($conexao,$query);

    while($ano = mysqli_fetch_assoc($resultado)):
    array_push($anos, $ano);
    endwhile;
    return $anos;
}
     



function adiconarDespesas($conexao,$cod,$mes,$ano,$item,$valor){
    

    
    for($i=0; $i<sizeof($item); $i++){
    
    mysqli_query($conexao,"insert into item (cod,mes,ano,item,valor) values({$cod[$i]},'{$mes}',{$ano},'{$item[$i]}',{$valor[$i]})");
        
   }
}
    


function listarDespesas($conexao,$mesEscolhido,$anoEscolhido){
     $despesas = array();
     $query = "select * from item where mes = '$mesEscolhido' and  ano = '$anoEscolhido'";
     $resultado = mysqli_query($conexao, $query);

    while($despesa = mysqli_fetch_assoc($resultado)){
        array_push($despesas, $despesa);  
    }

    
    
     return $despesas;  
}


function totalDespesas($conexao,$mesEscolhido,$anoEscolhido){
    $total =array(); 
    $query = "SELECT sum(valor)  FROM item where mes = '{$mesEscolhido}' and ano = {$anoEscolhido}";
    $resultado = mysqli_query($conexao,$query);
   
    while($tot = mysqli_fetch_assoc($resultado)):
    array_push($total,$tot);
    
    endwhile;
    return $total;
    
}








function alteraDespesas($conexao,$cod,$mes,$ano,$item,$valor,$id){
    
     for($i=0; $i<5; $i++){
     
      $query= "UPDATE item set cod ={$cod[$i]}, mes ='{$mes[$i]}', ano={$ano[$i]}, item='{$item[$i]}',  valor = {$valor[$i]} where id = {$id[$i]}";
      mysqli_query($conexao,$query);  
     
 }

   
}



function addItem($conexao,$cod_item,$nome_item){
    

    
    mysqli_query($conexao,"insert into cad_item (cod_item,nome_item) values({$cod_item},'{$nome_item}')");


}


function listarItem($conexao){
    
     $itens = array();
     $query = "select * from cad_item";
     $resultado = mysqli_query($conexao, $query);

    while($item = mysqli_fetch_assoc($resultado)){
        array_push($itens, $item);  
    }

    
    
     return $itens;  
}