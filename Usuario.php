<?php

class Usuario
{
    public function logar($login, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM gazin.usuario WHERE login = :login AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("login", $login);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado['idusuario'];
            return true;

        }else{
            return false;
        }
    }
}
