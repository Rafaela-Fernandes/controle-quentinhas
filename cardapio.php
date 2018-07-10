<?php 

include("conexao.php");
include("banco-cardapio.php");
include("loader.php");
 

?>




   
<nav class="">
    <div class="nav nav-tabs" id="sub-nav-sistema-cardapio" role="tablist">
        <a class="nav-item nav-link active" id="" data-toggle="tab" href="#edit-card" role="tab" aria-controls="nav-home" aria-selected="true">
            <h4><img src="img/add-card.png" alt="" id="adicionar"> Cadastrar Itens Cardápio </h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#add-card" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h4 ><img src="img/edit-card.png" alt="" id="editar"> Editar/Visualizar Cardápio</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#excl-cardapio" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/excl-card.png" alt="" id="excluir"> Excluir Itens Cárdapio</h4>
        </a>
    </div>
</nav>
<div class="tab-content" id="">
    
<div class="mt-5"> <?php include("mensagens-despesas.php") ?> </div>
     
    <div class="tab-pane fade show active" id="edit-card" role="tabpanel" aria-labelledby="nav-home-tab">
         <?php include("cardapio-cadastrar.php") ?>
  
    </div>
    <div class="tab-pane fade" id="add-card" role="tabpanel" aria-labelledby="nav-profile-tab">
      <?php include("cardapio-editar.php") ?>  
    </div>
    <div class="tab-pane fade" id="excl-cardapio" role="tabpanel" aria-labelledby="nav-contact-tab">
      <?php include("cardapio-excluir.php") ?>  
    </div>
</div>
    

   
    
     <style>

         #sub-nav-sistema-cardapio a.active{
             border-radius: 0;
             border: none;
             border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
             background: #FFF;
          
         }
         
         #sub-nav-sistema-cardapio a{
            color: #e4e9ec ;
         }
         
        #sub-nav-sistema-cardapio{
             border-bottom: solid  #e4e9ec 1px;
         }
         
         #sub-nav-sistema-cardapio a h4{
             margin-top: 10px;
         }
         
          #sub-nav-sistema-cardapio a:hover{
          border: none;
          border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
         }
         
    </style> 
    