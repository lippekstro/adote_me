<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $lista = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>

<section class="m-3 d-flex justify-content-center">
    <div class="accordion col col-lg-6 col-sm-11" id="accordionExample">
        <?php foreach ($lista as $faq) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acordion<?= $faq['id_faq'] ?>" aria-expanded="false" aria-controls="acordion<?= $faq['id_faq'] ?>">
                        <?= $faq['faq_pergunta'] ?>
                    </button>
                </h2>
                <div id="acordion<?= $faq['id_faq'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= $faq['faq_resposta'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>