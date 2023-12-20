<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/endereco.php';

try {
    $id_endereco = $_POST['id'];
    $cep = $_POST['cep'];
    $quadra = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $rua = $_POST['rua'];
    $id_usuario = $_POST['id_usuario'];


    $enderecos = new endereco ($id_endereco);
    $enderecos->cep = $cep;
    $enderecos->rua = $rua;
    $enderecos->complemento = $quadra;
    $enderecos->bairro = $bairro;
    $enderecos->cidade = $cidade;
    $enderecos->estado = $estado;
    $enderecos->id_usuario = $id_usuario;

    $endereco->atualizar();

    header('Location: /adote_me/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}