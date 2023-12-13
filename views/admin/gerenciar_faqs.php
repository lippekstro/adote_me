<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/faq.php';

try {
  $listaFaqs = Faq::listar();
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>


<link rel="stylesheet" href="/adote_me/css/gerenciar_faqs.css">


<h1>Gerenciamento de FAQ</h1>
  <div class="button-faq"  class="d-grid gap-2 d-md-block" >
    <a href=""><button class="btn btn-primary" type="button" id= "adicionar">Adiconar FAQ</button></a>
  </div>
  <hr>



  <div class="gerenciamento">


  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pergunta</th>
        <th scope="col">Resposta</th>
        <th scope="col" colspan="2">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listaFaqs as $faq): ?>
      <tr>
        <th scope="row"><?= $faq['id_faq'] ?></th>
        <td><?= $faq['faq_pergunta'] ?></td>
        <td><?= $faq['faq_resposta'] ?></td>
        <td style="padding: 0;">
          <a href="" class="btn btn-primary" id="botaofaq">Editar</a>
        </td>
        <td style="padding: 0;">
          <a href="" class="btn btn-danger" id="botaofaq">Deletar</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




</div>




<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>