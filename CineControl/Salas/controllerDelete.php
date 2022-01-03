<?php

require_once 'index.php';


$numero=$_GET['numero'];

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

header('location:view.php');

exit();
