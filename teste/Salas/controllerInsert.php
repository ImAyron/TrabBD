<?php

require_once 'index.php';


$numero=$_POST['numero'];
$num_assentos=$_POST['num_assentos'];
$tipo=$_POST['tipo'];
$eid=$_POST['sala'];


try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("INSERT INTO SALA (numero, num_assentos, tipo, eid) VALUES (:numero, :num_assentos, :tipo, :eid)");

    $stmt->bindParam(":numero", $numero);
    $stmt->bindParam(":num_assentos", $num_assentos);
    $stmt->bindParam(":tipo", $tipo);
    $stmt->bindParam(":eid", $eid);

    $stmt->execute();

    $pdo->commit();

    require_once '../Ingressos/controllerInsert.php';


} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro na inserção! " . $error->getMessage());
}

header('location:view.php');

exit();
