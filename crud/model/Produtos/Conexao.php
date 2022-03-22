<?php

//Padrão singleton para conexão com o banco de dados

class Conexao{

    private static $instance;

    public static function getConn(){

        if (!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost;dbname=loja','root','');
        endif;
        
        return self::$instance;
    }
}

?>