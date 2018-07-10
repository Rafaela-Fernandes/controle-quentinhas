<?php 


include("conexao.php");
function exibirClientes_Excluir($conexao){
    
$clientes_excluir = array();    
$query = "select* from cliente"; 
$resultado = mysqli_query($conexao,$query);

    while($cliente = mysqli_fetch_assoc($resultado)):
    
      array_push($clientes_excluir, $cliente);
    
    endwhile;
    
    
    
    return $clientes_excluir;
    
}

?>







<table class="table table-condensed mt-3  tabela-vendas-item tabela">
    <thead class="text-center">
        <th class="">Nome</th>
        <th class="">Telefone</th>
        <th class="">Celular</th>
        <th class="">Rua</th>
        <th class="">Bairro</th>
        <th class="">Numero</th>
        <th class="">Complemento</th>
        <th class="">Opção</th>


    </thead>
    <tbody class="">
        
        <?php  
          
            
    
           $clientes_excluir = exibirClientes_Excluir($conexao); 
               
                foreach($clientes_excluir as $cx):
              
            ?>
        <tr class="text-center">
            <td>
                <?= $cx['nome']?>
            </td>
            <td>
                <?= $cx['telefone']?>
            </td>
            <td>
                <?= $cx['celular']?>
            </td>
            <td>
                <?= $cx['rua']?>
            </td>
            <td>
                <?= $cx['bairro'] ?>
            </td>
            <td>
                <?= $cx['numero'] ?>
            </td>
            <td>
                <?= $cx['descricao'] ?>
            </td>
            <td>
             <button class="img-lixeira btn" onclick="remove(this)" type="submit"  name="idd[]" value="<?=$cx['id'] ?>">Excluir</button> 
                
            </td>

        </tr>
     
        <?php endforeach ?>
           
    </tbody>

</table>






<style>
    .img-lixeira {
        background-image: url(img/lixo.png) !important;
        background-repeat: no-repeat !important;
        background-color: #FFF !important;
        color: rgba(255, 255, 255, 0) !important;
        cursor: pointer;
     
    }
</style>

<script src="js/jquery.js"></script>
<script src="js/sistema.js"></script>



<script>
    $(document).ready(function() {
        
        $("button[name='idd[]']").click(function(event) {
            event.preventDefault();

            var idd = this.value;
            $.ajax({
                    url: 'http://localhost/controle-quentinhas/excluir-cliente.php',
                    type: 'POST',
                    data: {idd:idd},
                    dataType: 'html',
                     beforeSend: function() {

                        $('.tela-excluir').show();


                    }
                    
                })
            
            
                .done(function() {
                    setTimeout(function() {
                        $('.tela-excluir').hide();
                        $(".msg-exclusao").show("slow");
                        
                    }, 1000);

                    setTimeout(function() {
                       
                        $(".msg-exclusao").hide("slow");
                        
                    }, 3000);


                });
            
            
        
        
        });
        
        
        
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
</script>







