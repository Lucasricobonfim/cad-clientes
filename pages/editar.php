<?php
include("../protect.php");
require "../Config.php";
require "../Clientes.php";

protect();
include('partials/header.php');

$edit = new Clientes;
$dados = $edit->listar_edit();

?>
<div class="position-absolute top-50 start-50 translate-middle formCad">
    <h2 class="text-center">editar clientes</h2>
    <form action="../atualizarCad.php" class="" name="editForm" method="post">
        <input value="<?= $dados[0]["idclientes"] ?>" name="idcliente" hidden>
        <input value="<?= $dados[0]["nome"] ?>" type="text" name="nome" placeholder="nome">
        <input maxLength="14" value="<?= $dados[0]["cpf_cnpj"] ?>" id="cpfcnpj" type="text" name="cpf_cnpj" placeholder="cpf_cnpj">
        <input value="<?= $dados[0]["idade"] ?>" type="text" name="idade" placeholder="idade">
        <input value="<?= $dados[0]["nascimento"] ?>" type="date" name="nascimento" placeholder="nascimento">
        <input type="submit" id="btn-editar" value="editar" class="btn btn-warning">
    </form>
</div>
<script defer src="../js/cadastro.js"></script>
<?php include("partials/footer.php"); ?>