<?php 

include("conexao.php");
include('mpdf60/mpdf.php');

$ano = $_GET['ano'];







    

    
$query = "

SELECT(

SELECT sum(total_venda) from vendas where mes_venda = 'Janeiro' and ano_venda = '{$ano}'
) AS 'Jan',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Fevereiro' and ano_venda = '{$ano}'

)AS 'Fev',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Marco' and ano_venda = '{$ano}'

)AS 'Mar',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Abril' and ano_venda = '{$ano}'

)AS 'Abr',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Maio' and ano_venda = '{$ano}'

)AS 'Mai',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Junho' and ano_venda = '{$ano}'

)AS 'Jun',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Julho' and ano_venda = '{$ano}'

)AS 'Jul',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Agosto' and ano_venda = '{$ano}'

)AS 'Ago',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Setembro' and ano_venda = '{$ano}'

)AS 'Set',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Outubro' and ano_venda = '{$ano}'

)AS 'Out',

(

SELECT sum(total_venda) from vendas where mes_venda = 'Novembro' and ano_venda = '{$ano_venda}'

)AS 'Nov',
(

SELECT sum(total_venda) from vendas where mes_venda = 'Dezembro' and ano_venda = '{$ano_venda}'

)AS 'Dez'




";

$resultado = mysqli_query($conexao,$query); 
$exibicao = mysqli_fetch_assoc($resultado);

           
  foreach($exibicao as $chave => $valor){
      
      $mes .= $chave. "<br>";
      $valor_mes .= $valor . "<br>";
      $total = $total + $valor;
  }  

       
 $mes;
 $valor_mes;
 $total;


$result =" 

          <img src='img/logo-impressao.png' style='margin-left:200 px;'>
          <h2 style='text-align:center;'> Relatório Anual Vendas - ".$ano."</h2>
          <table style='width:750px; text-align: left; margin-top: 50px; font-size:20px'> 
           <thead> 
           
              <tr> 
              
                 <th style='text-align: left'> Mês </th>
                 <th style='text-align: left'> Custo </th>
                
              </tr>
           
           </thead>
           <tfoot>
            <tr>
              <td>Total</td>
              <td>".$total."</td>
            </tr>
          </tfoot>
        
            <tbody> 
             
            <tr>
             
           
            <td colspan='2'> <hr> </td>
              
             
            </tr>   
            
            <tr>
             
               <td>".$mes." </td>
               <td>".$valor_mes." </td>
          
            
            </tr>
               
             <tr>
             
           
            <td colspan='2'> <hr> </td>
              
             
            </tr>
            </tbody>
        </table>";




 




 
 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 //$css = file_get_contents('css/bootstrap.css');
 //$mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($result);
 $mpdf->Output();

 exit;

?>