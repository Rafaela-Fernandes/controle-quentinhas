<?php 



include("conexao.php");
include("banco-grafico.php");
$ano = "2018";
$ano_venda= "2018";

$despesas = despesasAnuais($conexao, $ano);
$vendas =  vendasAnuais($conexao, $ano_venda);
 
 $total_despesas =array();
 foreach($despesas as $chave => $valor){
       
       array_push($total_despesas,$valor);
     
 }


 $total_vendas =array();
 foreach($vendas as $chave2 => $valor){
       
       array_push($total_vendas,$valor);
     
 }
  

?>




<table class="table table-condensed text-center tabela-resultado" style="display" id="">
            <thead  style="background:#17a2b8;color:#FFF">
                <tr class="font-tabela">
                    
                    <th></th>
                    <th>Vendas</th>
                    <th>Despesas</th>
                    <th>Lucro</th>
                   

                </tr>
            </thead>
            <tbody>
               
               <?php
                         
                  for($i=0;$i<12;$i++):
                 ?>
                <tr class="bordas-td">
                     <td></td>
                    <td>
                       
                       
                       <?= $total_vendas[$i] ?>
                        
                  
                    </td>
                    <td>
                    
                   
                     <?= $total_despesas[$i]?>
                  
                    </td>
                    <td>
                       <?=  $total_vendas[$i] - $total_despesas[$i]?>
                    </td>

                    
                </tr>
                
                <?php endfor; ?>
                
            </tbody>
        </table>

      
      
      
<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th>Vendas</th>
            <th>Despesas</th>
            <th>Lucro</th>
        </tr>
    </thead>
    <tbody>
        <?php
                         
                  for($i=0;$i<12;$i++):
                 ?>
                <tr class="bordas-td">
                     <td></td>
                    <td>
                       
                       
                       <?= $total_vendas[$i] ?>
                        
                  
                    </td>
                    <td>
                    
                   
                     <?= $total_despesas[$i]?>
                  
                    </td>
                    <td>
                        
                        <?php  
                              
                                    $resul = $total_vendas[$i] - $total_despesas[$i];
                                    if($resul>0){
                                  
                                  echo "<p class='teste'> $resul </p>";
                              }
                        
                        
                        ?>
                    </td>

                    
                </tr>
                
                <?php endfor; ?>
    
    </tbody>
</table>


<style>

    .teste{
        
        color:red;
    }

</style>


<script type="text/javascript" src="js/jquery.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

















<script>



Highcharts.chart('container', {
 data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data extracted from a HTML table in the page'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    },
    
    
      xAxis: {
        categories: [
            'Jan',
            'Fev',
            'Mar',
            'Abr',
            'Mai',
            'Jun',
            'Jul',
            'Ago',
            'Set',
            'Out',
            'Nov',
            'Dez'
        ],
        crosshair: true
    },
    
    
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
});


</script>


