<div class="form-row">

    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">1º</label>
        </div>
        <select class="form-control" name="prato-seg-01">
                                <option value=""></option>
                                <?php 
                                 $pratos = listarPratos($conexao);
                                   foreach($pratos as $pratos): ?>
                                     <option value="<?= utf8_encode($pratos['pratos'])?>"> 
                                     <?= utf8_encode($pratos['pratos'])?>
                                     </option>
                                <?php endforeach;   ?>                                         
                        </select>
    </div>
    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">1º</label>
        </div>
        <select class="form-control" name="carne-seg-01">
                                <option value=""></option>
                                <?php 
                                 $carnes  = listarCarnes($conexao);
                                   foreach($carnes as $carnes ): ?>
                                     <option value="<?= $carnes['carnes']?>"> 
                                     <?= utf8_encode($carnes['carnes'])?>
                                     </option>
                                 <?php endforeach;?> 
                
                           </select>
    </div>
    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">1º</label>
        </div>
        <select class="form-control" name="salada-seg-01">
                                <option value=""></option>
                                <?php 
                                 $saladas= listarSaladas($conexao);
                                   foreach($saladas as $saladas ): ?>
                                     <option value="<?= $saladas['saladas']?>"> 
                                     <?= utf8_encode($saladas['saladas'])?>
                                     </option>
                                 <?php endforeach;?>                       
                                      
                         </select>
    </div>
</div>


<div class="form-row">

    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">2º</label>
        </div>
        <select class="form-control" name="prato-seg-02">
                                <option value=""></option>
                                <?php 
                                 $pratos = listarPratos($conexao);
                                   foreach($pratos as $pratos): ?>
                                     <option value="<?= utf8_encode($pratos['pratos'])?>"> 
                                     <?= utf8_encode($pratos['pratos'])?>
                                     </option>
                                <?php endforeach;   ?>                                         
                        </select>
    </div>
    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">2º</label>
        </div>
        <select class="form-control" name="carne-seg-02">
                                <option value=""></option>
                                <?php 
                                 $carnes  = listarCarnes($conexao);
                                   foreach($carnes as $carnes ): ?>
                                     <option value="<?= $carnes['carnes']?>"> 
                                     <?= utf8_encode($carnes['carnes'])?>
                                     </option>
                                 <?php endforeach;?> 
                
                           </select>
    </div>
    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">2º</label>
        </div>
        <select class="form-control" name="salada-seg-02">
                                <option value=""></option>
                                <?php 
                                 $saladas= listarSaladas($conexao);
                                   foreach($saladas as $saladas ): ?>
                                     <option value="<?= $saladas['saladas']?>"> 
                                     <?= utf8_encode($saladas['saladas'])?>
                                     </option>
                                 <?php endforeach;?>                       
                                      
                         </select>
    </div>
</div>
<div class="form-row">
   
    <div class="col-md-4  input-group mb-4">
         <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">3º</label>
    </div>
        <select class="form-control" name="prato-seg-03">
                                <option value=""></option>
                                <?php 
                                 $pratos = listarPratos($conexao);
                                   foreach($pratos as $pratos): ?>
                                     <option value="<?= utf8_encode($pratos['pratos'])?>"> 
                                     <?= utf8_encode($pratos['pratos'])?>
                                     </option>
                                <?php endforeach;   ?>                                         
                        </select>
    </div>

</div>
<div class="form-row">

    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">4º</label>
        </div>
        <select class="form-control" name="prato-seg-04">
                                <option value=""></option>
                                <?php 
                                 $pratos = listarPratos($conexao);
                                   foreach($pratos as $pratos): ?>
                                     <option value="<?= utf8_encode($pratos['pratos'])?>"> 
                                     <?= utf8_encode($pratos['pratos'])?>
                                     </option>
                                <?php endforeach;   ?>                                         
                        </select>
    </div>

</div>




<div class="form-row">

    <div class="col-md-4  input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="">5º</label>
        </div>
        <select class="form-control" name="prato-seg-05">
                                <option value=""></option>
                                <?php 
                                 $pratos = listarPratos($conexao);
                                   foreach($pratos as $pratos): ?>
                                     <option value="<?= utf8_encode($pratos['pratos'])?>"> 
                                     <?= utf8_encode($pratos['pratos'])?>
                                     </option>
                                <?php endforeach;   ?>                                         
                        </select>
    </div>

</div>