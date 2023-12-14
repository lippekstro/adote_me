<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $id = $_GET['id'];

    $faq = new Faq($id);

    $faq->deletar();

    setcookie('msg', 'FAQ deletada!', time() + 10, '/adote_me/');
    setcookie('tipo', 'perigo', time() + 10, '/adote_me/');
    header('Location: /adote_me/views/perfil_usu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
