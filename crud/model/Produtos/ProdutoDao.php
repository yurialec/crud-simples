<?php

require_once 'Produto.php';

//Metodos da classe produto

class ProdutoDao{

    public function create(Produto $p){

        $sql = 'INSERT INTO produtos (NOME, COR, PRECO) VALUES (?,?,?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getCor());
        $stmt->bindValue(3, $p->getPreco());

        $stmt->execute();
    }

    public function update(Produto $p){

        $sql = 'UPDATE produtos SET nome = ?, cor = ?, preco = ? WHERE IDPROD = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getCor());
        $stmt->bindValue(3, $p->getPreco());
        $stmt->bindValue(4, $p->getIdProd());
        $stmt->execute();
    }

    public function read(){

        $sql = 'SELECT * FROM produtos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        else :
            return [];
        endif;
    }

    public function getProdutoById($idprod){
        $sql = "SELECT * FROM produtos WHERE IDPROD = $idprod";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $idprod);
        $stmt->execute();
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);
        return $produto;
    }

    public function delete($idprod){

        $sql = 'DELETE FROM produtos WHERE IDPROD = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $idprod);
        $stmt->execute();
    }

    
}
