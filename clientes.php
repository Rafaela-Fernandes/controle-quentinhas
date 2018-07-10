<?php

include("loader.php");


?>
   
    
<nav class="">
    <div class="nav nav-tabs" id="sub-nav-sistema-cliente" role="tablist">
        <a class="nav-item nav-link active" id="" data-toggle="tab" href="#incl-cliente" role="tab" aria-controls="nav-home" aria-selected="true">
            <h4><img src="img/adcionar.png" alt="" id="adicionar"> Cadastrar Cliente</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#edit-cliente" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h4 ><img src="img/editar.png" alt="" id="editar"> Editar/Visualizar Cliente</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#excl-cliente" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/excluir.png" alt="" id="excluir"> Excluir cliente</h4>
        </a>
    </div>
</nav>
<div class="tab-content" id="">
    
<div class="mt-5"> <?php include("mensagens-despesas.php") ?> </div>
     
    <div class="tab-pane fade show active" id="incl-cliente" role="tabpanel" aria-labelledby="nav-home-tab">
              <?php include("clientes-adicionar.php") ?>
        
    </div>
    <div class="tab-pane fade" id="edit-cliente" role="tabpanel" aria-labelledby="nav-profile-tab">
         <?php include("exibir-clientes.php") ?>
    </div>
    <div class="tab-pane fade" id="excl-cliente" role="tabpanel" aria-labelledby="nav-contact-tab">
           <?php include("lista-cliente-excluir.php") ?>
    </div>
</div>
    

   
    
     <style>

         #sub-nav-sistema-cliente a.active{
             border-radius: 0;
             border: none;
             border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
             background: #FFF;
          
         }
         
         #sub-nav-sistema-cliente a{
            color: #e4e9ec ;
         }
         
         #sub-nav-sistema2{
             border-bottom: solid  #e4e9ec 1px;
         }
         
         #sub-nav-sistema2 a h4{
             margin-top: 10px;
         }
         
         #sub-nav-sistema-cliente a:hover{
          border: none;
          border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
         }
         
    </style> 
    