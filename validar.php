<?php

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require 'config.php';
    require 'Usuario.php';

    $u = new Usuario;

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ($u->logar($login, $senha) == true) {
        if (isset($_SESSION['idUser'])) {
            header("Location: pages/cadastro.php");
        } else {
            header("Location: pages/login.php");
        }
    } else {
        header("Location: pages/login.php");
    }
} else {
    header("Location: pages/login.php");
}

