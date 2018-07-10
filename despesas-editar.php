<!-- Exibir despesas/ alterar excluir -->

<section id="form-editar">
    <form action="" method="post" class="mt-5" id="editar-form">
        <div class="form-row">

            <div class="col-md-5 input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Mês</label>
                </div>
                <select name="selectMes-editar" id="mes2" class="form-control form-control-lg ">
                     <option value="<?= $dataAtual?>" selected>
                        <?= $dataAtual?>
                    </option>
                    <?php 
                     $meses = meses($conexao);
                    foreach($meses as $mes): ?>
                        <option value="<?=  utf8_encode($mes['mes'])?>">
                            <?=  utf8_encode($mes['mes'])?>
                        </option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-5 input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Ano</label>
                </div>
                <select name="selectAno-editar" id="ano2" class="form-control form-control-lg ">
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
                <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Pesquisar" name="editar" id="pesquisar-editar">
            </div>
      </div>
    </form>
    
<section id='exibir-tabela-editar' class='mt-5'>
    
    
  
</section>
  


</section>


<script src="js/jquery.js"></script>
<script>
   
   $(document).ready(function() {
        $("#editar-form").submit(function(event) {
            event.preventDefault();


            $.ajax({
                url: 'http://localhost/controle-quentinhas/lista-despesas-editar.php',
                type: 'POST',
                data: $("#editar-form").serialize(),
                dataType: 'html',
                beforeSend: function() {

                        $('.tela-pesquisar').show();


                },

                success:function(msg){
                
                 setTimeout(function() {
                        $('.tela-pesquisar').hide();
                        $("#exibir-tabela-editar").html(msg);
                        
                    }, 2000);    
                    
                    
             
            }
            })

           

        });  
    });
 
   

    
</script>




