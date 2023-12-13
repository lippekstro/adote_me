  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/usuarios.php';

  try {
    $id_usuario = $_SESSION['usuario']['id_usuario'];
    $usuario = new usuario($id_usuario);
    $meusPets = usuario::listarMeusPets($id_usuario);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

  ?>
  <link rel="stylesheet" href="/adote_me/css/perfil_usu.css" />


  <h1> Suas configurações</h1>

  <div class="botoes">

    <button class="tab-btn" onclick="openTab('editar')">Dados Pessoais</button>
    <button class="tab-btn" onclick="openTab('acesso')">E-mail e Senha</button>
    <button class="tab-btn" onclick="openTab('foto')">Foto de Perfil</button>
    <button class="tab-btn" onclick="openTab('endereco')">Endereço</button>
    <button class="tab-btn" onclick="openTab('pets')">Pets Cadastrados</button>
  </div>

  <form action="">
    <div class="info">
      <div id="editar" class="tab-content active-tab">
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">Nome*</span>
          <input type="text" class="form-control" placeholder=" " value="<?= $usuario->nome ?>" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">CPF*</span>
          <input type="text" name="cpf" size="9" maxlength="9" value="<?= $usuario->cpf ?>" required />
        </div>
        <div class="col">
          <div class="input-group flex-nowrap">

            <span class="input-group-text" id="col1">Nascimento*</span>
            <input type="date" id="diaa" name="diaa" value="<?= $usuario->nascimento ?>" required/>

          </div>
        </div>



        <div class="input-group flex-nowrap">

          <span class="input-group-text" id="col1">Gênero</span>
          <select id="genero" class="form-select">
            <option value="F" <?= $usuario->genero == 'F' ? 'selected' : '' ?>>Feminino</option>
            <option value="M" <?= $usuario->genero == 'M' ? 'selected' : '' ?>>Masculino</option>
            <option value="Outros">Outros</option>
          </select>

        </div>

        <div class="col">
          <div class="input-group flex-nowrap">

            <span class="input-group-text" id="col1">Telefone*</span>
            <input type="tel" class="form-control" id="telefone" placeholder=" " value="<?= $usuario->telefone ?>" required />
          </div>
        </div>

  </form>

  <div class="opcao">
    <button onclick="salvarEdicao()" id="salvar">Salvar</button>
    <button onclick="cancelarEdicao()" id="canceclar">Cancelar</button>
  </div>
  </div>






  <div id="acesso" class="tab-content">
    <div class="input-group flex-nowrap" id="email">
      <span class="input-group-text" id="addon-wrapping">E-mail*</span>
      <input type="email" class="form-control" id="inputEmail4" required placeholder=" " required />
    </div>



    <div class="col" id="acesso">
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Senha*</span>
        <input type="password" class="form-control" id="passwordField1" placeholder="  " required>
        <i class="fa fa-eye" id="eye1"></i>
        <script>
          document.getElementById('eye1').addEventListener('click', function() {
            var passwordField1 = document.getElementById('passwordField1');

            if (passwordField1.type === 'password') {
              passwordField1.type = 'text';
            } else {
              passwordField1.type = 'password';
            }
          });
        </script>
      </div>
    </div>
    <div class="col" id="acesso">
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Repita*</span>
        <input type="password" class="form-control" id="passwordField2" placeholder=" " required>
        <i class="fa fa-eye" id="eye2"></i>


        <script>
          document.getElementById('eye2').addEventListener('click', function() {
            var passwordField2 = document.getElementById('passwordField2');

            if (passwordField2.type === 'password') {
              passwordField2.type = 'text';
            } else {
              passwordField2.type = 'password';
            }
          });
        </script>


      </div>
    </div>
    <script>
      let passwordField1 = document.getElementById('passwordField1');
      let passwordField2 = document.getElementById('passwordField2');

      function validarSenha() {
        if (passwordField1.value != passwordField2.value) {
          passwordField2.setCustomValidity("Senhas diferentes!");
          passwordField2.reportValidity();
          return false;
        } else {
          passwordField2.setCustomValidity("");
          return true;
        }
      }

      // verificar também quando o campo for modificado, para que a mensagem suma quando as senhas forem iguais
      passwordField2.addEventListener('input', validarSenha);
    </script>

    <div class="opcao">
      <button onclick="salvarEdicao()" id="salvar">Salvar</button>
      <button onclick="cancelarEdicao()" id="canceclar">Cancelar</button>
    </div>
  </div>

  <div id="foto" class="tab-content">
    <div class="foto_perfil">
      <span class="foto">Foto de Perfil:</span>
      <img id="imagem-preview" class="foto" src="#" alt="Preview da Imagem" />
      <input type="file" name="imagem" id="imgbotton" accept="image/*" onchange="previewImagem(event)" />
    </div>

    <div class="opcao">
      <button onclick="salvarEdicao()" id="salvar">Salvar</button>
      <button onclick="cancelarEdicao()" id="canceclar">Cancelar</button>
      <button onclick="limparFoto()" id="canceclar">Limpar</button>
    </div>

    <script>
      function previewImagem(event) {
        var input = event.target;
        var preview = document.getElementById('imagem-preview');

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            preview.src = e.target.result;
          };

          reader.readAsDataURL(input.files[0]);

          // Exibir a imagem
          preview.style.display = 'block';
        }
      }

      function salvarEdicao() {
        // Lógica para salvar a edição
        alert("Edição salva!");
      }

      function cancelarEdicao() {
        // Lógica para cancelar a edição
        alert("Edição cancelada!");
      }

      function limparFoto() {
        var preview = document.getElementById('imagem-preview');
        var input = document.getElementById('imgbotton');

        // Limpar a imagem
        preview.src = '#';
        preview.style.display = 'none';

        // Limpar o input de arquivo
        input.value = '';
      }
    </script>
  </div>

  <div id="endereco" class="tab-content">

    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">CEP*</span>
      <input type="text" name="cpf" size="9" maxlength="9" required />


    </div>

    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">Rua*</span>
      <input type="text" class="form-control" id="inputCity" required placeholder="Rua" required />

    </div>
    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">nº*</span>
      <input type="text" class="form-control" id="inputCity" required placeholder="Número" required />
    </div>
    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">Bairro*</span>
      <input type="text" class="form-control" id="inputCity" required placeholder="Bairro" required />
    </div>

    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">Complemento</span>
      <input type="text" class="form-control" id="inputCity" required placeholder="Complemento" required />
    </div>


    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">Cidade*</span>
      <input type="text" class="form-control" id="inputCity" required placeholder="Cidade" required />
    </div>

    <div class="col-md-4">
      <label for="inputState" class="form-label">Estado*</label>
      <select id="inputState" class="form-select" required>
        <option selected>Escolha...</option>
        <option value="ac">Acre</option>
        <option value="al">Alagoas</option>
        <option value="am">Amazonas</option>
        <option value="ap">Amapá</option>
        <option value="ba">Bahia</option>
        <option value="ce">Ceará</option>
        <option value="df">Distrito Federal</option>
        <option value="es">Espírito Santo</option>
        <option value="go">Goiás</option>
        <option value="ma">Maranhão</option>
        <option value="mt">Mato Grosso</option>
        <option value="ms">Mato Grosso do Sul</option>
        <option value="mg">Minas Gerais</option>
        <option value="pa">Pará</option>
        <option value="pb">Paraíba</option>
        <option value="pr">Paraná</option>
        <option value="pe">Pernambuco</option>
        <option value="pi">Piauí</option>
        <option value="rj">Rio de Janeiro</option>
        <option value="rn">Rio Grande do Norte</option>
        <option value="ro">Rondônia</option>
        <option value="rs">Rio Grande do Sul</option>
        <option value="rr">Roraima</option>
        <option value="sc">Santa Catarina</option>
        <option value="se">Sergipe</option>
        <option value="sp">São Paulo</option>
        <option value="to">Tocantins</option>
      </select>
    </div>


    <div class="opcao">
      <button onclick="salvarEdicao()" id="salvar">Salvar</button>
      <button onclick="cancelarEdicao()" id="canceclar">Cancelar</button>
    </div>
  </div>

  <div id="pets" class="tab-content">
    <div class="pet">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Pet</th>
            <th scope="col" colspan="2">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($meusPets as $pets) : ?>
            <tr>
              <th scope="row"><?= $pets['id_pet'] ?></th>
              <td><?= $pets['nome'] ?></td>
              <td style="padding: 0;">
                <a href="" class="btn btn-primary">Editar</a>
              </td>
              <td style="padding: 0;">
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="opcao">
        <button onclick="salvarEdicao()" id="salvar">Salvar</button>
        <button onclick="cancelarEdicao()" id="canceclar">Cancelar</button>
      </div>













    </div>
  </div>

  <script>
    function openTab(tabName) {
      var i, tabContent;
      tabContent = document.getElementsByClassName("tab-content");
      for (i = 0; i < tabContent.length; i++) {
        tabContent[i].classList.remove("active-tab");
      }
      document.getElementById(tabName).classList.add("active-tab");
    }
  </script>
  </div>
  </div>

  <br>

  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
  ?>