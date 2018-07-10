<?php 
  

   $dataAtual = date('d/m/Y');


 



?>
    

    

    <form action="" method="post" class="mt-5" id="form-adicionar-vendas">

    <table class="table table-condensed mt-3 tabela-cadastro-item text-center">
        <thead>
            <tr>
                <th>Data</th>
                <th>Quantidade</th>
                <th>Valor Unitário</th>
                <th>Valor Total</th>
            </tr>

        </thead>
        <tbody class="input-vendas-add">

            <tr>
                <td> <input class="form-control" type="" name="data_venda" value="<?= $dataAtual ?>" autocomplete="off"  style="background:#FFF" /> </td>
                <td><input class="form-control vendas" type="number" name="qtd_vendas" value="" onchange="calcular()" required/></td>
                <td> <input class="form-control " type="number" name="valor_venda" value="12.00" onchange="calcular()" required/></td>
                <td> <input class="form-control valor" type="" name="total_venda" value="" required/></td>
            </tr>

        </tbody>

    </table>
   <hr>

    <button class="btn bt mt-2" type="submit">Cadastrar</button>

</form>



<!--- Tabela para cancelar vendas -->
 <section id="tabela-exclusao-vendas" style="margin-top: 7%;">
     
     
     
 </section>

<style>

    .input-vendas-add input{
        width: 95%;
        margin: auto;
        padding: 2rem;
        box-shadow: none !important;
        font-size: 2rem;
    }


</style>



<script>
        
 
     


 
    function calcular() {
        var qtd = parseInt($("input[name=qtd_vendas]").val(), 10);
        var valor = parseFloat($("input[name=valor_venda]").val(), 10);
     if(Number.isNaN(qtd)){
         qtd = 0;
     }
        var total = qtd * valor;
      
        parseFloat($("input[name=total_venda]").val(total), 10); 
        
        
          
        
    }
    
    
        
    $("#form-adicionar-vendas").submit(function(event) {
        event.preventDefault();

         $('input[name=data_venda]').removeAttr("disabled");

        $.ajax({

                url: "add-vendas.php",
                type: "POST",
                data: $("#form-adicionar-vendas").serialize(),
                dataType: "html",
            
                success:function(msg){
                    setTimeout(function() {
                    $(".msg-sucesso").show("slow");
                        
                     
                  }, 1000);    
                  
                     setTimeout(function() {
                     $(".msg-sucesso").hide("slow");
                     $(".valor,.vendas").val(" ");
                     $('input[name=data_venda]').attr("disabled","disabled");
                    $("#tabela-exclusao-vendas").html(msg);
                   
                        
                }, 3000);
                
               }

            })


            

    })
     

</script>




