<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/usuarios.php';

try {
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $img_usuario = $_POST['img_usuario'];
    $nivel_acesso= $_POST['nivel_acesso'];

    $usuarios = new usuario($id_usuario);
    $usuarios->nome = $nome;
    $usuarios->nascimento = $nascimento;
    $usuarios->cpf = $cpf;
    $usuarios->genero = $genero;
    $usuarios->telefone = $telefone;
    $usuarios->email = $email;
    $usuarios->senha = $senha;
    $usuarios->img_usuario = $img_usuario;
    $usuarios->nivel_acesso = $nivel_acesso;

    $usuarios->editar();

    header('Location: /adote_me/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}