<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Acessar sistema</title>
    

  <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
  <link type="text/css" href="css/index.css" rel="stylesheet">


    
   
</head>

<body>

    <section class="tela-login">
        <div class="row fundo-trasparente">
                
            <div class="col-md-5 m-auto text-center">
              <img src="img/logo.png" alt="">
                <form action="sistema.php
                   " class="p-5 " id="form-login">
                    <div class="form-row mt-2">
                        <div class="input-group  col-md-12 mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="img/usuario.png" alt=""></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" placeholder="Usuário" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="usuario">
                        </div>
                         <div class="input-group  col-md-12 mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="img/senha.png"  alt=""></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="senha">
                        </div>
                        <div class="col-md-12">
                            
                                 <button class="btn btn-block mb-4 btn-lg" type="submit">Entrar</button>
                            
                           
                             <a href="" class="float-right">Esqueci a senha</a>
                             <a href="index.php" class="float-left">Voltar página inicial</a>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </section>


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script  src="js/index.js"></script>


   
    


</body>

</html>