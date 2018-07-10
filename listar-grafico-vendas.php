<?php 
include("conexao.php");
include("banco-grafico.php");


 $ano_venda = $_POST["selectAno-grafico-vendas"];
 vendasAnuais($conexao, $ano_venda)



?>
<section>
 <img src="img/tabela.png" alt="" id="img-tabela-vendas" style="width: 3%" class="mt-3">
 <a href="relatorio-venda-geral.php?ano=<?=$ano_venda ?>" target="_blank"><img src="img/pdf.png" alt=""  class="mt-4 ml-4"></a> 
<div class="row mt-3">  
<div class="col-md-12">
<table  class="table table-condensed  tabela-cadastro-item tabela-vendas text-center" id="datatable-vendas" style="display:none">
    <thead>
       <tr>
           
           <th>Mês</th>
           <th> <?= "<strong> Total Vendas $ano_venda </strong>" ?></th>
       </tr>
        
    </thead>
    <tbody>
       
       <?php $exibicao_venda = vendasAnuais($conexao, $ano_venda); foreach($exibicao_venda as $chave => $valor):  ?>
        <tr>
        <td><?= $chave ?> </td>
        <td> <?= $valor ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>

<div class="row mt-5">
   <div id="container-vendas" style="min-width: 310px; height: 700px; margin: 0 auto" class="col-md-12"></div>
 
</div>
</section>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>



<script>
    
    var ano = $("#ano-grafico-vendas").val();
    var titulo = "Gráfico Vendas - " + ano;
     Highcharts.chart('container-vendas', {
        data: {
            table: 'datatable-vendas'
        },
         
         colors: ['#5cd489'], //#ffcb53
        chart: {
            type: 'column',
            marginTop: 120,
            plotBorderWidth: 1,
             spacingRight:30,
             backgroundColor: '#f6f9fa',
             plotBackgroundColor: '#fdfdfa',
             plotShadow: true,
            plotBorderWidth: 0
        },
        title: {
            text: titulo,
            y: 50,
            style: {
                fontSize: '30px',
                 floating: true,
                color: '#57636c'
                
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
                enabled: true,
                 style: {
                fontSize: '15px',
                  color: '#57636c'
              }
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
        }
    },    
  
        
    });


    
     $("#img-tabela-vendas").click(function(){
        
        $(".tabela-vendas").toggle('slow');
    })



</script>
