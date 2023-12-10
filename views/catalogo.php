<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';

try {
  $pets_diponiveis = Pet::listarDisponiveis();
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>


<head>
    <link rel="stylesheet" href="/adote_me/css/catalogo_pet.css">
</head>

<!-- configuração para caroseul  -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/imgs/pessoas_animais07.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/imgs/pessoas_animais08.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/imgs/pessoas_animais09.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" id="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next" id="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h1>Conheça alguns animais disponíveis para adoção</h1>

<!-- fim configuração para caroseul  -->
<!-- cards -->
<div class="row row-cols-1 row-cols-md-3 g-4" id="card">
  <?php foreach ($pets_diponiveis as $p) : ?>
    <div class="col">
      <div class="card h-100">
        <img src="data:image;charset=utf8;base64,<?= base64_encode($p['img_pet']) ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $p['nome'] ?></h5>
          <p class="card-text"><?= $p['bio'] ?></p>
          <a href="/adote_me/views/perfil_usu.php?id=<?= $p['id_pet'] ?>"><button type="button" class="btn btn-info">Saiba mais</button></a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>