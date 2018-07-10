<?php 

include("conexao.php");
include('mpdf60/mpdf.php');
include ("banco-grafico.php");

$ano = $_GET['ano'];
$ano_venda = $_GET['ano'];





$despesas = despesasAnuais($conexao, $ano);
$vendas =  vendasAnuais($conexao, $ano_venda);
 
  $despesa = array();
 foreach($despesas as $chave => $valor){
       
       $total_despesas .= $valor . "<br>";
       $mes .= $chave . "<br>";
       $total_d = $total_d + $valor;
      array_push($despesa,$valor);
 }


 $venda = array();
 foreach($vendas as $chave2 => $valor2){
       
      $total_vendas .= $valor2 ."<br>";
       array_push($venda,$valor2);
       $total_v = $total_v + $valor2;
 }

    
 for($i=0; $i<12; $i++){
     
      $sub .= $venda[$i] - $despesa[$i] . "<br>";
     
 }

$sub_total = $total_v - $total_d;

 $total_vendas;
 $total_despesas;
 $mes;
$total_d;
$total_v;
$sub;



$result =" 

          <img src='img/logo-impressao.png' style='margin-left:200 px;'>
          <h2 style='text-align:center;'> Relatório Anual - Vendas x Despesas - ".$ano."</h2>
          <table style='width:750px; text-align: left; margin-top: 50px; font-size:20px'> 
           <thead> 
           
              <tr> 
              
                 <th style='text-align: center'> Mês </th>
                 <th style='text-align: center'> Lucro Vendas </th>
                 <th style='text-align: center'> Custo Despesa </th>
                 <th style='text-align: center'> Diferença </th>
                
              </tr>
           
           </thead>
           <tfoot>
            <tr>
              <td style='text-align: center'>Total</td>
              <td style='text-align: center'>".$total_v."</td>
              <td style='text-align: center'>".$total_d."</td>
              <td style='text-align: center'>".$sub_total."</td>
            </tr>
          </tfoot>
        
            <tbody> 
             
            <tr>
             
           
            <td colspan='4'> <hr> </td>
              
             
            </tr>   
            
            <tr>
             
               <td style='text-align: center;margin-bottom:10px'>".$mes." </td>
               <td style='text-align: center;margin-bottom:10px'>".$total_vendas." </td>
               <td style='text-align: center;margin-bottom:10px'>".$total_despesas." </td>
               <td style='text-align: center;margin-bottom:10px'>".$sub." </td>
          
            
            </tr>
               
             <tr>
             
           
            <td colspan='4'> <hr> </td>
              
             
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