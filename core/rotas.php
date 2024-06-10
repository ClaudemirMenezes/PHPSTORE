<?php

// coleçoes de rotas
$rotas = [
    'inicio' => 'main@index',
    'loja'  => 'main@loja',
    
    // cliente
    'novo_cliente' => 'main@novo_cliente',
    'criar_cliente' => 'main@criar_cliente',

    'carrinho' => 'main@carrinho',
];

//define acção por defeito
$acao = 'inicio';

//verificar se exixte a ação na query string
if(isset($_GET['a'])){

    //verificar se a ação existe as rotas
    if(!key_exists($_GET['a'], $rotas)){
        $acao = 'inicio';
    } else {
        $acao = $_GET['a'];
    }
}

// trata a definição da rotas
$partes = explode('@',$rotas[$acao]);
$controlador = 'core\\controladores\\'.ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();