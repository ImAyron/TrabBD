<?php

require_once 'index.php';

$id = $_GET['id'];

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("DELETE FROM SESSAO WHERE id=:id");
    $stmt->bindParam(":id", $id);

    $stmt2 = $pdo->prepare("DELETE FROM OCORRE_EM WHERE scid=:id");
    $stmt2->bindParam(":id", $id);

    $stmt->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro ao deletar! " . $error->getMessage());
}

header('location:view.php');


exit();
