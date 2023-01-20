<?php
require 'config.php';
require 'Clientes.php';


$cad = new Clientes;
$nome  = $_POST['nome'];
$cpf_cnpj  = preg_replace('/\D/', '', $_POST['cpf_cnpj']);
$idade  = $_POST['idade'];
$nascimento  = $_POST['nascimento'];


$dados = $cad->verificarCpf($cpf_cnpj);

if ($dados[0]['existecpf'] == 0) {
    if (!empty($nome) && !empty($cpf_cnpj) && !empty($idade) && !empty($nascimento)) {
        $cad->cadastrar($nome, $cpf_cnpj, $idade, $nascimento);
        header("Location: pages/clientes.php");
    }else{
    header("Location: pages/cadastro.php");
    }
} else {
    header("Location: pages/cadastro.php?erro=1");
}
