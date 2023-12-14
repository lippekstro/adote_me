<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $id = $_POST['id'];
    $per = $_POST['pergunta'];
    $res = $_POST['resposta'];

    $faq = new Faq($id);
    $faq->faq_pergunta = $per;
    $faq->faq_resposta = $res;

    $faq->atualizar();

    setcookie('msg', 'FAQ atualizada!', time() + 10, '/adote_me/');
    setcookie('tipo', 'info', time() + 10, '/adote_me/');
    header('Location: /adote_me/views/perfil_usu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
