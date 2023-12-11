<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/usuarios.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/models/endereco.php';

try {
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if (!empty($_FILES['img_usuario']['tmp_name'])) {
        $img_usuario = file_get_contents($_FILES['img_usuario']['tmp_name']);
    }


    $usuarios = new usuario();
    $usuarios->nome = $nome;
    $usuarios->nascimento = $nascimento;
    $usuarios->cpf = $cpf;
    $usuarios->genero = $genero;
    $usuarios->telefone = $telefone;
    $usuarios->email = $email;
    $usuarios->senha = $senha;
    $usuarios->img_usuario = $img_usuario;

    $id_usuario = $usuarios->criar();

    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $endereco = new endereco();
    $endereco->cep = $cep;
    $endereco->numero = $numero;
    $endereco->rua = $rua;
    $endereco->bairro = $bairro;
    $endereco->complemento = $complemento;
    $endereco->cidade = $cidade;
    $endereco->estado = $estado;
    $endereco->id_usuario = $id_usuario;

    //var_dump($endereco);

    $endereco->criar();



    header('Location: /adote_me/views/login.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}