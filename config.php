<?php

session_start();

$endereco =  'localhost';
$banco  = 'cadclientes';
$usuario = 'postgres';
$senha = 'admin';

global $pdo;

try {
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo 'Conectado com sucesso';
} catch (PDOException $e) {
    echo 'falha ao conectar com o banco';
    die($e->getMessage());
}
