<?php
include("../protect.php");
protect();

include('header.php'); ?>
<div class="position-absolute top-50 start-50 translate-middle formCad">
    <h2 class="text-center">Cadastro e clientes</h2>
    <form action="../validarCad.php" class="" method="post">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="cpf_cnpj" placeholder="cpf_cnpj">
        <input type="text" name="idade" placeholder="idade">
        <input type="date" name="nascimento" placeholder="nascimento">
        <input type="submit" class="btn btn-warning" >
    </form>
</div>
<?php include("footer.php"); ?>