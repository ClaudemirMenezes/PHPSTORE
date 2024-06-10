<?php 


use core\classes\Store;

?>

<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3">
            <a href="?a=inicio">
                <h3><h><?= APP_NAME ?></h3>
            </a>    
        </div>
        <div class="col-6 text-end p-3">

            <a href="?a=inicio" class="nav-item">Inicio</a>
            <a href="?a=loja" class="nav-item">Loja</a>

            <!-- verificar se existe cliente na sesssao-->
            <?php if(Store::clienteLogado()):?>
                
                <a href="?a=entrar" class="nav-item">Entrar</a>
                <a href="?a=logout" class="nav-item">Logout</a>
                <!-- Logout  -->
                <!-- Entra na minha conta -->
              <?php else:?>

                <a href="?a=login" class="nav-item">Login</a>
                <a href="?a=novo_cliente" class="nav-item">criar conta</a>
                <!-- Login -->
                <!-- Criar conta -->
            <?php endif;?>


            <a href="?a=carrinho"><i class="fa-solid fa-cart-shopping"></i></a>

            <span class="badge bg-warning">10</span>
        </div>
    </div>
</div>