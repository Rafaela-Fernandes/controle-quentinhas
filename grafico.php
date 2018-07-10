
    
<nav class="">
    <div class="nav nav-tabs" id="sub-nav-graficos" role="tablist">
        <a class="nav-item nav-link active" id="" data-toggle="tab" href="#grafico-despesas" role="tab" aria-controls="nav-home" aria-selected="true">
            <h4><img src="img/graf-despesa.png" alt="" id="adicionar">Relatório Despesas</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#grafico-vendas" role="tab" aria-controls="nav-profile" aria-selected="false">
              <h4 ><img src="img/graf-vendas.png" alt="" id="editar"> Relatório Vendas</h4>
        </a>
        <a class="nav-item nav-link" id="" data-toggle="tab" href="#grafico-geral" role="tab" aria-controls="nav-contact" aria-selected="false">
                 <h4><img src="img/graf-geral.png" alt="" id="excluir"> Relatório Geral</h4>
        </a>
    </div>
</nav>
<div class="tab-content" id="">
     
    <div class="tab-pane fade show active" id="grafico-despesas" role="tabpanel" aria-labelledby="nav-home-tab">
              
        <?php include("grafico-despesas.php") ?>
    </div>
    <div class="tab-pane fade" id="grafico-vendas" role="tabpanel" aria-labelledby="nav-profile-tab">
     <?php include("grafico-vendas.php") ?>
    </div>
    <div class="tab-pane fade" id="grafico-geral" role="tabpanel" aria-labelledby="nav-contact-tab">
        <?php include("grafico-geral.php") ?>
    </div>
</div>
    

   
    
     <style>

         #sub-nav-graficos a.active{
             border-radius: 0;
             border: none;
             border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
             background: #FFF;
          
         }
         
         #sub-nav-graficos a{
            color: #e4e9ec ;
         }
         
         #sub-nav-graficos{
             border-bottom: solid  #e4e9ec 1px;
         }
         
         #sub-nav-graficos a h4{
             margin-top: 10px;
         }
         
         #sub-nav-graficos a:hover{
          border: none;
          border-bottom: solid  #e4e9ec 1px;
             color: #6c757d;
         }
         
    </style> 