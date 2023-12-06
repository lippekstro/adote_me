<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';



try {
  $id = $_GET['id'];
  $pet = new Pet($id);
  $dono = Pet::donoDoPet($pet->id_usuario);
} catch (PDOException $e) {
  echo $e->getMessage();
}


?>
<link rel="stylesheet" href="/adote_me/css/perfil02.css">

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
          <img src="/imgs/cachorro_perfil05.jpg" class="d-block w-100" alt="..." id="imagens">
        </div>
        <div class="carousel-item">
          <img src="/imgs/cachorro_perfil02.jpg" class="d-block w-100" alt="..." id="imagens">
        </div>
        <div class="carousel-item">
          <img src="/imgs/cachorro_perfil03.jpg" class="d-block w-100" alt="..." id="imagens">
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
          <img src="data:image;charset=utf8;base64,<?= base64_encode($dono['img_usuario']) ?>" alt="marcos" title="marcos" id="perfil_usu">
          <div class="card-body">
            <h5 class="card-title"><?= $dono['nome'] ?></h5>
            <div class="col-4" id="perfil_tutor">
              <p><i class="fas fa-map-marker-alt"></i>
                <strong>São Luis - MA</strong> / São Raimundo
              </p>
              <p><i class="fab fa-whatsapp"></i>
                (98) 91234-5678</p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<div class="faqs">
  <form action="perguntas">
    <p>Perguntas e respostas</p>
    <br>
    <p>Pergunte o que você quer saber</p>
    <div class="input-group">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
      <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
  </form>





</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>