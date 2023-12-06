<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/db/conexao.php';

class pet
{
    public  $id_pet;
    public  $nome;
    public  $tipo;
    public  $raca;
    public  $tamanho;
    public  $genero;
    public  $peso;
    public  $cor;
    public  $img_pet;
    public  $adocao;
    public  $adotado;
    public  $bio;
    public  $id_usuario;


    public function __construct($id_pet = false)
    {
        if ($id_pet) {
            $this->id_pet = $id_pet;
            $this->carregar();
        }
    }


    public function carregar()
    {
        $query = "SELECT * FROM pets WHERE id_pet = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_pet);
        $stmt->execute();
        /* ao encontrar ela cria um array e depois atribui todos os valores restantes ao objeto */
        $id_pet = $stmt->fetch();
        $this->nome = $id_pet['nome'];
        $this->tipo = $id_pet['tipo'];
        $this->raca = $id_pet['raca'];
        $this->tamanho = $id_pet['tamanho'];
        $this->genero = $id_pet['genero'];
        $this->peso = $id_pet['peso'];
        $this->cor = $id_pet['cor'];
        $this->img_pet = $id_pet['img_pet'];
        $this->adocao = $id_pet['adocao'];
        $this->adotado = $id_pet['adotado'];
        $this->bio = $id_pet['bio'];
        $this->id_usuario = $id_pet['id_usuario'];
    }

    public function criar()
    {
        $query = "INSERT INTO pets (nome,tipo,raca,tamanho, genero,peso,cor,img_pet,adocao,adotado,bio,id_usuario) 
            VALUES (:nome ,:tipo,:raca,:tamanho, :genero,:peso,:cor,:img_pet,:adocao,:adotado,:bio,:id_usuario)  ";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':tipo', $this->tipo);
        $stmt->bindValue(':raca', $this->raca);
        $stmt->bindValue(':tamanho', $this->tamanho);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(':peso', $this->peso);
        $stmt->bindValue(':cor', $this->cor);
        $stmt->bindValue(':img_pet', $this->img_pet);
        $stmt->bindValue(':adocao', $this->adocao);
        $stmt->bindValue(':adotado', $this->adotado);
        $stmt->bindValue(':bio', $this->bio);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();
        $this->id_pet = $conexao->lastInsertId();
        return $this->id_pet;
    }

    public static function listar()
    {
        $query = "SELECT * FROM pets";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public static function listarDisponiveis()
    {
        $query = "SELECT * FROM pets WHERE adocao = 1";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public static function donoDoPet($id_usuario)
    {
        $query = "SELECT u.nome, u.img_usuario FROM pets p JOIN usuarios u ON p.id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $id_usuario);
        $stmt->execute();
        $lista = $stmt->fetch();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE pets SET nome = :nome, tipo = :tipo, raca = :raca, tamanho = :tamanho,genero= :genero, peso = :peso,cor=:cor,img_pet=:img_pet,adocao=:adocao,adotado=:adotado,bio=:bio,id_usuario=:id_usuario,  WHERE id_pet = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':tipo', $this->tipo);
        $stmt->bindValue(':raca', $this->raca);
        $stmt->bindValue(':tamanho', $this->tamanho);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(':peso', $this->peso);
        $stmt->bindValue(':cor', $this->cor);
        $stmt->bindValue(':img_pet', $this->img_pet);
        $stmt->bindValue(':adocao', $this->adocao);
        $stmt->bindValue(':adotado', $this->adotado);
        $stmt->bindValue(':bio', $this->bio);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM pets WHERE id_pet = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_pet);
        $stmt->execute();
    }
}
