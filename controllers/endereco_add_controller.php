<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $pergunta = $_POST['pergunta'];
    $resp = $_POST['resposta'];

    $faq = new Faq();
    $faq->faq_pergunta = $pergunta;
    $faq->faq_resposta = $resp;

    $faq->criar();

    header('Location: /adote_me/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}