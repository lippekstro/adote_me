<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $listaFaqs = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>


<link rel="stylesheet" href="/adote_me/css/adicionar_faqs.css">


<h1>Adicionar FAQ</h1>

<section>

    <form action="/adote_me/controllers/faq_add_controller.php" method="post" class="d-flex flex-column m-3">
        <div class="input-group">
            <span class="input-group-text">Pergunta</span>
            <textarea class="form-control" aria-label="With textarea" name="pergunta"></textarea>
        </div>


        <div class="input-group">
            <span class="input-group-text">Resposta</span>
            <textarea class="form-control" aria-label="With textarea" name="resposta"></textarea>
        </div>

        <button class="btn btn-primary align-self-center" type="submit" id="adicionar">Adiconar FAQ</button>
    </form>


</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>