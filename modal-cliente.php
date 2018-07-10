<?php 
      include("conexao.php");
 $id =  $_POST['id'];



function exibirclienteModal($conexao,$id){
    
$modal_clientes = array();    
$query = "select* from cliente where id = {$id}";
    
$resultado = mysqli_query($conexao,$query);

    while($modal_cliente = mysqli_fetch_assoc($resultado)):
    
      array_push($modal_clientes, $modal_cliente);
    
    endwhile;
    return $modal_clientes;
    
    
}




?>




<!-- Modal -->
<div class="modal fade" id="modal-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" id="modal-ajustar">
        <div class="modal-content" id="modal-edit-cliente">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalCenterTitle">Dados do Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <div class="bg-dark loader-div" style="display:none">
                    <img src="img/loader.gif" alt="" class="loader-img">
                </div>


                <div class="alert alert-success alert-dismissible fade show msg-sucesso-cliente" role="alert" style="display:none" id="">
                    <strong>Alterarção!</strong> efetuado com sucesso.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                </div>
                <form action="" method="post" id="form-alterar-modal" class="mt-5">

                    <h4 class="text-secondary">Dados Pessoais</h4>
                    <hr>
                    <?php 
        
           $modal_clientes = exibirclienteModal($conexao,$id);
        
           foreach($modal_clientes as $m):
        ?>

                    <input type="hidden" name="id" value="<?= $m['id'] ?>" class="form-control">
                    <div class="form-row">
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nome Completo</span>
                            </div>

                            <input type="text" class="form-control" name="nome" value="<?= $m['nome'] ?>">
                        </div>
                        <div class="input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Telefone</span>
                            </div>
                            <input type="text" class="form-control" name="tel" value="<?= $m['telefone'] ?>">
                        </div>
                        <div class="input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Celular</span>
                            </div>
                            <input type="text" class="form-control" name="cel" value="<?= $m['celular'] ?>">
                        </div>
                    </div>



                    <h4 class="text-secondary mt-3">Endereço</h4>
                    <hr>
                    <div class="form-row">
                        <div class="input-group mb-3 col-md-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rua</span>
                            </div>
                            <input type="text" class="form-control" name="rua" value="<?= $m['rua'] ?>">
                        </div>
                        <div class="input-group mb-3 col-md-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Bairro</span>
                            </div>
                            <input type="text" class="form-control" name="bairro" value="<?= $m['bairro'] ?>">
                        </div>
                        <div class="input-group mb-3 col-md-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nº</span>
                            </div>
                            <input type="number" class="form-control" name="numero-casa" value="<?= $m['numero'] ?>">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Complemento</span>
                            </div>
                            <textarea class="form-control" aria-label="With textarea" name="complemento"> <?= $m['descricao'] ?> </textarea>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:10%">Cancelar</button>
                    <button class="btn bt  " type="submit">alterar</button>
                    </div>
                    
                </form>



            </div>
         
        </div>
    </div>
</div>


<style>
    .loader-div {
        z-index: 100;
        position: absolute;
        width: 97.2%;
        height: 100%;
    }



    .loader-img {
        position: inherit;
        left: 45%;
        top: 40%;
    }
</style>


<script>
    
    $("input").attr("autocomplete","off");
    $("#form-alterar-modal").submit(function(event) {
        event.preventDefault();



        $.ajax({

                url: "altera-cliente.php",
                type: "POST",
                data: $("#form-alterar-modal").serialize(),
                dataType: "html",
                beforeSend: function() {

                    $('.loader-div').show();


                }

            })


            .done(function() {
                setTimeout(function() {
                    $('.loader-div').hide();
                    $(".msg-sucesso-cliente").show("slow");
                }, 2000);



                setTimeout(function() {
                    $(".msg-sucesso-cliente").hide("slow");

                }, 5000);

            });

    })
</script>