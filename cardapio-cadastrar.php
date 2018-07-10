<section class="row" id="sessao-add-exc">


    <div class="col-md-12">

        <form action="" method="post" class="form-row mb-3" id="form-prato">

            <div class="input-group">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Prato Principal</span>
                </div>
                <input type="text" class="form-control form-control-lg" name="prato" required>
                <button type="submit" class="btn btn-lg ">Cadastrar</button>
            </div>

        </form>

        <form action="" class="form-row mb-3" method="post" id="form-carne">
            <div class="input-group">
             <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tipo Carne</span>
                </div>
              <input type="text" class="form-control form-control-lg"  name="carne" required>
              <button type="submit" class="btn btn-lg ">Cadastrar</button>
            </div>
           
        </form>

        <form action="" class="form-row" method="post" id="form-salada">
           
            <div class="input-group">
              <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tipo de Salada</span>
                </div>
             <input type="text" class="form-control form-control-lg" name="salada" required>
            <button type="submit" class="btn btn-lg ">Cadastrar</button>
            </div>
           



        </form>
    </div>


</section>





<style>
    #sessao-add-exc button {
        background: #1da87f;
        color: #FFF;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;

    }

    #sessao-add-exc input {
        width: 40%;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        box-shadow: none;
    }
    
    #sessao-add-exc span {
        width: 8rem;
    }
</style>






<script src="js/jquery.js"></script>


<script>
    $(document).ready(function() {


        $("#form-prato").submit(function(event) {
            event.preventDefault();

            $.ajax({
                    url: 'http://localhost/controle-quentinhas/add-prato.php',
                    type: 'POST',
                    data: $("#form-prato").serialize(),
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
                    $("input[name=prato]").val("");


                });



        });




        $("#form-carne").submit(function(event) {
            event.preventDefault();

            $.ajax({
                    url: 'http://localhost/controle-quentinhas/add-carne.php',
                    type: 'POST',
                    data: $("#form-carne").serialize(),
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
                    $("input[name=carne]").val(" ");

                });



        });






        $("#form-salada").submit(function(event) {
            event.preventDefault();

            $.ajax({
                    url: 'http://localhost/controle-quentinhas/add-salada.php',
                    type: 'POST',
                    data: $("#form-salada").serialize(),
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
                    $("input[name=salada]").val(" ");

                });


        });


    });
</script>