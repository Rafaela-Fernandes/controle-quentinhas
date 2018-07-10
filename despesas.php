<?php

include("conexao.php");
include("banco-despesas.php");
include("loader.php");


setlocale(LC_ALL, "pt_BR", "ptb");
$data = strftime("%B");
$anoAtual = strftime("%Y");
$dataAtual= ucfirst($data);
 
?>







 
    
<nav class="">
    <div class="nav nav-tabs" id="sub-nav-sistema" role="tablist">
        <a class="nav-item nav-link active" id="" data-toggle="tab" href="#incl-despesa" role="tab" aria-controls="nav-home" aria-selected="true">
            <h4><img src="img/adcionar.png" alt="" id="adicionar"> Cadastrar Despesas</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#edit-despesa" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h4 ><img src="img/editar.png" alt="" id="editar"> Editar/Visualizar Despesas</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#excl-despesa" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/excluir.png" alt="" id="excluir"> Excluir Despesas</h4>
        </a>
    </div>
</nav>
<div class="tab-content" id="">
    
     <div class="mt-5"> <?php include("mensagens-despesas.php") ?> </div>
     
    <div class="tab-pane fade show active" id="incl-despesa" role="tabpanel" aria-labelledby="nav-home-tab">
              <?php include("despesas-adicionar.php")?>
        
    </div>
    <div class="tab-pane fade" id="edit-despesa" role="tabpanel" aria-labelledby="nav-profile-tab">
        <?php  include("despesas-editar.php") ?>
    </div>
    <div class="tab-pane fade" id="excl-despesa" role="tabpanel" aria-labelledby="nav-contact-tab">
          <?php include("despesas-excluir.php") ?>
    </div>
</div>
    

   
    
     <style>

         #sub-nav-sistema a.active{
             border-radius: 0;
             border: none;
             border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
             background: #FFF;
          
         }
         
         #sub-nav-sistema a{
            color: #e4e9ec ;
         }
         
         #sub-nav-sistema{
             border-bottom: solid  #e4e9ec 1px;
         }
         
         #sub-nav-sistema a h4{
             margin-top: 10px;
         }
         
         #sub-nav-sistema a:hover{
          border: none;
          border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
         }
         
    </style> 
    
   
    

    
 

 

