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
            <div class="container text-center">
                <div class="row">
                    <div class="col">

                        <div class="input-group flex-nowrap">

                            <span class="input-group-text" id="col1">Gênero</span>
                            <select id="genero" class="form-select">
                                <option selected>Escolha...</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Outros">Outros</option>
                            </select>

                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group flex-nowrap">

                            <span class="input-group-text" id="col1">Telefone</span>
                            <input type="tel" class="form-control" id="telefone" placeholder="Telefone" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group flex-nowrap">

                            <span class="input-group-text" id="col1">Nascimento</span>
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
                <input type="text" name="cpf" size="9" maxlength="9" required />


            </div>

            <div class="col">
                <div class="input-group flex-nowrap">

                    <span class="input-group-text" id="col1">Rua</span>
                    <input type="tel" class="form-control" id="telefone" placeholder="Rua" required />
                </div>
            </div>
            <div class="col">
                <div class="input-group flex-nowrap">

                    <span class="input-group-text" id="col1">nº</span>
                    <input type="tel" class="form-control" id="telefone" placeholder="Número" required />
                </div>
            </div>
            <div class="col">
                <div class="input-group flex-nowrap">

                    <span class="input-group-text" id="col1">Bairro</span>
                    <input type="tel" class="form-control" id="telefone" placeholder="Bairro" required />
                </div>
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Complemnto</span>
                <input type="text" class="form-control" placeholder=" " aria-label="Username" aria-describedby="addon-wrapping">
            </div>


            

            

            <div class="col">
                <div class="input-group flex-nowrap">

                    <span class="input-group-text" id="col1">Cidade</span>
                    <input type="tel" class="form-control" id="telefone" placeholder="Cidade" required />
                </div>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Estado</label>
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