<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';

?>

<head>
    <link rel="stylesheet" href="/adote_me/css/cadastro_pet.css">
</head>
<div class="video">
    <video src="/adote_me/imgs/gato_cadastro_pet.mp4" autoplay muted loop></video>

    <form action="/adote_me/controllers/pets_add_controller.php" method="POST" class="row g-3" id="formulariologin" enctype="multipart/form-data">
        <h1>Cadastre seu pet</h1>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Nome*</span>
            <input type="text" name="nome" class="form-control" placeholder=" " aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>


        <br>
        <div class="container text-center" id="bloco">
            <div class="row">
                <div class="col">

                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Tipo</span>
                        <select name="tipo" id="genero" class="form-select">
                            <option selected>Escolha...</option>
                            <option value="cachorro">Cães</option>
                            <option value="gato">Gatos</option>
                            <option value="papagaio">Papagaio</option>
                            <option value="tartaruga">Tartaruga</option>
                            <option value="peixe">Peixe</option>
                            <option value="ave">Ave</option>
                            <option value="hamster">Hamsters</option>
                            <option value="coelho">Coelhos</option>
                            <option value="outros">Outros</option>
                        </select>

                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Idade*</span>
                        <input type="number" class="form-control" id="idade" name="idade" placeholder=" " required />
                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Tamanho*</span>
                        <input type="text" name="tamanho" class="form-control" id="tamanho" placeholder=" " required />

                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Peso (kg)*</span>
                        <input type="text" name="peso" class="form-control" id="peso" placeholder=" " required />

                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center" id="bloco">
            <div class="row">
                <div class="col">

                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="genero">Gênero</span>
                        <select name="genero" id="genero" class="form-select">
                            <option selected>Escolha...</option>
                            <option value="F">Fêmea</option>
                            <option value="M">Macho</option>
                        </select>

                    </div>


                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Raça*</span>
                        <input type="text" name="raca" class="form-control" id="raca" placeholder=" " required />
                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Cor</span>
                        <input type="text" name="cor" class="form-control" id="cor" placeholder=" " required />
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="input-group flex-nowrap">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="vacinado" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Vacinado?
                    </label>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="input-group flex-nowrap">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adocao" value="1" id="adocao" required>
                    <label class="form-check-label" for="flexCheckDefault" >
                        Para Adoção?*
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="imagem">Imagem de Pet*</label>
            <input type="file" name="img_pet" id="imgbotton" accept="image/*" required />
        </div>


        <div class="bio">
            <p>Escreva uma descrição:</p>
            <div class="col">
                <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sobre o pet..."></textarea>
            </div>
        </div>

        <input type="hidden" name="id_usuario" value="<?= $_SESSION['usuario']['id_usuario'] ?>">


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
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>