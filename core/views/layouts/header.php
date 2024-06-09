<?php 

use core\classes\Store;
//$_SESSION['cliente'] = 1; // teste se a cliente logado na pagina.
?>

<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3">
            <a href="?a=inicio">
                <h3><h><?= APP_NAME ?></h3>
            </a>    
        </div>
        <div class="col-6 text-end p-3">

            <a href="?a=inicio">Inicio</a>
            <a href="?a=loja">Loja</a>

            <!-- verificar se existe cliente na sesssao-->
            <?php if(Store::clienteLogado()):?>
                
                <a href="">Entrar</a>
                <a href="">Logout</a>

                <!-- Logout  -->
                <!-- Entra na minha conta -->

            <?php else:?>

                <a href="">Login</a>
                <a href="">criar conta</a>


                <!-- Login -->
                <!-- Criar conta -->
            <?php endif;?>


            <a href="?a=carrinho"><i class="fa-solid fa-cart-shopping"></i></a>

            <span class="badge bg-warning"></span>
        </div>
    </div>
</div>