<?php

$login = $_GET["login"];
$senha = $_GET["senha"];

if ($senha === '123' && $login === 'lucas.bonfim') {
    header("Location: pages/cadastro.php");
} else {
    echo 'erro';
    die;
}
