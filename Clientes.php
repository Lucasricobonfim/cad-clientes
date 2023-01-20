<?php


class Clientes
{

    public function cadastrar($nome, $cpf_cnpj, $idade, $nascimento)
    {
        global $pdo;

        try {
            $sql = "INSERT INTO gazin.clientes  (
            nome, cpf_cnpj, idade, nascimento) 
        VALUES 
        (
            '$nome', 
            '$cpf_cnpj',
             $idade, 
            '$nascimento'
        ) ON CONFLICT ON CONSTRAINT clientes_pk DO NOTHING ";

            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar o cliente: ' .
                $error->getMessage();
        }
    }

    public function verificarCpf($cpf_cnpj)
    {
        global $pdo;

        try {
            $sql = "SELECT CASE WHEN EXISTS(select 1 from gazin.clientes where cpf_cnpj='$cpf_cnpj') then 1 else 0 end as existecpf ";

            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar o cliente: ' .
                $error->getMessage();
        }
    }


    public function listar()
    {

        global $pdo;

        try {
            $sql = "
            SELECT
                *
            FROM 
                gazin.clientes 
                ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar os clientes cadastrados: ' . $error->getMessage();
        }
    }

    public function deletar($idclientes)
    {
        global $pdo;

        try {
            $sql = "
            DELETE
             FROM 
                gazin.clientes 
            WHERE 
                idclientes = $idclientes
            ;
            ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao deletar o cadastro desse cliente: ' . $error->getMessage();
        }
    }


    public function listar_edit()
    {
        global $pdo;

        $idcliente = $_GET["id"];
        try {
            $sql = "
            SELECT
                *
            FROM 
                gazin.clientes 
            WHERE idclientes= " . $idcliente . "
                ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar o clientes ' . $error->getMessage();
        }
    }


    public function atualizar($idcliente, $nome, $cpf_cnpj, $idade, $data)
    {
        global $pdo;

        try {
            $sql = "
            UPDATE 
                gazin.clientes
            SET 
                nome='".$nome ."',cpf_cnpj='".$cpf_cnpj."',idade='".$idade."',nascimento ='".$data."'
            WHERE 
                idclientes=".$idcliente."
            ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao atualizar o cadastro do cliente: ' . $error->getMessage();
        }
    }
}
