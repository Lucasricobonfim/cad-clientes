<?php
require 'config.php';
require 'Clientes.php';


$cad = new Clientes;
$nome  = $_POST['nome'];
$cpf_cnpj  = $_POST['cpf_cnpj'];
$idade  = $_POST['idade'];
$nascimento  = $_POST['nascimento'];

if (!empty($nome) && !empty($cpf_cnpj) && !empty($idade) && !empty($nascimento)) {
    $cad->cadastrar($nome, $cpf_cnpj, $idade, $nascimento);
    header('Location: pages/cadastro.php');
    echo 'deu certo';
} else {
    header('Location: pages/cadastro.php');
    echo 'Preencha todos os campos';
}
