<?php

require_once 'index.php';

$id = $_POST['id'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$idioma = $_POST['idioma'];
$legendado = $_POST['legendado'];
$duracao = $_POST['duracao'];
$filme = $_POST['filme'];
$diretor = $_POST['diretor'];
$sala = $_POST['sala'];


try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare("UPDATE SESSAO 
    SET data=:data,horario=:horario,idioma=:idioma,legendado=:legendado,duracao=:duracao,fnome=:fnome,fdiretor=:fdiretor
     WHERE id=:id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":data", $data);
    $stmt->bindParam(":horario", $horario);
    $stmt->bindParam(":idioma", $idioma);
    $stmt->bindParam(":legendado", $legendado);
    $stmt->bindParam(":duracao", $duracao);
    $stmt->bindParam(":fnome", $filme);
    $stmt->bindParam(":fdiretor", $diretor);

    $stmt->execute();


    $stmt2 = $pdo->prepare("UPDATE OCORRE_EM SET slnum=:sala WHERE scid=:SESSAO");
    $stmt2->bindParam(":SESSAO",$id);
    $stmt2->bindParam(":sala",$sala);


    $stmt2->execute();

    $pdo->commit();
} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro! " . $error->getMessage());
}

header('location:view.php');

exit();
