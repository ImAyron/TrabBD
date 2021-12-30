<?php

require 'index.php';


$ids = $_GET['ids'];

try {
    $stmt = $pdo->prepare("DELETE FROM INGRESSO WHERE id IN (:ids)");
    $stmt->bindParam(":ids", $ids);

    $stmt->execute();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro ao deletar! " . $error->getMessage());
}

header('location:index.php');
exit();