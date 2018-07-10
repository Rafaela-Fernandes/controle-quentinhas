<?php

include("loader.php");
include("conexao.php");


?>
   

   
 
    
<nav class="">
    <div class="nav nav-tabs" id="sub-nav-fornecedor" role="tablist">
        <a class="nav-item nav-link active" id="" data-toggle="tab" href="#incl-forne" role="tab" aria-controls="nav-home" aria-selected="true">
            <h4><img src="img/add-for.png" alt="" id="adicionar"> Cadastrar Fornecedor</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#edit-forne" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h4 ><img src="img/edit-for.png" alt="" id="editar"> Editar/Visualizar Fornecedor</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#excl-forne" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/exc-for.png" alt="" id="excluir"> Excluir Fornecedor</h4>
        </a>
            <a class="nav-item nav-link" id="" data-toggle="tab" href="#ran-forne" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/prec-ran.png" alt="" id="excluir">Ranking Preços</h4>
        </a>
    </div>
</nav>
<div class="tab-content" id="">
    
<div class="mt-5"> <?php include("mensagens-despesas.php") ?> </div>
     
    <div class="tab-pane fade show active" id="incl-forne" role="tabpanel" aria-labelledby="nav-home-tab">
          <?php include("cadastrar-fornecedor.php") ?>
        
    </div>
    <div class="tab-pane fade" id="edit-forne" role="tabpanel" aria-labelledby="nav-profile-tab">
          <?php include("editar-fornecedor.php") ?>
    </div>
    <div class="tab-pane fade" id="excl-forne" role="tabpanel" aria-labelledby="nav-contact-tab">
        <?php include("excluir-fornecedor.php") ?>
    </div> 
    <div class="tab-pane fade" id="ran-forne" role="tabpanel" aria-labelledby="nav-contact-tab">
        <?php include("ranking.php") ?>
    </div>
</div>
    

   
    
     <style>

         #sub-nav-fornecedor a.active{
             border-radius: 0;
             border: none;
             border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
             background: #FFF;
          
         }
         #sub-nav-fornecedor a{
            color: #e4e9ec ;
         }
         
         #sub-nav-fornecedor{
             border-bottom: solid  #e4e9ec 1px;
         }
         
         #sub-nav-fornecedor a h4{
             margin-top: 10px;
         }
         
         #sub-nav-fornecedor a:hover{
          border: none;
          border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
         }
         
    </style> 
    
