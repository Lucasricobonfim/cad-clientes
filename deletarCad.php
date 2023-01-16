<?php
require 'config.php';
require 'Clientes.php';

$cad = new Clientes;
$idclientes = $_GET["idcliente"];


if (isset($_GET["idcliente"])) {
    
    $cad->deletar($idclientes);
    header("Location: pages/clientes.php");
}
// $this->redirect('/clientes')
