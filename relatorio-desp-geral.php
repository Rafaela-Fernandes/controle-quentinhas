<?php 

include("conexao.php");
include('mpdf60/mpdf.php');

$ano = $_GET['ano'];







    

    
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
          <h2 style='text-align:center;'> Relatório Anual Despesas - ".$ano."</h2>
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