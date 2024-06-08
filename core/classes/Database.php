<?php

namespace core\classes;

use Exception;
use PDO;
use PDOException;

class Database{

    private $ligacao;

    private function ligar(){
       
        $this->ligacao = new PDO(
            'mysql:'.
            'host:'.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE.';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)

        );

        //debug
        $this->ligacao->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);
    }

    private function desligar(){
        $this->ligacao = null;
    }

    public function select($sql, $parametros = null){

        // verifica se é uma instrução SELECT
        if(!preg_match("/^SELECT/i", $sql)){
            throw new Exception('Base de dados  - Não é uma instrução SELECT.');
           // die('Base de dados  - Não é uma instrução SELECT.');
        }

        //executa função de pesquisa do SQL
        $this->ligar();

        $resultados = null;

        try {
            // comunicação com a bd
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchALL(PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchALL(PDO::FETCH_CLASS);
            }
        } catch (PDOException $e) {
            // caso exista erro
            return false;

        }

        $this->desligar();

        // devolver ps resuçtados obtidos
        return$resultados;
    }
    
    public function insert($sql, $parametros = null){

        // verifica se é uma instrução SELECT
        if(!preg_match("/^INSERT/i", $sql)){
            throw new Exception('Base de dados  - Não é uma instrução INSERT.');
           // die('Base de dados  - Não é uma instrução SELECT.');
        }

        //executa função de pesquisa do SQL
        $this->ligar();

        //comunicação com a bd
        try {
            // comunicação com a bd
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);

            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();            }
        } catch (PDOException $e) {
            // caso exista erro
            return false;

        }

        $this->desligar();

    }

    public function update($sql, $parametros = null){

        // verifica se é uma instrução UPDATE
        if(!preg_match("/^UPDATE/i", $sql)){
            throw new Exception('Base de dados  - Não é uma instrução UPDATE.');
           // die('Base de dados  - Não é uma instrução SELECT.');
        }

        //executa função de pesquisa do SQL
        $this->ligar();

        //comunicação com a bd
        try {
            // comunicação com a bd
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);

            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();            }
        } catch (PDOException $e) {
            // caso exista erro
            return false;

        }

        $this->desligar();

    }

    public function delete($sql, $parametros = null){

        // verifica se é uma instrução DELETE
        if(!preg_match("/^DELETE/i", $sql)){
            throw new Exception('Base de dados  - Não é uma instrução DELETE.');
           // die('Base de dados  - Não é uma instrução SELECT.');
        }

        //executa função de pesquisa do SQL
        $this->ligar();

        //comunicação com a bd
        try {
            // comunicação com a bd
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);

            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();            }
        } catch (PDOException $e) {
            // caso exista erro
            return false;

        }

        $this->desligar();

    }


    public function statement($sql, $parametros = null){

        // verifica se é uma instrução diferente das anteriores
        if(preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $sql)){
            throw new Exception('Base de dados  - Intrução Invalida.');
           // die('Base de dados  - Não é uma instrução SELECT.');
        }

        //executa função de pesquisa do SQL
        $this->ligar();

        //comunicação com a bd
        try {
            // comunicação com a bd
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);

            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();            }
        } catch (PDOException $e) {
            // caso exista erro
            return false;

        }

        $this->desligar();

    }


    
}
    
