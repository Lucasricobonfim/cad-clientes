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
        )";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar o cliente: ' .
                $error->getMessage();
        }
    }
}
