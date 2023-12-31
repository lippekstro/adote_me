<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $pergunta = $_POST['pergunta'];
    $resp = $_POST['resposta'];

    $faq = new Faq();
    $faq->faq_pergunta = $pergunta;
    $faq->faq_resposta = $resp;

    $faq->criar();

    setcookie('msg', 'FAQ adicionada!', time() + 10, '/adote_me/');
    setcookie('tipo', 'sucesso', time() + 10, '/adote_me/');
    header('Location: /adote_me/views/perfil_usu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
