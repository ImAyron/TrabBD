<?php

require 'index.php';

$id = $_POST['id'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$idioma = $_POST['idioma'];
$legendado = $_POST['legendado'];
$duracao = $_POST['duracao'];
$filme = $_POST['filme'];
$diretor = $_POST['diretor'];


try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("UPDATE SECAO SET data=:data,horario=:horario,idioma=:idioma,legendado=:legendado,duracao=:duracao,fnome=:fnome,fdiretor=:fdiretor WHERE id=:id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":data", $data);
    $stmt->bindParam(":horario", $horario);
    $stmt->bindParam(":idioma", $idioma);
    $stmt->bindParam(":legendado", $legendado);
    $stmt->bindParam(":duracao", $duracao);
    $stmt->bindParam(":fnome", $filme);
    $stmt->bindParam(":fdiretor", $diretor);

    $stmt->execute();
    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro! " . $error->getMessage());
}

header('location:index.php');
exit();
