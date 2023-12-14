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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
</head>

<h1><?= $pet->nome ?></h1>




<div class="container text-center" id="container">
        <div class="row">
            <div class="col" id="dono">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($dono[0]['img_usuario']) ?>" alt="" id="fotodono">
                <div class="info_dono">
                    <p><?= $dono[0]['nome'] ?></p> 
                    <p><span class="material-symbols-outlined">
                        phone_forwarded
                        </span>
                        <?= $dono[0]['telefone'] ?></p> 
                    <p><span class="material-symbols-outlined">
                        pin_drop
                        </span>
                        <?= $dono[0]['cidade'] ?> - <?= $dono[0]['estado'] ?></strong> / <?= $dono[0]['bairro'] ?></p> 
                </div>
            </div>
            <div class="col" id="pet">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($pet->img_pet) ?>" alt="" id="fotopet">
            </div>
            <div class="col" id="info">
                <p><?= 'depois' ?></p>
                <p><?= $pet->raca ?></p>
                <p><?= $pet->genero ?></p>
                <label for="exampleFormControlTextarea1" class="form-label">Informações Adicionais</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> <?= $pet->bio ?></textarea>
            </div>
        </div>
    </div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>

















































<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>