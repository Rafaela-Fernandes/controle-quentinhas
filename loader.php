<div class="tela-cadastro" style="display:none">
    <div id="loader">
        <div>
            <img src="img/loader.gif" alt="" >
       <p class="text-white" id="p-loader-cadastrar">Cadastrando...</p>
        </div>
    </div>
    

</div>

<div class="tela-excluir" style="display:none">
   <div id="loader">
       <div>
           <img src="img/loader.gif" alt="" >
           <p class="text-white" id="p-loader-excluir">Excluindo...</p>
       </div>
   </div>
    

</div>

<div class="tela-editar" style="display:none">
    <div id="loader">
        <div>
            <img src="img/loader.gif" alt="">
            <p class="text-white" id="p-loader-editar">Alterando...</p>
        </div>
    </div>
</div>



<div class="tela-pesquisar" style="display:none">
    <div id="loader">
        <div>
            <img src="img/loader.gif" alt="" class="ml-5">
            <p class="text-white d-block mt-5" id="p-loader-pesquisar">Pesquisando...</p>
        </div>
    </div>

</div>



<style>
    .tela-cadastro,
    .tela-excluir,
    .tela-editar,
    .tela-pesquisar {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1049;
        display: none;
        overflow: hidden;
        outline: 0;
        background: rgba(23, 19, 19, 0.79);

    }

    #loader {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
        display: flex;
        align-items: center;
        min-height: calc(100% - (0.5rem * 2));
    }

    #loader div {
        margin: auto
    }


    #p-loader-cadastrar,
    #p-loader-excluir,
    #p-loader-editar,
    #p-loader-pesquisar {
        font-size: 2rem;
        text-align: center;
    }
</style>