<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/usuarios.php';


try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    usuario::logar($email, $senha);

} catch (PDOException $e) {
    echo $e->getMessage();
}