<?php

require 'index.php';


$numero=$_POST['numero'];
$num_assentos=$_POST['num_assentos'];
$tipo=$_POST['tipo'];


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

header('location:index.php');
exit();

?>