<?php

include_once 'Conexao.php';

class Produto{

    private $idprod, $nome, $cor, $preco;

    public function getIdProd(){
        return $this->idprod;
    }

    public function setIdProd($idprod){
        $this->idprod = $idprod;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }
}

?>