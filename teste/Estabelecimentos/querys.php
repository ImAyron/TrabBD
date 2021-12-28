<?php

function filtroTodasAsEstabelecimentos()
{
    require '../dbc/index.php';

    $stmt = $pdo->query("SELECT * FROM ESTABELECIMENTO ORDER BY cep");

    return $stmt->fetchAll();
}

function inserirEstabelecimentos($cep, $end_num, $num_salas, $telefone)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO ESTABELECIMENTO (cep, end_num, num_salas, telefone) VALUES (:cep, :end_num, :num_salas, :telefone)");

        $stmt->bindParam(":cep", $cep);
        $stmt->bindParam(":end_num", $end_num);
        $stmt->bindParam(":num_salas", $num_salas);
        $stmt->bindParam(":telefone", $telefone);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro na inserção! " . $error->getMessage());
    }
}

function editarEstabelecimento($id, $cep, $end_num, $num_salas, $telefone)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("UPDATE ESTABELECIMENTO SET cep=:cep, end_num=:end_num, num_salas=:num_salas, telefone=:telefone WHERE id=:id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":cep", $cep);
        $stmt->bindParam(":end_num", $end_num);
        $stmt->bindParam(":num_salas", $num_salas);
        $stmt->bindParam(":telefone", $telefone);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarEstabelecimento($id)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("DELETE FROM ESTABELECIMENTO WHERE id=:id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}
