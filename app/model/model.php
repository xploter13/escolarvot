<?php

require '../database/connect.php';

// Pega o login do usuário
function getLogin($login, $password)
{
    $pdo = connect();
    try {
        $query = $pdo->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?");
        $query->bindValue(1, $login, PDO::PARAM_STR);
        $query->bindValue(2, $password, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() === 1)
        {
            return $query->fetch(PDO::FETCH_OBJ);
        }
        else
        {
            return FALSE;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function insertNewUser($name, $login, $password, $category)
{
    $pdo = connect();
    try {
        $query = $pdo->prepare("INSERT INTO usuario (nome, login, senha, categoria) VALUES (?, ?, ?, ?)");
        $query->bindValue(1, $name, PDO::PARAM_STR);
        $query->bindValue(2, $login, PDO::PARAM_STR);
        $query->bindValue(3, $password, PDO::PARAM_STR);
        $query->bindValue(4, $category, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) :
            return TRUE;
        else :
            return FALSE;
        endif;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function insertClass($class)
{
    $pdo = connect();
    try {
        $query = $pdo->prepare("INSERT INTO turma (turma) VALUES (?)");
        $query->bindValue(1, $class, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) :
            return TRUE;
        else :
            return FALSE;
        endif;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function insertRepresentative($idClass, $plate, $nameRepre, $nameViceRepre, $numInsc)
{
    $pdo = connect();
    try {
        $query = $pdo->prepare("INSERT INTO representante (id_turma, nome_chapa, nome_repre, nome_vice_repre, num_insc) VALUES (?, ?, ?, ?, ?)");
        $query->bindValue(1, $idClass, PDO::PARAM_STR);
        $query->bindValue(2, $plate, PDO::PARAM_STR);
        $query->bindValue(3, $nameRepre, PDO::PARAM_STR);
        $query->bindValue(4, $nameViceRepre, PDO::PARAM_STR);
        $query->bindValue(5, $numInsc, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) :
            return TRUE;
        else :
            return FALSE;
        endif;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getRepresentative($numInsc)
{
    $pdo = connect();
    try {
        $query = $pdo->prepare("SELECT T1.id AS 'id_representante', T1.id_turma, T1.nome_chapa, T1.nome_repre,
                 T1.nome_vice_repre, T1.num_insc, T2.* FROM representante AS T1
                 INNER JOIN turma AS T2 WHERE T1.num_insc = ? AND T1.id_turma = T2.id");
        $query->bindValue(1, $numInsc, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() === 1)
        {
            return $query->fetch(PDO::FETCH_OBJ);
        }
        else
        {
            return FALSE;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

$countVot = 1;

//Fazer a funcao para pegar a qtd de votos e somar

function Votation($class, $shape, $idRepre)
{
    $pdo = connect();
    global $countVot;
    try {
        $iQuery = $pdo->prepare("SELECT * FROM votos WHERE id_representante = ?");
        $iQuery->bindValue(1, $idRepre, PDO::PARAM_STR);
        $iQuery->execute();

        if ($iQuery->rowCount() === 1) {

            foreach ($iQuery as $row) {
                $countVot = $row['qtd_votos'] + 1;
            }

            $up = $pdo->prepare("UPDATE votos SET qtd_votos={$countVot} WHERE id_representante={$idRepre}");
            $up->execute();
            return TRUE;
        }
        else
        {
            $query = $pdo->prepare("INSERT INTO votos (turma, chapa, id_representante, qtd_votos) VALUES (?, ?, ?, ?)");
            $query->bindValue(1, $class, PDO::PARAM_STR);
            $query->bindValue(2, $shape, PDO::PARAM_STR);
            $query->bindValue(3, $idRepre, PDO::PARAM_STR);
            $query->bindValue(4, $countVot, PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() > 0)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
