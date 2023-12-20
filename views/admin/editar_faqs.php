<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $id = $_GET['id'];
    $faq = new Faq($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>


<link rel="stylesheet" href="/adote_me/css/adicionar_faqs.css">


<h1>Editar FAQ</h1>

<section>

    <form action="/adote_me/controllers/faq_edit_controller.php" method="post" class="d-flex flex-column m-3">

        <input type="hidden" name="id" value="<?= $faq->id_faq ?>">

        <div class="input-group">
            <span class="input-group-text">Pergunta</span>
            <textarea class="form-control" aria-label="With textarea" name="pergunta"><?= $faq->faq_pergunta ?></textarea>
        </div>


        <div class="input-group">
            <span class="input-group-text">Resposta</span>
            <textarea class="form-control" aria-label="With textarea" name="resposta"><?= $faq->faq_resposta ?></textarea>
        </div>

        <button class="btn btn-primary align-self-center" type="submit" id="adicionar">Atualizar FAQ</button>
    </form>


</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>