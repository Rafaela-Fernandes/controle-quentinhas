<?php 




function listaTotal_Venda($conexao,$mes_selecionado,$ano_selecionado){
    
    $total_vendas =array(); 
    $query =  "SELECT sum(total_venda) from vendas WHERE mes_venda = '{$mes_selecionado}' AND  ano_venda  = '{$ano_selecionado}'";
    $resultado = mysqli_query($conexao,$query);
    
    
    while($tot = mysqli_fetch_assoc($resultado)):
    array_push($total_vendas,$tot);
    
    endwhile;
    return $total_vendas;
    
}






function listaTotal_Despesa($conexao,$mes_selecionado,$ano_selecionado){
    
    $total_despesas =array(); 
    $query =  "SELECT sum(valor) from item WHERE mes = '{$mes_selecionado}' AND  ano = '{$ano_selecionado}'";
    $resultado = mysqli_query($conexao,$query);
    
    
    while($tot = mysqli_fetch_assoc($resultado)):
    array_push($total_despesas,$tot);
    
    endwhile;
    return $total_despesas;
    
}




function despesasAnuais($conexao, $ano){
    

    
$query = "



SELECT(

SELECT sum(valor) from item where mes = 'Janeiro' and ano = '{$ano}'
) AS 'Jan',
(

SELECT sum(valor) from item where mes = 'Fevereiro' and ano = '{$ano}'

)AS 'Fev',
(

SELECT sum(valor) from item where mes = 'Marco' and ano = '{$ano}'

)AS 'Mar',
(

SELECT sum(valor) from item where mes = 'Abril' and ano = '{$ano}'

)AS 'Abr',

(

SELECT sum(valor) from item where mes = 'Maio' and ano = '{$ano}'

)AS 'Mai',

(

SELECT sum(valor) from item where mes = 'Junho' and ano = '{$ano}'

)AS 'Jun',
(

SELECT sum(valor) from item where mes = 'Julho' and ano = '{$ano}'

)AS 'Jul',
(

SELECT sum(valor) from item where mes = 'Agosto' and ano = '{$ano}'

)AS 'Ago',
(

SELECT sum(valor) from item where mes = 'Setembro' and ano = '{$ano}'

)AS 'Set',

(

SELECT sum(valor) from item where mes = 'Outubro' and ano = '{$ano}'

)AS 'Out',

(

SELECT sum(valor) from item where mes = 'Novembro' and ano = '{$ano}'

)AS 'Nov',
(

SELECT sum(valor) from item where mes = 'Dezembro' and ano = '{$ano}'

)AS 'Dez'




";

$resultado = mysqli_query($conexao,$query); 
$exibicao = mysqli_fetch_assoc($resultado);
return $exibicao;
           
    

    
}





function vendasAnuais($conexao, $ano_venda){
    

    
$query = "

SELECT(

SELECT sum(total_venda) from vendas where mes_venda = 'Janeiro' and ano_venda = '{$ano_venda}'
) AS 'Jan',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Fevereiro' and ano_venda = '{$ano_venda}'

)AS 'Fev',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Marco' and ano_venda = '{$ano_venda}'

)AS 'Mar',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Abril' and ano_venda = '{$ano_venda}'

)AS 'Abr',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Maio' and ano_venda = '{$ano_venda}'

)AS 'Mai',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Junho' and ano_venda = '{$ano_venda}'

)AS 'Jun',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Julho' and ano_venda = '{$ano_venda}'

)AS 'Jul',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Agosto' and ano_venda = '{$ano_venda}'

)AS 'Ago',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Setembro' and ano_venda = '{$ano_venda}'

)AS 'Set',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Outubro' and ano_venda = '{$ano_venda}'

)AS 'Out',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Novembro' and ano_venda = '{$ano_venda}'

)AS 'Nov',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Dezembro' and ano_venda = '{$ano_venda}'

)AS 'Dez'




";

$resultado = mysqli_query($conexao,$query); 
$exibicao_venda = mysqli_fetch_assoc($resultado);
return $exibicao_venda;
           
    

    
}