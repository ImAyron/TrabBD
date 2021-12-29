<?php

require 'index.php';


$numero=$_POST['numero'];
$num_assentos=$_POST['num_assentos'];
$tipo=$_POST['tipo'];


try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("UPDATE SALA SET num_assentos=:num_assentos, tipo=:tipo WHERE numero=:numero");

    $stmt->bindParam(":numero", $numero);
    $stmt->bindParam(":num_assentos", $num_assentos);
    $stmt->bindParam(":tipo", $tipo);

    $stmt->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro! " . $error->getMessage());
}

header('location:index.php');
exit();
