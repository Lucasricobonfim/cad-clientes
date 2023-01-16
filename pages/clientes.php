<?php
require "../Config.php";
include("../protect.php");
protect();
include('partials/header.php');


require "../Clientes.php";

$Clientes = new Clientes;
?>
<main class="">
    <h2 class="text-center mt-5" style="color: white;">Clientes Cadastrados</h2>
    <div class="tabelapos">
        <table class="table tabela">
            <input id="buscar" type="text" class="form-control" placeholder="buscar">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">Nome</th>
                    <th scope="col">cpf_cnpj</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody class="table-primary tabb tabs">
                <?php $res = $Clientes->listar();
                foreach ($res as $val) { ?>
                    <tr class="conteudo">
                        <td><a href="editar.php?id=<?= $val["idclientes"] ?>"><i class="bi bi-pen-fill"></i></a></td>
                        <td><?= $val["nome"] ?></td>
                        <td><?= $val["cpf_cnpj"] ?></td>
                        <td><?= $val["idade"] ?></td>
                        <td><?= $val["nascimento"] ?></td>
                        <td><a onclick="javascript: if (confirm('Você realmente deseja excluir esta registro?'))location.href='../deletarCad.php?idcliente=<?= $val["idclientes"] ?>' " style="color: red;"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</main>
<script defer src="../js/clientes.js"></script>
<?php include("partials/footer.php"); ?>