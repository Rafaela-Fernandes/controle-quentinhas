<?php

include("loader.php");
include("conexao.php");
include("banco-vendas.php");

?>
   

   
 
    
<nav class="">
    <div class="nav nav-tabs" id="sub-nav-sistema-venda" role="tablist">
        <a class="nav-item nav-link active" id="" data-toggle="tab" href="#incl-venda" role="tab" aria-controls="nav-home" aria-selected="true">
            <h4><img src="img/adcionar.png" alt="" id="adicionar"> Cadastrar Vendas</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#edit-venda" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h4 ><img src="img/editar.png" alt="" id="editar"> Editar/Visualizar Vendas</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#excl-venda" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/excluir.png" alt="" id="excluir"> Excluir Vendas</h4>
        </a>
    </div>
</nav>
<div class="tab-content" id="">
    
<div class="mt-5"> <?php include("mensagens-despesas.php") ?> </div>
     
    <div class="tab-pane fade show active" id="incl-venda" role="tabpanel" aria-labelledby="nav-home-tab">
              <?php include("vendas-adicionar.php") ?>
        
    </div>
    <div class="tab-pane fade" id="edit-venda" role="tabpanel" aria-labelledby="nav-profile-tab">
        <?php  include("vendas-editar.php")?>
    </div>
    <div class="tab-pane fade" id="excl-venda" role="tabpanel" aria-labelledby="nav-contact-tab">
          <?php  include("vendas-excluir.php") ?>
    </div>
</div>
    

   
    
     <style>

         #sub-nav-sistema-venda a.active{
             border-radius: 0;
             border: none;
             border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
             background: #FFF;
          
         }
         
         #sub-nav-sistema-venda a{
            color: #e4e9ec ;
         }
         
         #sub-nav-sistema2{
             border-bottom: solid  #e4e9ec 1px;
         }
         
         #sub-nav-sistema2 a h4{
             margin-top: 10px;
         }
         
         #sub-nav-sistema-venda a:hover{
          border: none;
          border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
         }
         
    </style> 
    







