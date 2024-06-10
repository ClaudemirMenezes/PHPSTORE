<?php

namespace core\controladores;

use core\classes\Store;

class Main{
    
    public function index(){

        Store:: Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',

        ]);
    }

    public function novo_cliente(){
         
        // verifica se já existe sessão aberta
        if(Store::clienteLogado()){
            $this->index();
            return;
        }
        //$_SESSION['cliente'] = 1;
        
        // apresenta a página para criar um novo cliente
        Store:: Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',

        ]);
    }

    public function criar_cliente(){
        
        // verificar se já exite sessao
        if(Store::clienteLogado()){
            $this->index();
            return;
        } 
        // verica se houve submissão de um formulario
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->index();
            return;
        }

        if($_POST['text_senha_1'] !== $_POST['text_senha_2']){
            
        }
        
        // criação do novo clinete
        /*
            1. verificar se o pass está ingual (pass_1 == pass_2)
            2. base dados - já existe outra conta com o mesmo email??
            3. registro 
        */
         
    }

    public function loja(){
        
        // apresenta a página da loja
        Store:: Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',

        ]);

        
    }

    public function carrinho(){
        
        // apresenta a página da loja
        Store:: Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',

        ]);

        
    }
}
    
