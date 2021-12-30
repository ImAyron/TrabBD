<?php

require 'index.php';

$qntd = $_POST['quantidade'];
$tipo = $_POST['tipo'];
$tipo = $_POST['sid'];

try {
    for ($count = 1; $count <= $qntd; $count++) {
        $stmt = $pdo->prepare("INSERT INTO INGRESSO (tipo, vendido,sid) VALUES (:tipo, false, :sid)");
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":sid", $sid);

        $stmt->execute();
    }
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro na inserção! " . $error->getMessage());
}

header('location:index.php');
exit();