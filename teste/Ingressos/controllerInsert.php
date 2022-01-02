<?php

require_once "../dbc/index.php";

$qntd = $_POST['quantidade'];
$tipo = $_POST['tipo'];
$sid = $_POST['sid'];

print_r($_POST);

try {

    for ($count = 1; $count <= $qntd; $count++) {
        $stmt = $pdo->prepare("INSERT INTO INGRESSO (tipo, vendido, sid) VALUES (:tipo, false, :sid)");
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":sid", $sid);

        $stmt->execute();
    }
} catch (Exception $error) {
    die("Erro na inserção! " . $error->getMessage());
}

header("location:view.php?&id=$sid");

exit();
