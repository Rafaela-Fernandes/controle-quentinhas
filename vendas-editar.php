
<section id="form-editar-vendas">

<form action=""  method="post" class="mt-5" id="vendas-editar">
  <div class="form-row">
            <div class="col-md-5 input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="" >Data Inicial</label>
                </div>
                <input type="" class="form-control data" name="data_inicial" autocomplete="off">
            </div>
            <div class="col-md-5 input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="">Data Final</label>
                </div>
                <input type="" class="form-control data" name="data_fim" autocomplete="off">
            </div>
        <div class="col-md-2">
            <button class="btn btn-secondary btn-block btn-lg" type="submit">Pesquisar</button>
        </div>
    </div>
</form>



<section id="exibir-tabela-vendas" class="mt-5">
    
    
    
</section>
</section>





<script src="js/jquery.js"></script>



<script>
   
   $(document).ready(function() {
       
      
        $("#vendas-editar").submit(function(event) {
            event.preventDefault();


            $.ajax({
                url: 'http://localhost/controle-quentinhas/lista-vendas-editar.php',
                type: 'POST',
                data: $("#vendas-editar").serialize(),
                dataType: 'html',
                 beforeSend: function() {

                        $('.tela-pesquisar').show();


                },
                 success:function(msg){
                        setTimeout(function() {
                        $('.tela-pesquisar').hide();
                        
                      $("#exibir-tabela-vendas").html(msg);
                        
                    }, 2000);    
                
                
               }
               
            })

           

        });  
    });
 
    


    
</script>








