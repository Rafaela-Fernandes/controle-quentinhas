<?php 

include("loader.php");


?>
<form action="" method="post" class="mt-5" id="form-grafico">
  <div class="form-row">
        <div class="col-md-10 input-group">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Ano</label>
            </div>
            <select name="selectAno-grafico" id="" class="form-control form-control-lg ">
                <?php 
                     $anos = anos($conexao);
                    foreach($anos as $ano): ?>
                    <option value="<?= $ano['ano']?>">
                        <?= $ano['ano']?>
                    </option>
                    <?php endforeach; ?>
            </select>

        </div>
        <div class="col-md-2">
                <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Pesquisar" name="editar-grafico" id="pesquisar-grafico">
        </div>

    </div>
</form>

 
<section id="tabela-graficos">
    
    
</section> 


<style>

    .bordas-td td{
          border: solid #eaeef2 2px;
    }
   
   th{
        font-size: 1rem;
    }
  
</style>








<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript" src="js/highcharts-custom.src.js"></script>


<script>
   
    $("#form-grafico").submit(function(event) {
            event.preventDefault();


            $.ajax({
                url: 'http://localhost/controle-quentinhas/listar-grafico-geral.php',
                type: 'POST',
                data: $("#form-grafico").serialize(),
                dataType: 'html',
                beforeSend: function() {

                        $('.tela-pesquisar').show();


                },

                success:function(msg){
                
                 setTimeout(function() {
                        $('.tela-pesquisar').hide();
                        $("#tabela-graficos").html(msg);
                        
                    }, 1000);    
                    
                    
             
            }
            })

           

        });  
  
 
    
    
   
</script>