<?php

function filtroTodasAsSalas()
{
    require '../dbc/index.php';

    $stmt = $pdo->query("SELECT * FROM SALA ORDER BY numero");

    return $stmt->fetchAll();
}

function inserirSalas($numero, $num_assentos, $tipo, $eid)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO SALA (numero, num_assentos, tipo, eid) VALUES (:numero, :num_assentos, :tipo, :eid)");

        $stmt->bindParam(":numero", $numero);
        $stmt->bindParam(":num_assentos", $num_assentos);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":eid", $eid);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro na inserção! " . $error->getMessage());
    }
}

function editarSala($numero, $num_assentos, $tipo, $eid)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("UPDATE SALA SET num_assentos=:num_assentos, tipo=:tipo, eid=:eid WHERE numero=:numero");

        $stmt->bindParam(":numero", $numero);
        $stmt->bindParam(":num_assentos", $num_assentos);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":eid", $eid);

        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro! " . $error->getMessage());
    }
}

function deletarSala($numero)
{
    require '../dbc/index.php';

    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("DELETE FROM SALA WHERE numero=:numero");

        $stmt->bindParam(":numero", $numero);
        $stmt->execute();

        $pdo->commit();
    } catch (Exception $error) {
        $pdo->rollBack();
        die("Erro ao deletar! " . $error->getMessage());
    }
}
