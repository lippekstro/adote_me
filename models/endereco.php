<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/db/conexao.php';

class endereco {
    public  $id_endereco;
    public  $cep;
    public  $rua;
    public  $quadra;
    public  $bairro;
    public  $cidade;
    public  $estado;
    public  $id_usuario;

    public function __construct( $id_endereco = false)
        {
            if ($id_endereco) {
                $this->id_endereco = $id_endereco;
                $this->carregar();
            }
        }


        public function carregar()
        {
            $query = "SELECT * FROM enderecos WHERE id_endereco = :id";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':id', $this->id_endereco);
            $stmt->execute();
            /* ao encontrar ela cria um array e depois atribui todos os valores restantes ao objeto */
            $id_endereco = $stmt->fetch();
            $this->cep = $id_endereco ['cep'];
            $this->rua = $id_endereco ['rua'];
            $this->quadra = $id_endereco ['quadra'];
            $this->bairro = $id_endereco ['bairro'];
            $this->cidade = $id_endereco ['cidade'];
            $this->estado = $id_endereco ['estado'];

        }

        public function criar()
        {
            $query = "INSERT INTO enderecos (cep, rua, quadra, bairro, cidade, estado) 
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
            $query = "SELECT * FROM enderecos";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            return $lista;
        }

        public function editar()
        {
            $query = "UPDATE enderecos SET cep = :cep, rua = :rua, quadra = :quadra, bairro = :bairro, cidade = :cidade, estado = :estado WHERE id_endereco = :id";
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
            $query = "DELETE FROM enderecos WHERE id_endereco = :id";
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':id', $this->id_endereco);
            $stmt->execute();
        }
}
