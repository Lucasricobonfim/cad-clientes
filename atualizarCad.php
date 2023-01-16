<?php
require "Clientes.php";
require "Config.php";

$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$idade = $_POST['idade'];
$data = $_POST['nascimento'];

$atualizar = new Clientes;

$atualizar->atualizar($idcliente, $nome, $cpf_cnpj, $idade, $data);

header("Location: pages/clientes.php");