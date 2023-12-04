<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/db/conexao.php';

class endereco {
    public  $id;
    public  $cep;
    public  $rua;
    public  $quadra;
    public  $bairro;
    public  $cidade;
    public  $estado;



    public function __construct($id = false)
        {
            if ($id) {
                $this->id = $id;
                $this->carregar();
            }
        }


        public function carregar()
        {
            $query = "SELECT * FROM endereco WHERE id_endereco = :id";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':id', $this->id_endereco);
            $stmt->execute();
            /* ao encontrar ela cria um array e depois atribui todos os valores restantes ao objeto */
            $produto = $stmt->fetch();
            $this->cep = $enderecos ['cep'];
            $this->rua = $enderecos ['rua'];
            $this->quadra = $enderecos ['quadra'];
            $this->bairro = $enderecos ['bairro'];
            $this->cidade = $enderecos ['cidade'];
            $this->estado = $enderecos ['estado'];

        }

        public function criar()
        {
            $query = "INSERT INTO endereco (cep, rua, quadra, bairro, cidade, estado) 
            VALUES  (:cep, :rua, :quadra, :bairro, :cidade, :estado)";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':cep', $this->cep);
            $stmt->bindValue(':rua', $this->rua);
            $stmt->bindValue(':quadra', $this->quadra);
            $stmt->bindValue(':bairro', $this->bairro);
            $stmt->bindValue(':cidade', $this->cidade);
            $stmt->bindValue(':estado', $this->estado);
            $stmt->execute();
            $this->id_endereco = $conexao->lastInsertId();
            return $this->id_endereco;
        }

        public static function listar()
        {
            $query = "SELECT * FROM endereco";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            return $endereco;
        }

        public function editar()
        {
            $query = "UPDATE endereco SET cep = :cep, rua = :rua, quadra = :quadra, bairro = :bairro, cidade = :cidade, estado = :estado WHERE id_endereco = :id";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':cep', $this->cep);
            $stmt->bindValue(':rua', $this->rua);
            $stmt->bindValue(':quadra', $this->quadra);
            $stmt->bindValue(':bairro', $this->bairro);
            $stmt->bindValue(":cidade", $this->cidade);
            $stmt->bindValue(":estado", $this->estado);
            $stmt->execute();
        }

        public function deletar()
        {
            $query = "DELETE FROM endereco WHERE id_endereco = :id";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':id', $this->id_endereco);
            $stmt->execute();
        }
}
