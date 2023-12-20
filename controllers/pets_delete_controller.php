<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/pet.php';

try {
    $id_pet = $_GET['id_pet'];

    $pets = new pet($id_pet);

    $pets->deletar();

    setcookie('msg', 'Pet deletado!', time() + 10, '/adote_me/');
    setcookie('tipo', 'perigo', time() + 10, '/adote_me/');
    header('Location: /adote_me/views/perfil_usu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
