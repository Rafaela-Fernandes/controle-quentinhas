<?php 

include("conexao.php");
include("banco-cliente.php");

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

        <?php  $clientes = exibirClientes($conexao); 
               
                foreach($clientes as $c):
              
            ?>
        <tr class="text-center">
            <td>
                <?= $c['nome']?>
            </td>
            <td>
                <?= $c['telefone']?>
            </td>
            <td>
                <?= $c['celular']?>
            </td>
            <td>
                <?= $c['rua']?>
            </td>
            <td>
                <?= $c['bairro'] ?>
            </td>
            <td>
                <?= $c['numero'] ?>
            </td>
            <td>
                <?= $c['descricao'] ?>
            </td>
            <td>
                <button class="btn img-editar" type="submit" name="id[]" value="<?=$c['id'] ?>">alterar</button>
            </td>

        </tr>
     
        <?php endforeach ?>
    
    </tbody>

</table>


<section id="modal">


</section>








<script src="js/jquery.js"></script>
<script>

    $(document).ready(function(){
        function exibirMoldal(id) {
        var pagina = "modal-cliente.php";
        $.ajax({

            type: 'POST',
            dataType: 'html',
            url: pagina,
            data: {
                id: id
            },

            success: function(msg) {


                $("#modal").html(msg);

                $('#modal-cliente').modal('show');


            }

        });

    }

    $("button[name='id[]']").click(function(event) {
        event.preventDefault();

        var id = this.value;
        exibirMoldal(id);

    });
    
    
    
     $('.tabela').DataTable(); 
    });
    
    
    
   
   
</script>






<style>
    
    input[type="search"]{
      position: absolute;
     left: 0;
    }
    
    #modal-edit-cliente {
        position: absolute;
        width: 230%;
        bottom: 15%;
    }


    #modal-ajustar {

        margin-right: 55%;

    }

    .img-editar {
        background-image: url(img/editar-usuario.png) !important;
        background-repeat: no-repeat !important;
        background-color: #FFF !important;
        color: rgba(255, 255, 255, 0) !important;
        cursor: pointer;
        padding: 1rem !important;
        margin-left:  !important;
    }
    
    
    #DataTables_Table_0_info,#DataTables_Table_0_length{
        display: none !important;
    }
    
   
  
</style>

