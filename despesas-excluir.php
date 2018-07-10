<!-- Exibir despesas/ alterar excluir -->

<section id="form-excluir">
    <form action="" method="post" class="mt-5">
        <div class="form-row">
            <div class="col-md-5 input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Mês</label>
                </div>
                <select name="selectMes" id="mes" class="form-control form-control-lg ">
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
                <select name="selectAno" id="ano" class="form-control form-control-lg ">
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
                <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Pesquisar" name="pesquisar" id="pesquisar">
            </div>

        </div>
    </form>


<section id="exibir-tabela" class="mt-5">
    
    
    
</section>

</section>


<script src="js/jquery.js"></script>
<script>
    function exibirTabela(mes,ano){
    var pagina = "lista-despesas-excluir.php"
    $.ajax({
        
            type: 'POST',
            dataType:'html',
            url: pagina,
            data:{mes:mes, ano:ano},
             beforeSend: function() {

                        $('.tela-pesquisar').show();


                },
            success:function(msg){
                
                 setTimeout(function() {
                        $('.tela-pesquisar').hide();
                       $("#exibir-tabela").html(msg);
                        
                    }, 2000);    
                
                
            }
            
    });

}

 $("#pesquisar").click(function(event){
      event.preventDefault();
     exibirTabela($("#mes").val(),$("#ano").val());

 });

 
    


    
</script>