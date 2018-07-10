<?php 

include("conexao.php");
include("banco-despesas.php");

$mesEscolhido =$_POST['selectMes-editar'];
$anoEscolhido =$_POST['selectAno-editar']; 
                       


             
?>


<form action="" method="post" id="form-lista-editar" class="mb-5">

    <table class="table table-condensed  tabela-cadastro-item" style="display:" id="tabela-despesas-editar">
        <thead class="text-center">
            <th></th>
            <th>Código</th>
            <th class="d-none">Mês</th>
            <th class="d-none">Ano</th>
            <th>Item</th>
            <th>Custo Mensal</th>


        </thead>
        <tbody class="border border-0  input-alterar">
            <?php 
           
            $despesas = listarDespesas($conexao,$mesEscolhido,$anoEscolhido);
            foreach($despesas as $d):     
             
            ?>

            <tr>
                <td>
                    <input type="hidden" class="form-control editar-desp id" name="id[]" value="<?=$d['id'] ?>" disabled>
                </td>
                <td>
                    <input type="text" class="form-control editar-desp cod" name="cod[]" value="<?=$d['cod'] ?>" disabled>
                </td>
                <td class="d-none">
                    <input type="text" class="form-control editar-desp mes" name="mes[]" value="<?=$d['mes'] ?>" disabled>
                </td>
                <td class="d-none">
                    <input type="text" class="form-control editar-desp ano " name="ano[]" value="<?=$d['ano'] ?>" disabled>
                </td>
                <td>
                    <input type="text" class="form-control editar-desp item" name="item[]" value="<?=$d['item'] ?>" disabled>
                </td>
                <td>
                    <input type="" class="form-control valor editar-desp " name="valor[]" value="<?=$d['valor'] ?>" disabled>
                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <hr>






    <a href="relatorio-despesas.php?mes=<?=$mesEscolhido?>& ano=<?=$anoEscolhido?>" target="_blank"><img src="img/pdf.png" alt=""></a>


    <button class="btn bt mt-3" type="submit" id="btn-alterar-desp">Alterar</button>
    <span class="btn bt mt-3 " type="text" style="background:#2399c7" id="btn-editar-desp">Editar</span>
    <div class="btn-group float-right mt-3 mr-5" role="group" aria-label="Basic example">

        <div class="div-texto ">
            <span class="" type="text">Total Despesas</span>
        </div>
        <div class="div-valor"><span type="text" class="" id="total"> </span></div>
    </div>


</form>


<style>
    .input-alterar input {
        width: 95%;
        margin: auto;
        box-shadow: none !important;
    }
    
    
    .editar-desp{
        background: #FFF !important;
        border: none;
    }
   #btn-editar-desp:hover{
        background: #1a6e8e !important;
      
    }
    
    #btn-editar-desp{
           border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    #btn-alterar-desp{
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
        $(".valor").maskMoney();
        total_despesas();
        $("#form-lista-editar").submit(function(event) {
            event.preventDefault();


            $.ajax({
                    url: 'http://localhost/controle-quentinhas/altera-item.php',
                    type: 'POST',
                    data: $("#form-lista-editar").serializeArray(),
                    dataType: 'html',
                    beforeSend: function() {

                        $('.tela-editar').show();


                    }
                })

                .done(function() {
                    setTimeout(function() {
                        $('.tela-editar').hide();
                        $(".msg-alteracao").show("slow");
                        total_despesas();
                    }, 1000);

                    setTimeout(function() {

                        $(".msg-alteracao").hide("slow");
                         $('.input-alterar input').addClass('editar-desp');
                        $('.input-alterar input').attr('disabled', 'disabled');
                    }, 3000);


                });



        });


        function total_despesas() {
            var total = $("#tabela-despesas-editar input[name='valor[]'");
            var valor = 0;

            for (var i = 0; i < total.length; i++) {
                valor += parseFloat(total[i].value, 10);
            };
            $("#total").text(valor);
        }
        
        
        
        $("#btn-editar-desp").on('click',function(){
            $('.input-alterar input').removeClass('editar-desp');
            $('.input-alterar input').removeAttr('disabled');
       
        })

    })
</script>