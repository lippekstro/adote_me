<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/configs/config.php';

class Conexao{
    public static function conectar(){
        $conn = new PDO(DRIVE . ':host=' . DBLOC . ';dbname=' . DBNAME, USER, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}