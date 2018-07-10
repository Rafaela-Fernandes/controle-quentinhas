


<?php 

include("conexao.php");
include('mpdf60/mpdf.php');

$mes = $_GET['mes'];
$ano = $_GET['ano'];



     $query = "select * from item where mes = '$mes' and  ano = '$ano'";
     $resultado = mysqli_query($conexao, $query);
     $total = 0;
    while($resul_row = mysqli_fetch_assoc($resultado)){
        
        $item .= $resul_row['item'] . "<br>";
        $valor .= $resul_row['valor'] . "<br>";
        $total = $total + $resul_row['valor'];
    };
 



$item;
$valor;
$total;


$result =" 

          <img src='img/logo-impressao.png' style='margin-left:200 px;'>
          <h2 style='text-align:center;'> Relatório Despesas - ".$mes." ".$ano."</h2>
          <table style='width:750px; text-align: left; margin-top: 50px; font-size:20px'> 
           <thead> 
           
              <tr> 
              
                 <th style='text-align: left'> Item </th>
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
             
               <td>".$item." </td>
               <td>".$valor." </td>
          
            
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