<?php

require 'index.php';

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

header('location:index.php');
exit();
