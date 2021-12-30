<?php

require_once 'index.php';


$id=$_GET['id'];

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

header('location:index.php');

exit();

?>