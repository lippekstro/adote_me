<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="/adote_me/css/esquecisenha.css">
</head>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="/adote_me/css/esquecisenha.css">
</head>

<div class="formulario container mt-5">
    <form onsubmit="event.preventDefault(); enviarLink();">
      <h1>Esqueci a senha</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Informe e-mail ou telefone:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail/Telefone" required>
      </div>
      <div class="col-12" id="botoes">
        <button type="submit" class="btn btn-primary" id="cadastrarbotton" data-bs-toggle="modal" data-bs-target="#mensagemModal">Enviar</button>
      </div>
    </form>
  </div>

  <div class="modal fade" id="mensagemModal" tabindex="-1" aria-labelledby="mensagemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mensagemModalLabel">Mensagem</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>O link foi enviado com sucesso!</p>
        </div>
      </div>
    </div>
  </div>


  <script>
    function enviarLink() {
      // Lógica para enviar o link por email ou SMS
      // Não é necessário exibir a caixa de mensagem aqui
    }
  </script>
  
 
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>