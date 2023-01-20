<?php
require "Clientes.php";
require "Config.php";

$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$cpf_cnpj  = preg_replace('/\D/', '', $_POST['cpf_cnpj']);
$idade = $_POST['idade'];
$data = $_POST['nascimento'];

$atualizar = new Clientes;

if (strlen($cpf_cnpj) == 14) {
    $atualizar->atualizar($idcliente, $nome, $cpf_cnpj, $idade, $data);
    header("Location: pages/clientes.php");
} else if (strlen($cpf_cnpj) == 11) {
    $atualizar->atualizar($idcliente, $nome, $cpf_cnpj, $idade, $data);
    header("Location: pages/clientes.php");
} else {
    header("Location: pages/editar.php");
}