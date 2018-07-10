<?php 

include("conexao.php");
include("banco-vendas.php");

$data_inicial =$_POST['data_inicial'];
$data_fim =$_POST['data_fim']; 
                       

$data_inicial = DateTime::createFromFormat("d/m/Y", $data_inicial);
$data_inicial = $data_inicial->format("Y-m-d");


$data_fim = DateTime::createFromFormat("d/m/Y", $data_fim);
$data_fim = $data_fim->format("Y-m-d");

//date_format(new datetime($data_inicial),'Y/m/d');
//date_format(new datetime($data_fim),'Y/m/d');
             
?>

<form action="" class="mb-5" id="altera-vendas" method="post">

    <table class="table table-condensed mt-3  tabela-vendas-item" id="tabela-vendas-editar ">
        <thead>
            <th class="d-none"></th>
            <th class="text-center">Data</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">Valor Unitário</th>
            <th class="text-center">Valor Total</th>
        </thead>
        <tbody class="input-alterar-vendas ">

            <?php  $vendas = listarVendas($conexao,$data_inicial,$data_fim); 
               
                foreach($vendas as $v):
              
            ?>
            <tr>
                <td class="d-none">
                    <input disabled class="form-control editar-vendas" type="hidden" name="id[]" value="<?= $v['id']?>" />
                </td>
                <td class="">
                    <input disabled class="form-control editar-vendas text-center" type="text" name="data_venda[]" value="<?= date('d/m/Y', strtotime($v['data_venda']))?>" />
                </td>
                <td>
                    <input disabled class="form-control editar-vendas text-center" type="number" name="qtd_vendas[]" value="<?= $v['qtd_vendas']?>" />
                </td>
                <td>
                    <input disabled class="form-control editar-vendas valor text-center" type="text" name="valor_venda[]" value="<?= $v['valor_venda']?>" />
                </td>
                <td>
                    <input disabled class="form-control editar-vendas valor text-center" type="text" name="total_venda[]" value="<?= $v['total_venda'] ?>"/>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>

    </table>
   <hr>
    <button class="btn bt" id="btn-alterar-venda">Alterar</button>
    <span class="btn bt" type="text" style="background:#2399c7" id="btn-editar-venda">Editar</span>
     <a href="relatorio-vendas.php?data_inicial=<?=$data_inicial?>& data_fim=<?=$data_fim?>" target="_blank"><img src="img/pdf.png" alt=""></a> 
     <div class="btn-group float-right mr-5" role="group" aria-label="Basic example">

        <div class="div-texto ">
            <span class="" type="text">Total Vendas</span>
        </div>
        <div class="div-valor"><span type="text" id="total-vendas"> </span></div>
    </div>
</form>


<style>

   .editar-vendas{
        background: #FFF !important;
        border: none;
    }
   #btn-editar-venda:hover{
        background: #1a6e8e !important;
      
    }
    
    #btn-editar-venda{
           border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    #btn-alterar-venda{
          border-top-left-radius: 0;
        border-bottom-left-radius: 0; 
    }

</style>

<script src="js/jquery.js"></script>
<script src="js/sistema.js"></script>
<script src="js/jquery.maskMoney.js"></script>


<script>
    $(document).ready(function() {
        $("input").attr("autocomplete", "off");
        
        
          function total_vendas() {
            var total = $("#altera-vendas input[name='total_venda[]'");
            var valor = 0;

            for (var i = 0; i < total.length; i++) {
                valor += parseFloat(total[i].value, 10);
            };
            $("#total-vendas").text(valor);
        }
        
        
        
        
        total_vendas();
        $("#altera-vendas").submit(function(event) {
            event.preventDefault();


            $.ajax({
                    url: 'http://localhost/controle-quentinhas/altera-vendas.php',
                    type: 'POST',
                    data: $("#altera-vendas").serializeArray(),
                    dataType: 'html',
                    beforeSend: function() {

                        $('.tela-editar').show();


                    }
                })

                .done(function() {
                    setTimeout(function() {
                        $('.tela-editar').hide();
                        $(".msg-alteracao").show("slow");
                         total_vendas(); 
                    }, 1000);

                    setTimeout(function() {

                        $(".msg-alteracao").hide("slow");
                        
                         $('.input-alterar-vendas input').addClass('editar-vendas');
                          $('.input-alterar-vendas input').attr('disabled','disabled');
       
                    }, 3000);


                });

        });


 

        $("input[name='qtd_vendas[]']").change(function() {

            var qtd = parseInt($(this).val(), 10);
            var valor = parseFloat($("input[name='valor_venda[]']").val(), 10);
            var total = qtd * valor;

            $("input[name='total_venda[]'").on("focus", function() {


                $(this).val(total);

            });

        });
        
        
        $("#btn-editar-venda").on('click',function(){
            $('.input-alterar-vendas input').removeClass('editar-vendas');
            $('.input-alterar-vendas input').removeAttr('disabled');
       
        })


    })
</script>