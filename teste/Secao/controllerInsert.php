<?php

require 'index.php';

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

    $stmt1 = $pdo->prepare("INSERT INTO SECAO (data,horario,idioma,legendado,duracao,fnome,fdiretor)
     VALUES (:data,:horario,:idioma,:legendado,:duracao,:fnome,:fdiretor)");

    $stmt1->bindParam(":data", $data);
    $stmt1->bindParam(":horario", $horario);
    $stmt1->bindParam(":idioma", $idioma);
    $stmt1->bindParam(":legendado", $legendado);
    $stmt1->bindParam(":duracao", $duracao);
    $stmt1->bindParam(":fnome", $filme);
    $stmt1->bindParam(":fdiretor", $diretor);


    $stmt1->execute();
    $pdo->commit();

    $pdo->beginTransaction();

    $stmt2 = $pdo->prepare("SELECT * FROM SECAO WHERE data=:data AND horario=:horario AND fnome=:fnome");
    $stmt2->bindParam(":data", $data);
    $stmt2->bindParam(":horario", $horario);
    $stmt2->bindParam(":fnome", $filme);
    $stmt2->execute();

    $pdo->commit();

    $pdo->beginTransaction();

    $stmt3 = $pdo->prepare("INSERT INTO OCORRE_EM (scid,slnum) VALUES (:secao,:sala)");
    $stmt3->bindParam(":secao",$stmt2->fetch());
    $stmt3->bindParam(":sala",$sala);
    $pdo->commit();


} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro na inserção! " . $error->getMessage());
}

header('location:index.php');
exit();