



<?php 


include("conexao.php");


  function listaCardapio($conexao){
      
      $listas = array();    
      $query = "
SELECT id as 'id',pratos AS 'item', categoria_pratos as 'categorias','prato_principal'AS tabela

  FROM prato_principal

 

 UNION ALL

 

SELECT id,carnes, categoria_carne,  'carne'

  FROM carne
  
  
   UNION ALL
  
  SELECT id,saladas, categoria,  'salada'

  FROM salada
"; 
     $resultado = mysqli_query($conexao,$query);

    while($lista = mysqli_fetch_assoc($resultado)):
    
      array_push($listas, $lista);

        
    endwhile;
    
    
    
    return $listas;
    
  }  

    

    
    
  


?>



 <div id="resp"></div>

<div class="col-md-12">
    <table class="table table-condensed mt-3  tabela-vendas-item tabela ">
    <thead class="">
        
        <th class="">Categoria</th>
        <th class="">Item</th>
        <th class="text-center">Opção</th>


    </thead>
    <tbody class="">
       
       <?php   
        
          $lista = listaCardapio($conexao);
           foreach($lista  as $lista):
        ?>
        <tr class="">
            
            <td>
              <?= $lista['categorias'] ?>
            </td>
          
             <td>
                <?= $lista['item'] ?> 
             </td>
            <td class="text-center">
               
             
               
                 <!--<a href="excluir-item-cardapio.php?id=<?= $lista['id'] ?>&tabela=<?= $lista['tabela'] ?>" id="remove-card" class="img-lixeira btn" onclick="remove(this)">teste</a>-->
                 <a href="excluir-item-cardapio.php" data-id="<?= $lista['id'] ?>" data-tabela="<?= $lista['tabela'] ?>" id="remove-card" class="img-lixeira btn" onclick="remove(this)">teste</a>
            </td>

        </tr>
      <?php endforeach;?>
     
           
    </tbody>

</table>

</div>







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




<script>
    $(document).ready(function() {
        
       $("#remove-card").on('click',function(e){
           
            e.preventDefault();
           
                 //var nome = $(this).attr('href');
                 //var id = nome.slice(29,30);
           
                //var tabela = nome.slice(38);
           
             var id = $(this).attr('data-id');
             var tabela = $(this).attr('data-tabela');
                  $.ajax({
                    url: 'http://localhost/controle-quentinhas/excluir-item-cardapio.php',
                    type: 'GET',
                    data: {id:id, tabela:tabela},
                    dataType: 'html',
                     
                    
                })
            
                .done(function() {
                    setTimeout(function() {
                        $('.tela-excluir').hide();
                        $(".msg-exclusao").show("slow");
                        
                    }, 1000);

                    setTimeout(function() {
                       
                        $(".msg-exclusao").hide("slow");
                        
                    }, 3000);


                })
            
           
              .fail(function(jqXHR, textStatus, msg){
                        alert(msg);
             });
           
       })
        
        
        
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







