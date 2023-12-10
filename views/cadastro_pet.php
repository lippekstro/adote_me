<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<head>
<link rel="stylesheet" href="/adote_me/css/cadastro_pet.css">
</head>
<div class="video">
    <video src="/adote_me/imgs/videocadastro.mp4" autoplay muted loop></video>
        <form class="row g-3" id="formulariologin">

            <form class="row g-3" id="formulariologin">
                <h1>Cadastre seu pet</h1>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Nome</span>
                    <input type="text" class="form-control" placeholder=" " aria-label="Username" aria-describedby="addon-wrapping">
                </div>


                <br>
                <div class="container text-center"  id="bloco">
                    <div class="row">
                        <div class="col">

                            <div class="input-group flex-nowrap">

                                <span class="input-group-text" id="col1">Tipo</span>
                                <select id="genero" class="form-select">
                                    <option selected>Escolha...</option>
                                    <option value="Caes">Cães</option>
                                    <option value="Gatos">Gatos</option>
                                    <option value="Papagaio">Papagaio</option>
                                    <option value="tartaruga">tartaruga</option>
                                    <option value="Peixe">Peixe</option>
                                    <option value="Ave">Ave</option>
                                    <option value="hamsters">hamsters</option>
                                    <option value="Coelhos">Coelhos</option>
                                    <option value="Outros">Outros</option>
                                </select>

                            </div>
                        </div>
                        <div class="col"> 
                            <div class="input-group flex-nowrap"  >

                                <span class="input-group-text" id="col1">Idade</span>
                                <input type="tel" class="form-control" id="telefone" placeholder=" " required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group flex-nowrap">

                                <span class="input-group-text" id="col1">Tamanho</span>
                                <input type="tel" class="form-control" id="telefone" placeholder=" " required />

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container text-center"  id="bloco" >
                    <div class="row">
                        <div class="col">

                            <div class="input-group flex-nowrap">

                                <span class="input-group-text" id="genero">Gênero</span>
                                <select id="genero" class="form-select">
                                    <option selected>Escolha...</option>
                                    <option value="Feminino">Fêmea</option>
                                    <option value="Masculino">Macho</option>
                                </select>

                            </div>


                        </div>
                        <div class="col">
                            <div class="input-group flex-nowrap">

                                <span class="input-group-text" id="col1">Raça</span>
                                <input type="tel" class="form-control" id="telefone" placeholder=" " required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group flex-nowrap">

                                <span class="input-group-text" id="col1">Cor</span>
                                <input type="tel" class="form-control" id="telefone" placeholder=" " required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="vacinado">vacinado</span>
                        <select id="vacinado" class="form-select">
                            <option selected>Escolha...</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="adocao">Adoção/Adotado</span>
                        <select id="Gênero" class="form-select">
                            <option selected>Escolha...</option>
                            <option value="adocao">Adoção</option>
                            <option value="perdido">Adotado</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="imagem">Imagem de Pet</label>
                    <input type="file" name="imagem" id="imgbotton" accept="image/*" required />
                </div>


                <div class="bio">
                    <p>Escreva uma descrição:</p>
                    <div class="col">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sobre o pet..."></textarea>
                    </div>
                </div>







                <div class="col-12" id="caixas">
                    <div class="form-check" id="check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required />
                        <label class="form-check-label" for="gridCheck">
                            <a href="">Aceito termos e condições</a>
                        </label>
                    </div>

                    <div class="form-check" id="check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required />
                        <label class="form-check-label" for="gridCheck">
                            <a href=""> Declaro estar ciente da proibição de venda de animais de estimação no adot.me.
                                😊</a>
                        </label>
                    </div>


                </div>

                <div class="col-12" id="botoes">
                    <button type="submit" class="btn btn-primary" id="cadastrarbotton">
                        Cadastrar Pet
                    </button>
                    <button type="reset" class="btn btn-primary" id="limparbotton">
                        Limpar
                    </button>
                </div>

                <br>
                <br>
                <br>
            </form>
        </form>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>