<?php 

include("conexao.php");
include("banco-despesas.php");

$mesEscolhido =$_POST['mes'];
$anoEscolhido =$_POST['ano']; 

                          
             
?>




<table class="table table-condensed  tabela-cadastro-item" style="display:" id="tabela-despesas-excluir">
    <thead class="text-center">

        <th>Código</th>
        <th class="d-none">Mês</th>
        <th class="d-none">Ano</th>
        <th>Item</th>
        <th>Custo Mensal</th>
        <th>Opção</th>

    </thead>
    <tbody class="border border-0 input-excluir">
        <?php 
      
            $despesas = listarDespesas($conexao,$mesEscolhido,$anoEscolhido);
            foreach($despesas as $d):     
            
            ?>
        <tr>
            <td>
                <input type="text" class="form-control  cod" name="cod[]" value="<?=$d['cod'] ?>" disabled>
            </td>
            <td class="d-none">
                <input type="text" class="form-control  mes" name="mes[]" value="<?=$d['mes'] ?>" disabled>
            </td>
            <td class="d-none">
                <input type="text" class="form-control  ano " name="ano[]" value="<?=$d['ano'] ?>" disabled>
            </td>
            <td>
                <input type="text" class="form-control item" name="item[]" value="<?=$d['item'] ?>" disabled>
            </td>
            <td>
                <input type="" class="form-control valor " name="valor[]" value="<?=$d['valor'] ?>" disabled>
            </td>

            <td class="text-center">
    
            <button class="img-lixeira btn " onclick="remove(this)" type="submit"  name="id[]" value="<?=$d['id'] ?>">Excluir</button>
                        
      
            </td>
            
        </tr>
      
        <?php endforeach;?>
        
    </tbody>
   
</table>
<hr>
<div class="btn-group float-right mt-3 mb-5" role="group" aria-label="Basic example">
       
       
        <div class="div-texto ">
            <span class="" type="text">Total Despesas</span>
        </div>
        <div class="div-valor mr-5"><span type="text" class="" id="total-despesas"> </span></div>
         <a href="excluir-desp.php?" data-mes="<?= $mesEscolhido ?>" data-ano="<?=$anoEscolhido?>" class="btn float-right esc">Excluir Tudo</a>
    </div>
    
<style>
    .img-lixeira {
        background-image: url(img/lixo.png) !important;
        background-repeat: no-repeat !important;
        background-color: #FFF !important;
        color: rgba(255, 255, 255, 0) !important;
        cursor: pointer;
        padding: 1rem !important;
        background-position: 50% 30%
    }
    .input-excluir input{
        
        border: 0;
        background: #FFF !important
    }
    
    .esc{
         border: 0;
        background: #ff7365;
          color:#FFF;
        border-radius: 0.3rem !important;
         text-decoration: none;
    }
    
    
    .esc:hover{
        
        background: #cd5c50;
          color:#FFF;
    }
    
</style>




<script src="js/jquery.js"></script>
<script>
    
    
    total_despesas_excluir(); 
  $("button[name='id[]']").click(function(event) {
            event.preventDefault();
            
            var id = this.value;
         
            var pagina = "remove-item.php";
            $.ajax({
                type: 'post',
                dataType: 'html',
                url: pagina,
                data: {id: id},
                 beforeSend: function() {

                        $('.tela-excluir').show();


                    }

            })
           
      
      
        .done(function() {
                    setTimeout(function() {
                        $('.tela-excluir').hide();
                        $(".msg-exclusao").show("slow");
                         total_despesas_excluir();
                    }, 1000);

                    setTimeout(function() {
                       
                        $(".msg-exclusao").hide("slow");
                        
                    }, 3000);


                });

        });


       function total_despesas_excluir() {
            var total = $("#tabela-despesas-excluir input[name='valor[]'");
            var valor = 0;

            for (var i = 0; i < total.length; i++) {
                valor += parseFloat(total[i].value, 10);
            };
            $("#total-despesas").text(valor);
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
    
    
    
    
    $(".esc").click(function(event) {
            event.preventDefault();
            
            var mes = $(this).attr('data-mes');
            var ano = $(this).attr('data-ano');
         
            var pagina = "excluir-desp.php";
            $.ajax({
                type: 'GET',
                dataType: '',
                 url: pagina,
                 data: {mes: mes, ano:ano},
                 beforeSend: function() {

                        $('.tela-excluir').show();


                    },
            success:function(){
                
                 
                     setTimeout(function() {
                        $('.tela-excluir').hide();
                        $(".msg-exclusao").show("slow");
                         total_despesas_excluir();
                    }, 1000);

                    setTimeout(function() {
                       
                        $(".msg-exclusao").hide("slow");
                       
                        
                    }, 3000);
                    
                       
                   }
                
                
              

            })
           
      
      
        
                   

                
                
              
                
        });
    
       

</script>