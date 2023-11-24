<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
    $lista = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>Pergunta</th>
            <th>Resposta</th>
            <th colspan="2">
                <a href="faq_add.php">Adicionar</a>
            </th>
        </tr>

        <?php foreach($lista as $faq): ?>
            <tr>
                <td><?= $faq['id_faq'] ?></td>
                <td><?= $faq['faq_pergunta'] ?></td>
                <td><?= $faq['faq_resposta'] ?></td>
                <td>
                    <a href="/adote_me/views/admin/faq_editar.php?id=<?= $faq['id_faq'] ?>">Editar</a>
                </td>
                <td>
                    <a href="/adote_me/controllers/faq_delete_controller.php?id=<?= $faq['id_faq'] ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>