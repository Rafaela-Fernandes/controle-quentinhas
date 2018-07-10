<?php 

include("conexao.php");
include('mpdf60/mpdf.php');

$data_inicial = $_GET['data_inicial'];
$data_fim = $_GET['data_fim'];









    $query= "SELECT * FROM vendas WHERE data_venda BETWEEN '{$data_inicial}' AND '{$data_fim}' ORDER BY data_venda ASC ";
    $resultado = mysqli_query($conexao,$query);
    
    
    while($resul_row  = mysqli_fetch_assoc($resultado)){
      
       $data .=  date('d/m/Y', strtotime($resul_row['data_venda'])). "<br>";
        $qtd_venda .= $resul_row['qtd_vendas'] . "<br>";
        $valor_venda .= $resul_row['valor_venda'] . "<br>";
        $total_venda .= $resul_row['total_venda'] . "<br>";
        $total_qtd = $total_qtd + $resul_row['qtd_vendas'];
        $total_geral = $total_geral + $resul_row['total_venda'];
  
    
}
    
 echo $data;
 echo $qtd_venda;
 echo $valor_venda;
 echo $total_venda;
 echo $total_qtd;
 echo $total_geral;



$data_inicial = DateTime::createFromFormat("Y-m-d", $data_inicial);
echo $data_inicial = $data_inicial->format("d/m/Y");


$data_fim = DateTime::createFromFormat("Y-m-d", $data_fim);
echo $data_fim = $data_fim->format("d/m/Y");


$result =" 

          <img src='img/logo-impressao.png' style='margin-left:200 px;'>
          <h2 style='text-align:center;'> Relatório Vendas - ".$data_inicial." á ".$data_fim."</h2>
          <table style='width:750px; text-align: left; margin-top: 50px; font-size:20px'> 
           <thead> 
           
              <tr> 
              
                 <th style='text-align: center'> Data </th>
                 <th style='text-align: center'> Quantidade </th>
                 <th style='text-align: center'> Valor Unitario </th>
                 <th style='text-align: center'> Valor Total </th>
                
              </tr>
           
           </thead>
           <tfoot>
            <tr>
              <td style='text-align: center'>Total</td>
              <td style='text-align: center'>".$total_qtd."</td>
              <td style='text-align: center'>12 </td>
              <td style='text-align: center'>".$total_geral."</td>
            </tr>
          </tfoot>
        
            <tbody> 
             
            <tr>
             
           
            <td colspan='4'> <hr> </td>
              
             
            </tr>   
            
            <tr>
             
               <td style='text-align: center'>".$data." </td>
               <td style='text-align: center'>".$qtd_venda." </td>
               <td style='text-align: center'>".$valor_venda." </td>
               <td style='text-align: center'>".$total_venda." </td>
          
            
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