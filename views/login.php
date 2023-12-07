<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>


<link rel="stylesheet" href="/adote_me/css/login.css">

<!-- Gabriel-Botei a div "fundo" mais pra cima -->
<div class="fundo">
  <video src="/imgs/videologin.mp4" autoplay muted loop></video>
  <form>
    <h1>Login</h1>
    <!-- Gabriel -->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
      <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.
      </div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
      <i class="fa fa-eye" id="eye"></i>

      <script>
        document.getElementById('eye').addEventListener('click', function() {
          var exampleInputPassword1 = document.getElementById('exampleInputPassword1');

          if (exampleInputPassword1.type === 'password') {
            exampleInputPassword1.type = 'text';
          } else {
            exampleInputPassword1.type = 'password';
          }
        });
      </script>

    </div>

    <!-- Gabriel -->
    <div class="esquecisenha">
      <a href="esquecisenha.html">Esqueceu a senha?</a>
    </div>
    <div class="mb-3 form-check" id="check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">Não sou robô</label>
    </div>
    <button type="submit" class="btn btn-primary" id="entrar">Entrar</button>
  </form>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>