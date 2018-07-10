
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home-Quentinhas</title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/index.css" rel="stylesheet">

</head>
<body>

      

    <header class="logo">
      <nav class="d-flex justify-content-between " id="menu">
            <div class="">
                <img src="img/logo.png" alt="" class="mt-5 ml-3">
            </div>

            <div class="icones d-flex flex-row">
                <a href="#sessao-quem-somos" class="d-block mr-5 scroll" id="quem-somos">
                    <p>Quem Somos</p>
                </a>
                <a href="#sessao-cardapio" class="d-block mr-5 scroll" id="cardapio">
                    <p>Nosso Cardápio</p>
                </a>
                <a href="#rodape" class="d-block mr-5 scroll" id="fale-conosco">
                    <p>Fale Conosco</p>
                </a>
                <a href="tela-login.php" class="d-block mr-5" id="acessar-sistema">
                    <p>Acessar Sistema</p>
                </a>
            </div>

        </nav>
        
       <!-- <div class="row d-flex justify-content-center" >
            <div class="col-md-6" style="background:red; margin-top:12%">
                <h1 class="display-1 text-center" style="color:red"> Venha saborear Nossos Pratos !</h1>
            </div>
            
        </div> -->
   
    </header>
    <div class="container-fluid">
        <section id="sessao-quem-somos">
            <div class="row text-secondary p-5 text-center mt-5">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <h5 class="card-header display-2">Missão</h5>
                        <div class="card-body">
                            <p class="card-text display-4">MJDS tem como pricipal interesse agradar seus clientes, fornecendo deliciosas quentinhas com caradápio variados afim de satisfazer todos os gostos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <h5 class="card-header display-2">Visão</h5>
                        <div class="card-body">
                            <p class="card-text display-4">MJDS tem como pricipal interesse agradar seus clientes, fornecendo deliciosas quentinhas com caradápio variados afim de satisfazer todos os gostos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <h5 class="card-header display-2">Valores</h5>
                        <div class="card-body">
                            <p class="card-text display-4">MJDS tem como pricipal interesse agradar seus clientes, fornecendo deliciosas quentinhas com caradápio variados afim de satisfazer todos os gostos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="sessao-cardapio">
           <?php
             
                setlocale(LC_ALL, "pt_BR", "ptb");
                $data = strftime("%B");
                $anoAtual = strftime("%Y");
                $dataAtual= ucfirst($data);
            
            
            ?>
            <p class="display-3 text-secondary text-center">Cardápio - <?php echo $dataAtual." ".$anoAtual ?></p>
            <hr>
            <nav class="mx-5 mt-5" id="nav-cardapio">
                <div class="nav nav-tabs border border-0" id="nav-tab" role="tablist">
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
                <div class="tab-pane fade show active" id="dia-seg" role="tabpanel" aria-labelledby="nav-home-tab">
                     <?php 
                    
                              include('select-cardapio-seg.php');

                     ?>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Prato Pricipal</th>
                                <th scope="col" class="text-center">Carnes</th>
                                <th scope="col" class="text-center">Saladas</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         
   
   
                                <th scope="row"><?=$pratoseg01 ?></th>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $carneseg01 ?></td>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $saladaseg01 ?></td>
                             
                               
                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoseg02 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoseg03 ?></th>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $carneseg02 ?></td>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $saladaseg02 ?></td>
                                  
                            </tr>

                            <tr>
                                <th scope="row"><?=$pratoseg04 ?></th>

                            </tr>
                             <tr>
                                <th scope="row"><?=$pratoseg05 ?></th>
                               
                               
                            </tr>


                        </tbody>
                    </table>

                </div>
                
                
                
                
                
                <div class="tab-pane fade" id="dia-ter" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <?php 
                    
                              include('select-cardapio-ter.php');

                     ?>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Prato Pricipal</th>
                                <th scope="col" class="text-center">Carnes</th>
                                <th scope="col" class="text-center">Saladas</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         
   
   
                                <th scope="row"><?=$pratoter01 ?></th>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $carneter01 ?></td>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $saladater01 ?></td>
                              
                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoter02 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoter03 ?></th>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $carneter02 ?></td>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $saladater02 ?></td>
                               
                            </tr>

                            <tr>
                                <th scope="row"><?=$pratoter04 ?></th>

                            </tr>  
                               
                            <tr>
                                <th scope="row"><?=$pratoter05 ?></th>

                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="tab-pane fade" id="dia-quar" role="tabpanel" aria-labelledby="nav-profile-tab">
                   <?php 
                    
                              include('select-cardapio-qua.php');

                     ?>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Prato Pricipal</th>
                                <th scope="col" class="text-center">Carnes</th>
                                <th scope="col" class="text-center">Saladas</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         
   
   
                                <th scope="row"><?=$pratoqua01 ?></th>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $carnequa01 ?></td>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $saladaqua01 ?></td>
                              
                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoqua02 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoqua03 ?></th>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $carnequa02 ?></td>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $saladaqua02 ?></td>
                               
                            </tr>

                            <tr>
                                <th scope="row"><?=$pratoqua04 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoqua05 ?></th>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="dia-qui" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <?php 
                    
                              include('select-cardapio-qui.php');

                     ?>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Prato Pricipal</th>
                                <th scope="col" class="text-center">Carnes</th>
                                <th scope="col" class="text-center">Saladas</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         
   
   
                                <th scope="row"><?=$pratoqui01 ?></th>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $carnequi01 ?></td>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $saladaqui01 ?></td>
                              
                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoqua02 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratoqua03 ?></th>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $carnequi02 ?></td>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $saladaqui02 ?></td>
                               
                            </tr>

                            <tr>
                                <th scope="row"><?=$pratoqui04 ?></th>

                            </tr> 
                               
                            <tr>
                                <th scope="row"><?=$pratoqui05 ?></th>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="dia-sex" role="tabpanel" aria-labelledby="nav-profile-tab">
                               <?php 
                    
                              include('select-cardapio-sex.php');

                     ?>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Prato Pricipal</th>
                                <th scope="col" class="text-center">Carnes</th>
                                <th scope="col" class="text-center">Saladas</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         
   
   
                                <th scope="row"><?=$pratosex01 ?></th>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $carnesex01 ?></td>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $saladasex01 ?></td>
                              
                            </tr>
                            <tr>
                                <th scope="row"><?=$pratosex02 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratosex03 ?></th>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $carnesex02 ?></td>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $saladasex02 ?></td>
                               
                            </tr>

                            <tr>
                                <th scope="row"><?=$pratosex04 ?></th>

                            </tr> 
                            <tr>
                                <th scope="row"><?=$pratosex05 ?></th>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="dia-sab" role="tabpanel" aria-labelledby="nav-profile-tab">
                               <?php 
                    
                              include('select-cardapio-sab.php');

                     ?>
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Prato Pricipal</th>
                                <th scope="col" class="text-center">Carnes</th>
                                <th scope="col" class="text-center">Saladas</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         
   
   
                                <th scope="row"><?=$pratosab01 ?></th>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $carnesab01 ?></td>
                                <td rowspan="2" class="bordas-tr align-middle text-center"><?= $saladasab01 ?></td>
                              
                            </tr>
                            <tr>
                                <th scope="row"><?=$pratosab02 ?></th>

                            </tr>
                            <tr>
                                <th scope="row"><?=$pratosab03 ?></th>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $carnesab02 ?></td>
                                <td rowspan="3" class="bordas-tr align-middle text-center"><?= $saladasab02 ?></td>
                               
                            </tr>

                            <tr>
                                <th scope="row"><?=$pratosab04 ?></th>

                            </tr>
                               <tr>
                                <th scope="row"><?=$pratosab05 ?></th>

                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </section>

        
    <div class="row mx-3">
	  <div class="col-md-12 p-5">
	  <a href="#" class="voltar-ao-topo"><img src="img/top.png" alt=""></a>
	   </div>
	</div>


        <footer class="p-5 row" id="rodape">
           
            <div class="col-md-6 teste p-5">

                <ul class="list-unstyled ">
                    <li class="media">
                        <img class="mr-3" src="img/tel.png" alt="">
                        <div class="media-body">
                            <p class="text-white">(71) 3056-9896 / (71) 99140-8556</p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3" src="img/endereco.png" alt="">
                        <div class="media-body">
                            <p class="text-white">Rua Flores Bela - Bairro Concordia Nª 35 - Camaçari BA </p>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="img/email.png" alt="">
                        <div class="media-body">
                            <p class="text-white"> mariajose@gmail.com
                        </div>
                    </li>
                    
                   
                </ul>
                  
              <div class="mt-5">
                      <a href="#"><img src="img/face.png" alt="" ></a>
                      <a href="#"><img src="img/ins.png" alt="" class="ml-2"></a>
                      <a href="#"><img src="img/twi.png" alt="" class="ml-2"></a>
                     <a href="#"><img src="img/you.png" alt="" class="ml-2"> </a>
               </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end teste p-5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15568.343539985992!2d-38.3377598657959!3d-12.70781720646839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71669c2e35fdfc3%3A0x3983499a3a501b2e!2sBairro+dos+46%2C+Cama%C3%A7ari+-+BA%2C+42803-290!5e0!3m2!1spt-BR!2sbr!4v1523763999982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               
            </div>


        </footer>
    </div>
    
    
    
    
    

    
    
    
    
    
    
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
     <script src="js/index.js"></script>


<script>
$(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
   });
    
    
    
    
    
    
    $(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$('.voltar-ao-topo').fadeIn('fade');
		} else {
			$('.voltar-ao-topo').fadeOut('fade');
		}
	});

	// Faz animação para subir
	$('.voltar-ao-topo').click(function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 300);

		$('.tabela-esconder').hide('slow');
	});
    
});
</script>



</body>

</html>