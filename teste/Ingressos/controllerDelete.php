<?php

require_once 'index.php';


$ids = $_GET['ids'];
$sid = $_GET['sessao'];

try {
    $stmt = $pdo->prepare("DELETE FROM INGRESSO WHERE id IN (:ids)");
    $stmt->bindParam(":ids", $ids);

    $stmt->execute();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro ao deletar! " . $error->getMessage());
}

header("location:view.php?&id=$sid");

exit();
