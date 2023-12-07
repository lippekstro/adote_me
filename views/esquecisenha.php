<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<div class="formulario">

  <form>
    <h1>Esqueci a senha</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Informe e-mail ou telefone:
      </label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail/Telefone" required>
      <div class="col-12" id="botoes">
        <a href="login.html"><button type="submit" class="btn btn-primary" id="cadastrarbotton">Enviar</button></a>
      </div>
    </div>

  </form>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>