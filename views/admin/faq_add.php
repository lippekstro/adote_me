<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<section>
    <form action="/adote_me/controllers/faq_add_controller.php" method="POST">
        <div class="mb-3">
            <label for="pergunta" class="form-label">Pergunta</label>
            <input type="text" class="form-control" id="pergunta" name="pergunta">
        </div>

        <div class="mb-3">
            <label for="resposta" class="form-label">Resposta</label>
            <textarea name="resposta" id="resposta" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Enviar">
        </div>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>