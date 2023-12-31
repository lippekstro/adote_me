<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';

try {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $idade = $_POST['idade'];
    $raca = $_POST['raca'];
    $idade = $_POST['idade'];
    $tamanho = $_POST['tamanho'];
    $genero = $_POST['genero'];
    $peso = $_POST['peso'];
    $cor = $_POST['cor'];

    if (isset($_POST['adocao'])) {
        $adocao = $_POST['adocao'];
    } else {
        $adocao = 0;
    }

    if (isset($_POST['adotado'])) {
        $adotado = $_POST['adotado'];
    } else {
        $adotado = 0;
    }

    $bio = $_POST['bio'];
    $id_usuario = $_POST['id_usuario'];

    if (!empty($_FILES['img_pet']['tmp_name'])) {
        $img_pet = file_get_contents($_FILES['img_pet']['tmp_name']);
    }

    $pets = new pet();
    $pets->nome = $nome;
    $pets->tipo = $tipo;
    $pets->raca = $raca;
    $pets->idade = $idade;
    $pets->tamanho = $tamanho;
    $pets->genero = $genero;
    $pets->peso = $peso;
    $pets->cor = $cor;
    $pets->img_pet = $img_pet;
    $pets->adocao = $adocao;
    $pets->adotado = $adotado;
    $pets->bio = $bio;
    $pets->id_usuario = $id_usuario;

    if ($img_pet) {
        $pets->img_pet = $img_pet;
    } else {
        $pets->img_pet = file_get_contents('');
    }

    $pets->criar();

    setcookie('msg', 'Pet adicionado!', time() + 10, '/adote_me/');
    setcookie('tipo', 'sucesso', time() + 10, '/adote_me/');
    header('Location: /adote_me/views/perfil_usu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
