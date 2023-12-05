<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';

try {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $raca = $_POST['raca'];
    $tamanho = $_POST['tamanho'];
    $genero = $_POST['genero'];
    $peso = $_POST['peso'];
    $cor = $_POST['cor'];
    $adocao = $_POST['adocao'];
    $adotado = $_POST['adotado'];
    $bio = $_POST['bio'];
    $id_usuario = $_POST['id_usuario'];

    if (!empty($_FILES['img_pet']['tmp_name'])) {
        $img_pet = file_get_contents($_FILES['img_pet']['tmp_name']);
    }

    $pets = new pet ($id_pet);
    $pets->nome = $nome;
    $pets->tipo = $tipo;
    $pets->raca = $raca;
    $pets->tamanho = $tamanho;
    $pets->genero = $genero;
    $pets->peso = $peso;
    $pets->cor = $cor;
    $pets->img_pet = $img_pet;
    $pets->adocao = $adocao;
    $pets->adotado= $adotado;
    $pets->bio = $bio;
    $pets->id_usuario = $id_usuario;

    if ($img_pet) {
        $pets->img_pet = $img_pet;
    } else {
        $pets->img_pet = file_get_contents ('');
    }

    $pets->criar();

    header('Location: /adote_me/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}