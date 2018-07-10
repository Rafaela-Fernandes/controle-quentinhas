<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home-Quentinhas</title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/sistema.css" rel="stylesheet">
    <link type="text/css" href="css/datatables.css" rel="stylesheet">
    <link type="text/css" href="css/jquery-ui.min.css" rel="stylesheet">
     <link type="text/css" href="css/jasny-bootstrap.min.css" rel="stylesheet">



</head>

<body>
 
  
    <header>
        <nav class="d-flex justify-content-between bg-dark">
            <div class="">
                <img src="img/logo-sistema.png" alt="" class="ml-3 mt-2">
                <p class="text-white ml-3 d-inline" style="font-size:1.3rem">RAFAELA DA SILVA FERNANDES</p>
            </div>

            <div class="icones-sistema d-flex flex-row">
                <a href="" class="d-block  p-5" id="ajuda">
               
                </a>
                <a href="" class="d-block p-5" id="configuracao">
                   
                </a>
                <a href="index.php" class="d-block p-5" id="sair">
                   
                </a>
                <link type="text/css" href="css/sistema.css" rel="stylesheet">

            </div>

        </nav>

    </header>
    <div class="p-2" style="background:#f98926"></div>
    <div class="container-fluid">
        <section id="sessao-cardapio">


            <nav class="mx-5 text-center" id="nav-sistema" style="margin-top: 5%">
                <div class="nav nav-tabs border border-0" id="nav-tab-sistema" role="tablist">
                    <a class="nav-item nav-link active" id="despesas" data-toggle="tab" href="#tab-despesas" role="tab" aria-controls="nav-home" aria-selected="true">
                        
                         <p>Despesas</p>
                    </a>
                    <a class="nav-item nav-link" id="vendas" data-toggle="tab" href="#tab-vendas" role="tab" aria-controls="nav-profile" aria-selected="false">
                      
                        <p>Vendas</p>
                    </a>
                    <a class="nav-item nav-link" id="balanco" data-toggle="tab" href="#tab-relatorios" role="tab" aria-controls="nav-contact" aria-selected="false">
                        
                        <p>Relátorios</p>
                    </a>
                    <a class="nav-item nav-link" id="cardapio" data-toggle="tab" href="#tab-cardapio" role="tab" aria-controls="nav-contact" aria-selected="false">
                       
                        <p>Cardápio</p>
                    </a>

                    <a class="nav-item nav-link" id="cliente" data-toggle="tab" href="#tab-cliente" role="tab" aria-controls="nav-contact" aria-selected="false">
                      
                        <p>Clientes</p>
                    </a>
                    <a class="nav-item nav-link" id="fornecedor" data-toggle="tab" href="#tab-fornecedor" role="tab" aria-controls="nav-contact" aria-selected="false">
                     
                        <p >Fornecedores</p>
                    </a>



                </div>
            </nav>
            <div class="tab-content mx-5 mt-5" id="nav-tabContent-sistema">
                <div class="tab-pane fade show active" id="tab-despesas" role="tabpanel" aria-labelledby="nav-home-tab">

                    <?php include("despesas.php")?>

                </div>
                <div class="tab-pane fade" id="tab-vendas" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php include("vendas.php")?>
                </div>
                <div class="tab-pane fade" id="tab-relatorios" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <?php include("grafico.php")?>
                </div>
                <div class="tab-pane fade" id="tab-cardapio" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php include("cardapio.php")?>
                </div>
                <div class="tab-pane fade" id="tab-cliente" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php include("clientes.php")?>
                </div>
                <div class="tab-pane fade" id="tab-fornecedor" role="tabpanel" aria-labelledby="nav-profile-tab">
                         <?php include("fornecedor.php")?>
                </div>

            </div>
            
        </section>
        
      
          
    </div>

   
   

   
   
   
    <script src="js/jquery.js"></script>
    <script  src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sistema.js"></script>
    <script src="js/jquery.maskMoney.js"></script>
     <script type="text/javascript" src="js/datatables.js"></script>


   <script>
    
       $(".data").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd/mm/yy',
		buttonImageOnly: true,

		dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
		monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
	});
    
    
 $('.data').inputmask({
        mask: '99/99/9999'
    });
    
     $('.cel').inputmask({
        mask: '(99)99999-9999'
    });  
     
         $('.tel').inputmask({
        mask: '(99)9999-9999'
    }); 
            
       
    </script>
   


</body>

</html>