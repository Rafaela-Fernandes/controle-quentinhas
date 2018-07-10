<form action="" method="post" id="form-fornecedor">

    <h4 class="text-secondary">Dados do Fornecedor</h4>
    <hr>
    <div class="form-row">
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Nome Fornecedor</span>
            </div>
            <input type="text" class="form-control  form-control-lg" required name="nome-for" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">CNPJ</span>
            </div>
            <input type="number" class="form-control  form-control-lg" required name="cnpj" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Tel-01</span>
            </div>
            <input type="text" class="form-control  form-control-lg tel" required name="tel" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-2">
            <div class="input-group-prepend">
                <span class="input-group-text ">Tel-02</span>
            </div>
            <input type="text" class="form-control  form-control-lg cel" required name="cel" autocomplete="off">
        </div>
    </div>
      <div class="form-row">
        <div class="input-group mb-3 col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="email" class="form-control  form-control-lg" required name="email" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-6">
            <div class="input-group-prepend">
                <span class="input-group-text">Site</span>
            </div>
            <input type="text" class="form-control  form-control-lg" required name="site" autocomplete="off">
        </div>
    </div>
   
   
    <h4 class="text-secondary mt-4">Informação do Produto</h4>
    <hr>
    <div class="form-row">
       <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Categoria</span>
            </div>
            <select name="cidade" id="" class="form-control form-control-lg">
                <option value="">Alimentos</option>
                <option value="">Carnes</option>
                <option value="">Embalagem</option>
            </select>
        </div>
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Nome Produto</span>
            </div>
            <input type="text" class="form-control  form-control-lg" required name="prod" autocomplete="off">
        </div>
       
        <div class="input-group mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Valor</span>
            </div>
            <input type="number" class="form-control  form-control-lg tel" required name="valor" autocomplete="off">
        </div>
    </div>
   
   
   
  

    <h4 class="text-secondary mt-4">Endereço</h4>
    <hr>
    <div class="form-row">
       <div class="input-group mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Cidade</span>
            </div>
            <select name="cidade" id="" class="form-control form-control-lg">
                <option value=""></option>
            </select>
        </div>
        <div class="input-group mb-3 col-md-2">
            <div class="input-group-prepend">
                <span class="input-group-text">UF</span>
            </div>
            <select name="uf" id="" class="form-control form-control-lg">
                <option value=""></option>
            </select>
        </div>
        <div class="input-group mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Rua</span>
            </div>
            <input type="text" class="form-control  form-control-lg" name="rua-for" required autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Bairro</span>
            </div>
            <input type="text" class="form-control  form-control-lg" required name="bairro-for" autocomplete="off">
        </div>
        <div class="input-group mb-3 col-md-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Nº</span>
            </div>
            <input type="number" class="form-control  form-control-lg" required name="numero-for" autocomplete="off">
        </div>

    </div>

    <div class="form-row">

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text">Complemento</span>
            </div>
            <textarea class="form-control  form-control-lg" aria-label="With textarea" name="complemento-for"></textarea>
        </div>
    </div>

    <button class="btn bt mt-3  mb-5" type="submit">Salvar</button>
</form>