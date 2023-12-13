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

    <div class="adicionar">

        <div class="input-group">
            <span class="input-group-text">Pergunta</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>


        <div class="input-group">
            <span class="input-group-text">Resposta</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

    </div>



    </div>
</section>

<div class="button-faq" class="d-grid gap-2 d-md-block">
    <a href=""><button class="btn btn-primary" type="button" id="adicionar">Adiconar FAQ</button></a>
</div>






<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>