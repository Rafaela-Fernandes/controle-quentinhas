<!-- Cadastro de despesas -->


<form action="" method="post" class="mt-5 " id="form-adicionar">
    <div class="form-row">
        <div class="col-md-6 input-group">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Mês</label>
            </div>
            <select name="select-mes-cadastro" id="select-mes-cadastro" class="form-control form-control-lg ">
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
        <div class="col-md-6 input-group">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Ano</label>
            </div>
            <select name="select-ano-cadastro" id="" class="form-control form-control-lg ">
                <?php 
                     $anos = anos($conexao);
                    foreach($anos as $ano): ?>
                    <option value="<?= $ano['ano']?>">
                        <?= $ano['ano']?>
                    </option>
                    <?php endforeach; ?>
            </select>

        </div>

    </div>


    <table class="table table-condensed mt-3 tabela-cadastro-item text-center" id="tabela-add-despesas">
        <thead>
            <th> Código</th>
            <th class="d-none">Mês</th>
            <th class="d-none">Ano</th>
            <th>Item</th>
            <th>Custo Mensal</th>

        </thead>
        <tbody class="border border-0 ">
            <?php
            
              $item = listarItem($conexao);
              foreach($item as $it):
            ?>
                <tr>

                    <td>
                        <input type="text" class="form-control cod" name="cod[]" value="<?=$it['cod_item'] ?>" disabled>
                    </td>
                    <td class="d-none">
                        <input type="text" class="form-control mes" name="mes" value="">
                    </td>
                    <td class="d-none">
                        <input type="text" class="form-control ano " name="ano" value="">
                    </td>
                    <td>
                        <input type="text" class="form-control item " name="item[]" value="<?=$it['nome_item'] ?>" disabled>
                    </td>
                    <td>
                        <input type="" class="form-control  valor input-valor" name="valor[]" required>
                    </td>
                </tr>


                <?php endforeach; ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        </tbody>

    </table>
    <button type="submit" class="btn bt mb-5">Cadastrar</button>
   <img src="img/add-item.png" alt="" class=" mb-5  float-left pr-2" id="add-item-des">
   <img src="img/cancel.png" alt="" class=" mb-5  float-left pr-2" id="can-item-des">
   
</form>
  

<form action="" method="post" id="form-desp-item">    
<div class="input-group mb-5"  style="display:none" id="adicionar-item-desp">
  
   <input type="number" class="form-control" name="cod_item" placeholder="Código">
  <input type="text" class="form-control" name="nome_item"  placeholder="Item">
  <div class="input-group-prepend">
    <button class="btn bt" type="submit" style="width:10rem">Cadastrar</button>
  </div>
</div>   
</form>

<form action="" method="post" id="form-exc-item">    
<div class="input-group mb-5"  style="display:none" id="adicionar-exc-desp">
  
   <input type="number" class="form-control" name="cod_item" placeholder="Código">
 
  <div class="input-group-prepend">
    <button class="btn bt excluir-desp" type="submit" style="width:10rem;background:#ff7272">Excluir</button>
  </div>
</div>   
</form>

<script src="js/jquery.js"></script>
<script src="js/jquery.maskMoney.js"></script>

<script>
    $(document).ready(function() {
        $(".valor").maskMoney();

        
         $("#add-item-des").click(function(){
             $("#adicionar-item-desp").toggle("slow");
         });
        
         $("#can-item-des").click(function(){
             $("#adicionar-exc-desp").toggle("slow");
         });
        
        $("#form-adicionar").submit(function(event) {
            event.preventDefault();

            $(".cod, .item").removeAttr("disabled");

            $.ajax({
                url: 'http://localhost/controle-quentinhas/adiciona-despesa.php',
                type: 'POST',
                data: $("#form-adicionar").serializeArray(),
                dataType: 'html',
                beforeSend: function() {

                    $('.tela-cadastro').show();


                }
            })

            .done(function() {
                setTimeout(function() {
                    $('.tela-cadastro').hide();
                    $(".msg-sucesso").show("slow");
                }, 2000);



                setTimeout(function() {
                    $(".msg-sucesso").hide("slow");

                }, 5000);
                $(".valor").val(" ");
                $(".cod, .item").attr("disabled", "true");
            });



        });
        
        
        
        
          
        $("#form-desp-item").submit(function(event) {
            event.preventDefault();

          

            $.ajax({
                url: 'http://localhost/controle-quentinhas/adicionar-item.php',
                type: 'POST',
                data: $("#form-desp-item").serializeArray(),
                dataType: 'html',
                beforeSend: function() {

                    $('.tela-cadastro').show();


                }
            })

            .done(function() {
                setTimeout(function() {
                    $('.tela-cadastro').hide();
                    $(".msg-sucesso").show("slow");
                }, 2000);



                setTimeout(function() {
                    $(".msg-sucesso").hide("slow");
                          

                }, 5000);
              
            });



        });
        
         $("#form-desp-item input").val(" ");
        
    });
</script>

<style>
    #form-adicionar .cod,
    #form-adicionar .item {
        background: #FFF;
    }
    
    #form-adicionar input:not(.input-valor) {
        border: 0;
    }
    
    .excluir-desp:hover{
        background: #be4949 !important;
    }
</style>