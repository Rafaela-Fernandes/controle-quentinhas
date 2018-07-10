<?php 

include("conexao.php");
include("banco-vendas.php");


setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

$data_venda = $_POST['data_venda'];
$qtd_vendas = $_POST['qtd_vendas'];
$valor_venda = $_POST['valor_venda'];


// formtando data dd-mm-yyyy para yyyy-mm-dd formato que o banco aceita 
$data_venda = DateTime::createFromFormat("d/m/Y", $data_venda);
$data_venda = $data_venda->format("Y-m-d");

// criadas para pegar mes e ano data acima
$mes_venda = $data_venda; 
$ano_venda =  $data_venda; 




// pegando somente o mes por extenso 
$mes_venda = ucfirst( ( strftime("%B", strtotime($mes_venda))));


// pegando apenas ano 
 $ano_venda = DateTime::createFromFormat("Y-m-d", $ano_venda);
 $ano_venda = $ano_venda->format("Y");


adicionarVendas($conexao,$data_venda,$mes_venda,$ano_venda,$qtd_vendas,$valor_venda);


/*echo var_dump($data_venda);
echo gettype($data_venda);
echo var_dump($mes_venda);
echo var_dump($ano_venda);

echo "<br> br<>"
echo var_dump($qtd_vendas);
echo var_dump($valor_venda);*/


$dataExcluir = date('d/m/Y');
$dataExcluir = DateTime::createFromFormat("d/m/Y", $dataExcluir);
$dataExcluir = $dataExcluir->format("Y-m-d");

 date_default_timezone_set('America/Bahia');

?>


<section>
    <table class="table table-condensed tabela-vendas-item tabela" id="tabela-vendas-excluir">
        <thead>
           
            <th class="text-center">Dia</th>
            <th class="text-center">Hora</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">Valor Unitário</th>
            <th class="text-center">Valor Total</th>
            <th class="text-center">Opção</th>
       
        </thead>
        <tbody class="input-excluir-vendas">
           
            <?php  $vendas = listarVendasExcluir($conexao, $dataExcluir, $dataExcluir); 
               
                foreach($vendas as $v):
              
            ?>
            <tr>
              
                <td>
                    <input class="form-control" type="text" name="data_venda[]" value="<?= date('d/m/Y', strtotime($v['data_venda']))?>"  disabled/>
                </td>
                <td>
                    <input class="form-control" type="text" name="hora" value="<?= date('H:i:s', strtotime($v['hora_venda']))?>"  disabled/>
                </td>
                <td>
                    <input class="form-control" type="number" name="qtd_vendas[]" value="<?= $v['qtd_vendas']?>" disabled/>
                </td>
                <td>
                    <input class="form-control valor" type="text" name="valor_venda[]"value="<?= $v['valor_venda']?>" disabled/>
                </td>
                 <td>
                    <input class="form-control valor" type="text" name="total_venda[]" value="<?= $v['total_venda'] ?>" disabled/>
                </td>
                <td class="text-center">
                     <button class="cancelar btn" onclick="remove(this)" type="submit"  name="id[]" value="<?=$v['id'] ?>">Cancelar</button>
                </td>
                
            </tr>
          <?php endforeach ?>
        </tbody>

    </table>
    <hr>
  
    <div class="btn-group float-right mb-5" role="group" aria-label="Basic example">

        <div class="div-texto ">
            <span class="" type="text">Total Vendas</span>
        </div>
        <div class="div-valor"><span type="text" id="total-vendas-excluir"> </span></div>
    </div>







<style>
     .cancelar{
       /* background-image: url(img/lixo.png) !important;*/
       /* background-repeat: no-repeat !important;*/
        background: #f57c78 !important;
        color:#FFF;
       /* color: rgba(255, 255, 255, 0) !important;*/
        /*cursor: pointer*/

       
    }
    
    .input-excluir-vendas input{
        border: none !important;
        background: #FFF !important;
        margin: auto;
        text-align: center;
    }
</style>






<script>
   $(document).ready(function() {
        total_vendas_excluir();
        $("button[name='id[]']").click(function(event) {
            event.preventDefault();

            var id = this.value;
            $.ajax({
                    url: 'http://localhost/controle-quentinhas/excluir-vendas.php',
                    type: 'POST',
                    data: {id:id},
                    dataType: 'html',
                     beforeSend: function() {

                        $('.tela-excluir').show();


                    }
                    
                })
            
            
                .done(function() {
                    setTimeout(function() {
                        $('.tela-excluir').hide();
                        $(".msg-exclusao").show("slow");
                        total_vendas_excluir();
                    }, 1000);

                    setTimeout(function() {
                       
                        $(".msg-exclusao").hide("slow");
                        
                    }, 3000);


                });
            
            
        
        
        });
        
        function total_vendas_excluir() {
            var total = $("#tabela-vendas-excluir input[name='total_venda[]'");
            var valor = 0;

            for (var i = 0; i < total.length; i++) {
                valor += parseFloat(total[i].value, 10);
            };
            $("#total-vendas-excluir").text(valor);
        }
        
        (function($) {
            remove = function(item) {
                var tr = $(item).closest('tr');
                tr.fadeOut(400, function() {
                    tr.remove();
                });
                return false;
            }
        })(jQuery);


    });
    
     $('#tabela-vendas-excluir').DataTable({
         
         pageLength: 3
     });
    

      
</script>


</section>