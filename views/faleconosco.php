<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<h1>Envie sua mensagem</h1>
<form action="fale" id="fale">

  <!-- Gabriel -->
  <div class="input-group">
    <span class="input-group-text">Nome</span>
    <input type="text" aria-label="First name" class="form-control" placeholder="Nome" required>
  </div>
  <div class="input-group">
    <span class="input-group-text">E-mail</span>
    <input type="text" aria-label="First name" class="form-control" placeholder="E-mail" required>
  </div>

  <!-- Gabriel -->
  <!--  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div> -->
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Escreva suas sugestões ou duvidas</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>

  <!-- Gabriel -->
  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">Adicionar imagens</label>
    <input class="form-control" type="file" id="formFileMultiple" multiple required>
  </div>

  <button type="submit" class="btn btn-primary" id="cadastrarbotton">Enviar</button><!-- Não sei se ta funcionando -->
</form>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>