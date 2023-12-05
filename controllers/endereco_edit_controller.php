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

    header('Location: /adote_me/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}