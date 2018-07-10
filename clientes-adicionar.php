<form action="" method="post" id="form-cliente">

    <h4 class="text-secondary">Dados Pessoais</h4>
    <hr>
    <div class="form-row">
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Nome Completo</span>
            </div>
            <input type="text" class="form-control  form-control-lg" required  name="nome" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" >Telefone</span>
            </div>
             <input type="text" class="form-control  form-control-lg tel" required name="tel" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text " >Celular</span>
            </div>
             <input type="text" class="form-control  form-control-lg cel" required name="cel" autocomplete="off"> 
        </div>
    </div>

    <h4 class="text-secondary mt-5">Endereço</h4>
    <hr>
    <div class="form-row">
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Rua</span>
            </div>
              <input type="text" class="form-control  form-control-lg" name="rua" required autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" >Bairro</span>
            </div>
             <input type="text" class="form-control  form-control-lg" required name="bairro" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Nº</span>
            </div>
              <input type="number" class="form-control  form-control-lg" required  name="numero-casa" autocomplete="off">
        </div>
    </div>

    <div class="form-row">

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text">Complemento</span>
            </div>
            <textarea class="form-control  form-control-lg" aria-label="With textarea" name="complemento"></textarea>
        </div>
    </div>

   <button class="btn bt mt-5 " type="submit">Cadastrar</button>
</form>







<script>

  $("#form-cliente").submit(function(event){
        event.preventDefault();
        
        
        
        $.ajax({
            
            url:"adiciona-cliente.php",
            type:"POST",
            data: $("#form-cliente").serialize(),
            dataType:"html",
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
                  $("#form-cliente input, #form-cliente textarea").val(" ");
            });
            
    })



</script>


<style>

    #form-cliente input{
      text-transform: uppercase;
  
    }
	
</style>




