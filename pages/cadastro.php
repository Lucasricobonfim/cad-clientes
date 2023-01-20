<?php
include("../protect.php");
protect();

include('partials/header.php');

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

if ($erro == 1) {
}


?>
<div class="position-absolute top-50 start-50 translate-middle formCad">
    <?php echo $erro == 1 ? '<h3 style=" width:400px;padding: 5px;background: #0C1931;color:#F0321F; text-align: center;">cpf/cnpj ja esta sendo usado</h3>' : '' ?>
    <h2 class="text-center">Cadastro de clientes</h2>
    <form action="../validarCad.php" class="" method="post">
        <input type="text" name="nome" placeholder="nome">
        <input id="cpfcnpj" name="cpf_cnpj" type="text" placeholder="cpf_cnpj">
        <input type="text" name="idade" placeholder="idade">
        <input type="date" name="nascimento" placeholder="nascimento">
        <input type="submit" class="btn btn-warning">
    </form>
</div>
<script defer src="../js/cadastro.js"></script>
<?php include("partials/footer.php"); ?>