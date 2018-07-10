<?php 

setlocale(LC_ALL, "pt_BR", "ptb");
$data = strftime("%B");
$anoAtual = strftime("%Y");
$dataAtual_2= ucfirst($data);
?>




<section id="sessao-cardapio">
    <p class="display-3 text-secondary text-center">Cardápio - Mês <?php echo $dataAtual_2." ".$anoAtual ?> </p>
    <hr>
      <form action="index.php" method="post" id="form-card-geral">
    <nav class="mx-5 mt-5" id="nav-cardapio">
        <div class="nav nav-tabs border border-0" id="nav-tab-cardapio" role="tablist">
            <a class="nav-item nav-link active" id="seg" data-toggle="tab" href="#dia-seg" role="tab" aria-controls="nav-home" aria-selected="true">
                <p>Seg</p>
            </a>
            <a class="nav-item nav-link" id="ter" data-toggle="tab" href="#dia-ter" role="tab" aria-controls="nav-profile" aria-selected="false">
                <p>Ter</p>
            </a>
            <a class="nav-item nav-link" id="quar" data-toggle="tab" href="#dia-quar" role="tab" aria-controls="nav-contact" aria-selected="false">
                <p>Qua</p>
            </a>
            <a class="nav-item nav-link" id="qui" data-toggle="tab" href="#dia-qui" role="tab" aria-controls="nav-contact" aria-selected="false">
                <p>Qui</p>
            </a>
            <a class="nav-item nav-link" id="sex" data-toggle="tab" href="#dia-sex" role="tab" aria-controls="nav-contact" aria-selected="false">
                <p>Sex</p>
            </a>
            <a class="nav-item nav-link" id="sex" data-toggle="tab" href="#dia-sab" role="tab" aria-controls="nav-contact" aria-selected="false">
                <p>Sab</p>
            </a>

        </div>
    </nav>
    <div class="tab-content mx-5 mt-5" id="nav-tabContent">
   
               <div class="row">
                    <div class="col-md-12 d-flex justify-content-between text-secondary mb-4">
                        <h1>Pratos Principais</h1>
                        <h1>Opçoes de Carnes</h1>
                        <h1>Opçoes de Salada</h1>
                    </div>

                </div>
  
        <div class="tab-pane fade show active" id="dia-seg" role="tabpanel" aria-labelledby="nav-home-tab">
         
           
                 <?php include("select-seg.php") ?>

        </div>
        <div class="tab-pane fade" id="dia-ter" role="tabpanel" aria-labelledby="nav-profile-tab">
        
        
           
                 <?php include("select-ter.php") ?>
              

        </div>
        <div class="tab-pane fade" id="dia-quar" role="tabpanel" aria-labelledby="nav-profile-tab">
        
         
           
                 <?php include("select-qua.php") ?>
            

        </div>
        <div class="tab-pane fade" id="dia-qui" role="tabpanel" aria-labelledby="nav-profile-tab">
        
         
           
                 <?php include("select-qui.php") ?>
           
        </div>
        <div class="tab-pane fade" id="dia-sex" role="tabpanel" aria-labelledby="nav-profile-tab">
        
          
           
                 <?php include("select-sex.php") ?>
           
        </div>
        <div class="tab-pane fade" id="dia-sab" role="tabpanel" aria-labelledby="nav-profile-tab">
        
          
           
                 <?php include("select-sab.php") ?>
             
       

        </div>
        
       

    </div>
    <hr>
<button type="submit" class="btn bt ml-5 mt-3 mb-5">Alterar Todos</button>
 </form>
</section>




<script>
    
    
 


</script>