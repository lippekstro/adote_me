<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/endereco.php';

try {
    $id_endereco = $_GET['id'];

    $enderecos = new endereco ($id_endereco);

    $enderecos->deletar();

    header('Location: /adote_me/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}