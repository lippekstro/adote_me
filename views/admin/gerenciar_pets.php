<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';

try {
  $listapets = pet::listar();
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>


<head>
  <link rel="stylesheet" href="/adote_me/css/gerenciar_pet.css">
</head>

<h1>Gerenciamento de Pet's</h1>

<div class="gerenciamento">


  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pet</th>
        <th scope="col" colspan="2">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listapets as $pet) : ?>
        <tr>
          <th scope="row"><?= $pet['id_pet'] ?></th>
          <td><?= $pet['nome'] ?></td>
          <td style="padding: 0;">
            <a href="" class="btn btn-primary">Editar</a>

          </td>
          <td style="padding: 0;">
            <a href="" class="btn btn-danger">Deletar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>