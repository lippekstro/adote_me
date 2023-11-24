<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/db/conexao.php';

class Faq{
    public $id_faq;
    public $faq_pergunta;
    public $faq_resposta;

    public function __construct($id = false)
    {
        if($id){
            $this->id_faq = $id;
            $this->carregar();
        }
    }

    public function carregar(){
        $query = "SELECT * FROM faqs WHERE id_faq = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_faq);
        $stmt->execute();
        $result = $stmt->fetch();
        $this->faq_pergunta = $result['faq_pergunta'];
        $this->faq_resposta = $result['faq_resposta'];
    }

    public function criar(){
        $query = "INSERT INTO faqs (faq_pergunta, faq_resposta) VALUES (:per, :res)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':per', $this->faq_pergunta);
        $stmt->bindValue(':res', $this->faq_resposta);
        $stmt->execute();
    }

    public function atualizar(){
        $query = "UPDATE faqs SET faq_pergunta = :per, faq_resposta = :res WHERE id_faq = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':per', $this->faq_pergunta);
        $stmt->bindValue(':res', $this->faq_resposta);
        $stmt->bindValue(':id', $this->id_faq);
        $stmt->execute();
    }

    public function deletar(){
        $query = "DELETE FROM faqs WHERE id_faq = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_faq);
        $stmt->execute();
    }

    public static function listar(){
        $query = "SELECT * FROM faqs";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}