<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class="fundo">
    <nav class="nav navbar" style="background: linear-gradient(to bottom, #9900cc 0%, #0099ff 100%);">
        <img src="../img/logo.png" alt="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a style="color: #fff;" class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a style="color: #fff;" class="nav-link" href="clientes.php">Clientes</a>
            </li>
        </ul>
        <a style="color: white;" class="navbar-brand nav-link btn" href="../deslogar.php">
            sair
        </a>
    </nav>
    <script>
        const base = '<?= $base; ?>';
    </script>