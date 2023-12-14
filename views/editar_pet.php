<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';

try {
    $id = $_GET['id_pet'];
    $pet = new pet($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<head>
    <link rel="stylesheet" href="/adote_me/css/cadastro_pet.css">
</head>
<div class="video">
    <video src="/adote_me/imgs/gato_cadastro_pet.mp4" autoplay muted loop></video>

    <form action="/adote_me/controllers/pets_edit_controller.php" method="POST" class="row g-3" id="formulariologin" enctype="multipart/form-data">
        <h1>Cadastre seu pet</h1>

        <input type="hidden" name="id" value="<?= $pet->id_pet ?>">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Nome*</span>
            <input type="text" name="nome" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<?= $pet->nome ?>" required>
        </div>


        <br>
        <div class="container text-center" id="bloco">
            <div class="row">
                <div class="col">

                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Tipo</span>
                        <select name="tipo" id="tipo" class="form-select">
                            <option value="cachorro" <?= $pet->tipo == 'cachorro' ? 'selected' : '' ?>>Cães</option>
                            <option value="gato" <?= $pet->tipo == 'gato' ? 'selected' : '' ?>>Gatos</option>
                            <option value="papagaio" <?= $pet->tipo == 'papagaio' ? 'selected' : '' ?>>Papagaio</option>
                            <option value="tartaruga" <?= $pet->tipo == 'tartaruga' ? 'selected' : '' ?>>Tartaruga</option>
                            <option value="peixe" <?= $pet->tipo == 'peixe' ? 'selected' : '' ?>>Peixe</option>
                            <option value="ave" <?= $pet->tipo == 'ave' ? 'selected' : '' ?>>Ave</option>
                            <option value="hamster" <?= $pet->tipo == 'hamster' ? 'selected' : '' ?>>Hamsters</option>
                            <option value="coelho" <?= $pet->tipo == 'coelho' ? 'selected' : '' ?>>Coelhos</option>
                            <option value="outros" <?= $pet->tipo == 'outros' ? 'selected' : '' ?>>Outros</option>
                        </select>

                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Idade*</span>
                        <input type="number" class="form-control" id="idade" name="idade" value="" required />
                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Tamanho*</span>
                        <input type="text" name="tamanho" class="form-control" id="tamanho" value="<?= $pet->tamanho ?>" required />

                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Peso*</span>
                        <input type="text" name="peso" class="form-control" id="peso" value="<?= $pet->peso ?>" required />

                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center" id="bloco">
            <div class="row">
                <div class="col">

                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="genero">Gênero*</span>
                        <select name="genero" id="genero" class="form-select">
                            <option value="F" <?= $pet->genero == 'F' ? 'selected' : '' ?>>Fêmea</option>
                            <option value="M" <?= $pet->genero == 'M' ? 'selected' : '' ?>>Macho</option>
                        </select>

                    </div>


                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Raça*</span>
                        <input type="text" name="raca" class="form-control" id="raca" value="<?= $pet->raca ?>" required />
                    </div>
                </div>
                <div class="col">
                    <div class="input-group flex-nowrap">

                        <span class="input-group-text" id="col1">Cor</span>
                        <input type="text" name="cor" class="form-control" id="cor" value="<?= $pet->cor ?>" required />
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
                    <input class="form-check-input" type="checkbox" name="adocao" value="1" id="adocao" <?= $pet->adocao == 1 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="flexCheckDefault">
                        Para Adoção?
                    </label>
                </div>
            </div>
        </div>

        <div class="col" id="div_adotado">
            <div class="input-group flex-nowrap">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adotado" value="1" id="adotado" <?= $pet->adotado == 1 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="flexCheckDefault">
                        Adotado?
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="imagem">Imagem de Pet*</label>
            <input type="file" name="img_pet" id="imgbotton" accept="image/*"/>
        </div>


        <div class="bio">
            <p>Escreva uma descrição:</p>
            <div class="col">
                <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sobre o pet..."><?= $pet->bio ?></textarea>
            </div>
        </div>

        <input type="hidden" name="id_usuario" value="<?= $_SESSION['usuario']['id_usuario'] ?>">

        <div class="col-12" id="botoes">
            <button type="submit" class="btn btn-primary" id="cadastrarbotton">
                Atualizar Pet
            </button>
        </div>

        <br>
        <br>
        <br>
    </form>
</div>

<script src="/adote_me/js/selecionaAdocao.js"></script>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>