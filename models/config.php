<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');

try {
    // DSN (Data Source Name)
    $dsn = "mysql:host=" . HOST . ";dbname=sadoteme;charset=utf8";

    $con = new PDO($dsn, USER, PASS);

    // Configuração para lançar exceções em caso de erros
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro de Conexão: " . $e->getMessage());
}
?>



