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
  <link rel="stylesheet" href="/adote_me/css/catalogo.css">
</head>

<div class="conteudo">
  <!-- configuração para caroseul  -->


  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/adote_me/imgs/pessoas_animais07.jpg" class="d-block w-100" alt="..." id="carouselimg" >
        <div class="carousel-caption d-none d-md-block">
          <h5>O poder transformador do amor, onde cada lar se torna um refúgio de carinho e compaixão,
            construindo pontes inquebráveis entre humanos e seus fiéis companheiros peludos.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/adote_me/imgs/pessoas_animais08.jpg" class="d-block w-100" alt="..."  id="carouselimg" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Adotar um animal é mais do que um gesto de generosidade; é um compromisso de enriquecimento mútuo,
            onde a lealdade incondicional desses seres ilumina nossos dias, transformando simples lares
            em verdadeiros santuários de amor e aceitação.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/adote_me/imgs/cachorro_criança.jpeg" class="d-block w-100" alt="..."  id="carouselimg" >
        <div class="carousel-caption d-none d-md-block">
          <h5>A adoção de animais domésticos é a manifestação mais pura da empatia humana,
            proporcionando a esses seres indefesos uma segunda chance de felicidade,
            enquanto ensina a todos nós a importância de cuidar e proteger os mais vulneráveis
            em nossa sociedade.</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>

  <h2>Conheça alguns animais disponíveis para adoção</h2>

  <!-- fim configuração para caroseul  -->
  <!-- cards -->
  <div class="row row-cols-1 row-cols-md-3 g-4" id="card">
    <?php foreach ($pets_diponiveis as $p) : ?>
      <div class="col">
        <div class="card h-100">
          <img src="data:image;charset=utf8;base64,<?= base64_encode($p['img_pet']) ?>" class="card-img-top" width="100%">
          <div class="card-body text-center">
            <h5 class="card-title"><?= $p['nome'] ?></h5>
            <a href="/adote_me/views/perfil_pet.php?id=<?= $p['id_pet'] ?>"><button type="button" class="btn btn-info">Saiba mais</button></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>