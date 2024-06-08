<?php 

namespace core\classes;

use Exception;

class Store {
/*  */
    public static function Layout($estruturas, $dados = null){
        
        // verificar se estruturas é um array
        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas inválida");
        }

        // variaveis
        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        // apresetar as views da aplicação
        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        }
    }
}