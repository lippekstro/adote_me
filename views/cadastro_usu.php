<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>


<head>
    <link rel="stylesheet" href="/adote_me/css/cadastro_usu.css">
</head>
<div class="video">
    <video src="/adote_me/imgs/videocadastro.mp4" autoplay muted loop></video>
    <form class="row g-3" id="formulariologin">

        <form class="row g-3" id="formulariologin">
            <h1>Cadastre-se</h1>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Nome</span>
                <input type="text" class="form-control" placeholder=" " aria-label="Username" aria-describedby="addon-wrapping">
            </div>

            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">E-mail</span>
                <input type="email" class="form-control" id="inputEmail4" required placeholder=" " required />
            </div>

            <div class="col">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Senha</span>
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
            <div class="col">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Repita</span>
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


            <br>
            <div class="container text-center" id="gap">
                <div class="row">
                    <div class="col">

                        <div class="input-group flex-nowrap">

                            <span class="input-group-text" id="col3">Gênero</span>
                            <select id="genero" class="form-select"  id="col3">
                                <option selected>Escolha...</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Outros">Outros</option>
                            </select>

                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group flex-nowrap">

                            <span class="input-group-text" id="col3">Telefone</span>
                            <input type="tel" class="form-control" id="col3" placeholder="Telefone" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group flex-nowrap">

                            <span class="input-group-text" id="col3">Nascimento</span>
                            <input type="date" id="diaa" name="diaa" />

                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group flex-nowrap">

                <span class="input-group-text" id="addon-wrapping">CPF</span>
                <input type="text" name="cpf" size="9" maxlength="9" required />
                <input type="text" name="cpf2" size="2" maxlength="2" required />
            </div>
            <div class="col-md-6">
                <label for="imagem">Imagem de perfil:(opcional)</label>
                <input type="file" name="imagem" id="imgbotton" accept="image/*" />
            </div>
            <hr>
            <p>Endereço</p>


            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">CEP</span>
                <input type="text" name="cep" id="cep" size="9" maxlength="9" required />
                <button type="button" class="btn btn-primary" onclick="buscarCep()">Buscar CEP</button>
            </div>

          

            <div class="col">
                <div class="input-group flex-nowrap">


                    <span class="input-group-text" id="col3">Rua</span>
                    <input type="text" class="form-control" id="rua" placeholder="Rua" required />


                </div>
            </div>
       



            <div class="col">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="col3">Número</span>
                    <input type="text" class="form-control" id="numero" placeholder="Número" required />
                </div>
            </div>
           

            <div class="col">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="col3">Bairro</span>
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" required />
                </div>
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Complemnto</span>
                <input type="text" class="form-control" placeholder=" " aria-label="Username" aria-describedby="addon-wrapping">
            </div>







            <div class="col">
                <div class="input-group flex-nowrap">


                    <span class="input-group-text" id="col3">Cidade</span>
                    <input type="text" class="form-control" id="cidade" placeholder="Cidade" required />
                </div>
            </div>





            <script>
                function buscarCep() {
                    var cep = document.getElementById('cep').value.replace(/\D/g, ''); // Remove caracteres não numéricos
                    if (cep.length !== 8) {
                        alert('Por favor, insira um CEP válido com 8 dígitos.');
                        return;
                    }

                    fetch(`https://viacep.com.br/ws/${cep}/json/`)
                        .then(response => response.json())
                        .then(data => preencherCampos(data))
                        .catch(error => console.error('Erro ao buscar CEP:', error));
                }

                function preencherCampos(data) {
                    if (data.erro) {
                        alert('CEP não encontrado. Por favor, verifique o CEP inserido.');
                        return;
                    }

                    // Preencher automaticamente os campos de endereço
                    document.getElementById('rua').value = data.logradouro;
                    document.getElementById('numero').value = ''; // Preencher com o número, se disponível
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    document.getElementById('estado').value = data.uf;
                }
            </script>



            <div class="col-md-4">
                <label for="inputState" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" placeholder="Estado" required />
            </div>

            <div class="col-12">
                <div class="form-check" id="check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required />
                    <label class="form-check-label" for="gridCheck" required>
                        <a href="">Aceito termos e condições</a>
                    </label>
                </div>
            </div>

            <div class="col-12" id="botoes">
                <button type="submit" class="btn btn-primary" id="cadastrarbotton">
                    Cadastrar
                </button>
                <button type="reset" class="btn btn-primary" id="limparbotton">
                    Limpar
                </button>
            </div>
        </form>
    </form>
</div>
<br>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>