
<?php 

include("conexao.php");
include("banco-grafico.php");


$ano = $_POST['selectAno-grafico']; 
$ano_venda = $_POST['selectAno-grafico']; 
 


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
  
$mes  = array( 'Jan',
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
            'Dez');


?>

<section>
    <img src="img/tabela.png" alt="" id="img-tabela" style="width: 3%" class="mt-3">
    <a href="relatorio-geral.php?ano=<?=$ano ?>" target="_blank"><img src="img/pdf.png" alt=""  class="mt-4 ml-4"></a> 
<div class="row mt-2">
    <div class="col-md-12 ">
        <table class="table table-condensed text-center tabela-resultado" style="display:none">
            <thead  style="background:#17a2b8;color:#FFF">
                <tr class="font-tabela">
                      <th>Mês</th>
                    <th>Vendas</th>
                    <th>Despesas</th>
                    <th>Lucro</th>
                    <th class="">Situação</th>

                </tr>
            </thead>
            <tbody>
                
                
                <?php
                         
                  for($i=0;$i<12;$i++):
                 ?>
                <tr class="">
                     <td><?= $mes[$i] ?></td>
                    <td >
                       
                        <span class="alinhar-text sp-despesa"> <?= $total_vendas[$i]?>  </span> 
                   
                        
                  
                    </td>
                    <td>
                    
                    <span class="alinhar-text sp-despesa"> <?= $total_despesas[$i]?>  </span> 
                    
                  
                    </td>
                    <td>
                        <span> <?=  $total_vendas[$i] - $total_despesas[$i]?>  </span>
                    </td>
                     
                    <td class="text-white resultado">
                        <?php  
                              
                                    $resul = $total_vendas[$i] - $total_despesas[$i];
                                    if($resul>0){
                                  
                                  echo "<span class='positivo'> Positivo </span>";
                              }else if($resul == 0){
                                        
                                    echo "";    
                            }else{
                                        echo "<span class='negativo'> Negativo </span>"; 
                                    }
                        
                        
                        ?>
                      
                    </td>
                    
                </tr>
                
                <?php endfor; ?>
                
            </tbody>
        </table>
    </div>     
</div>
<div class="row mt-5">
    <div id="barra" style="min-width: 310px; height: 500px; margin: 0 auto" class="col-md-12"></div> 
    
</div>     


<style>
    
    .positivo{
        
        color:#FFF;
        background: #7bda78;
        padding: 0.2rem 0rem;
        display: block;
    } 
    
    .negativo{
          color:#FFF;
        background: #da7878;
        padding: 0.2rem 0rem;
        display: block;
    }
    
</style>


<table id="datatable" style="visibility:hidden ">
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
                       <?=  $total_vendas[$i] - $total_despesas[$i]?>
                    </td>

                    
                </tr>
                
                <?php endfor; ?>
    
    </tbody>
</table>

</section>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>



<script>



  
    
    Highcharts.chart('barra', {
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column',
            marginTop: 120,
            plotBorderWidth: 1,
             spacingRight:30,
             backgroundColor: '#f6fbff',
        },
        title: {
            text: 'Gráfico Mensal Vendas,Despesas Lucros',
            y: 50,
            style: {
                fontSize: '30px',
                 floating: true,
                
                
              }
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Valor ($)',
                style: {
                fontSize: '20px',
              }
            }
            
             
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        },
        
           plotOptions: {
            column: {
            dataLabels: {
                enabled: true
            },
            
        }
    },
       
        
        
        
        
    xAxis: {
        type: 'category',
        labels: {
            style: {
                fontSize: '15px',
                margin: 300,
            }
        },
        
        
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
    

        

    
    $("#img-tabela").click(function(){
        
        $(".tabela-resultado").toggle('slow');
    });

    
    
       
    

    
 

   



</script>
