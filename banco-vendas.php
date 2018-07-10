

<?php 



function adicionarVendas($conexao,$data_venda,$mes_venda,$ano_venda,$qtd_vendas,$valor_venda){
    
    
    
    $query= "insert into vendas (data_venda,mes_venda,ano_venda,qtd_vendas,valor_venda) values('{$data_venda}','{$mes_venda}','{$ano_venda}',{$qtd_vendas},{$valor_venda})";
    mysqli_query($conexao,$query); 
    
    
    
    
}


function listarVendas($conexao,$data_inicial,$data_fim){
    $vendas = array();
    $query= "SELECT * FROM vendas WHERE data_venda BETWEEN '{$data_inicial}' AND '{$data_fim}' ORDER BY data_venda ASC ";
    $resultado = mysqli_query($conexao,$query);
    
    
    while($venda = mysqli_fetch_assoc($resultado)){
      
         array_push($vendas, $venda);
    
}
    
   
    return $vendas;
}



function listarVendasExcluir($conexao,$data_inicial,$data_fim){
    $vendas = array();
    $query= "SELECT * FROM vendas WHERE data_venda BETWEEN '{$data_inicial}' AND '{$data_fim}' ORDER BY hora_venda DESC ";
    $resultado = mysqli_query($conexao,$query);
    
    
    while($venda = mysqli_fetch_assoc($resultado)){
      
         array_push($vendas, $venda);
    
}
    
   
    return $vendas;
}



function alteraVendas($conexao,$data_venda,$qtd_vendas,$valor_venda,$id){
  
     for($i=0; $i<sizeof($id); $i++){
      
      $query= "UPDATE vendas set data_venda = date_format(str_to_date('{$data_venda[$i]}', '%d/%m/%Y'), '%Y-%m-%d'), qtd_vendas = {$qtd_vendas[$i]}, valor_venda = {$valor_venda[$i]} where id = {$id[$i]}";
      mysqli_query($conexao,$query);  
     
 }

   
}

