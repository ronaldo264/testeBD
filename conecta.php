<?php
    @define(HOST, "localhost");
    @define(DB, "testeBanco");
    @define(USER,"root");
    @define(PASS,"");
    
    try {
    $dsn = "mysql:host=" . HOST . ";dbname=" . DB;
    $con = new PDO($dsn, USER, PASS);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo"Erro ao Selecionar o Banco de Dados" . $e->getMessage();
}