<?php

require 'index.php';

$nome_original = $_GET['nome_original'];
$diretor = $_GET['diretor'];

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("DELETE FROM FILME WHERE nome_original=:nome_original AND diretor=:diretor");
    
    $stmt->bindParam(":nome_original", $nome_original);
    $stmt->bindParam(":diretor", $diretor);
    $stmt->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro ao deletar! " . $error->getMessage());
}

header('location:index.php');

exit();
