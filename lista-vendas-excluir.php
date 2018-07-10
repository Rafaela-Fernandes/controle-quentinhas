<?php 

/*include("conexao.php");
include("banco-vendas.php");

$data_inicial =$_POST['data_inicial_vendas'];
$data_fim =$_POST['data_fim_vendas']; 
                       
$data_inicial = DateTime::createFromFormat("d/m/Y", $data_inicial);
$data_inicial = $data_inicial->format("Y-m-d");


$data_fim = DateTime::createFromFormat("d/m/Y", $data_fim);
$data_fim = $data_fim->format("Y-m-d");

//date_format(new datetime($data_inicial),'y/m/d');
//date_format(new datetime($data_fim),'y/m/d');*/
             
?>

<!--  
    <table class="table table-condensed mt-3  tabela-vendas-item" id="tabela-vendas-excluir">
        <thead>
           
            <th class="text-center">Dia</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">Valor Unitário</th>
            <th class="text-center">Valor Total</th>
            <th class="text-center">Opção</th>
       
        </thead>
        <tbody class="input-excluir-vendas">
           
            <?php  $vendas = listarVendas($conexao,$data_inicial,$data_fim); 
               
                foreach($vendas as $v):
              
            ?>
            <tr>
              
                <td>
                    <input class="form-control" type="text" name="data_venda[]" value="<?= date('d/m/Y', strtotime($v['data_venda']))?>"  disabled/>
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
                <td>
                     <button class="img-lixeira btn" onclick="remove(this)" type="submit"  name="id[]" value="<?=$v['id'] ?>">Excluir</button>
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
    </div> -->

<style>
    .img-lixeira {
        background-image: url(img/lixo.png) !important;
        background-repeat: no-repeat !important;
        background-color: #FFF !important;
        color: rgba(255, 255, 255, 0) !important;
        cursor: pointer;

        margin-left: 10rem !important;
    }
    
    .input-excluir-vendas input{
        border: none !important;
        background: #FFF !important;
        margin: auto;
        text-align: center;
    }
</style>

<script src="js/jquery.js"></script>
<script src="js/sistema.js"></script>
<script src="js/jquery.maskMoney.js"></script>


<script>
 /*   $(document).ready(function() {
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


    });*/
</script>