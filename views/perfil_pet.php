<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';


try {
  $id = $_GET['id'];
  $pet = new Pet($id);
  $dono = Pet::buscaDadosDoPetDono($pet->id_usuario);
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>
<head>
<link rel="stylesheet" href="/adote_me/css/perfil_pet.css">
</head>


<!-- conteudo da pagina -->
<div class="container text-center" id="slide">
  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="data:image;charset=utf8;base64,<?= base64_encode($pet->img_pet) ?>" class="d-block w-100" alt="..." id="imagens">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="col">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $pet->nome ?></h5>
            <ul>
              <li><?= 'depois' ?></li>
              <li><?= $pet->raca ?></li>
              <li><?= $pet->genero ?></li>
              <li>
                <form>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Informações Adicionais</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $pet->bio ?></textarea>
                  </div>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br>
      <div class="card-group">
        <div class="card" id="tutor">
          <img src="data:image;charset=utf8;base64,<?= base64_encode($dono[0]['img_usuario']) ?>" alt="marcos" title="marcos" id="perfil_usu">
          <div class="card-body">
            <h5 class="card-title"><?= $dono[0]['nome'] ?></h5>
            <div class="col-4" id="perfil_tutor">
              <p><i class="fas fa-map-marker-alt"></i>
                <strong><?= $dono[0]['cidade'] ?> - <?= $dono[0]['estado'] ?></strong> / <?= $dono[0]['bairro'] ?>
              </p>
              <p><i class="fab fa-whatsapp"></i>
              <?= $dono[0]['telefone'] ?></p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>