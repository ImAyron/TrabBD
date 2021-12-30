<?php

require_once 'index.php';

$data = $_POST['data'];
$horario = $_POST['horario'];
$idioma = $_POST['idioma'];
$legendado = $_POST['legendado'];
$duracao = $_POST['duracao'];
$filme = explode(" - ",$_POST['filme'])[0];
$diretor = explode(" - ",$_POST['filme'])[1];
$sala = explode(" - ",$_POST['sala'])[1];

try {

    $pdo->beginTransaction();

    $stmt1 = $pdo->prepare("INSERT INTO SESSAO (data,horario,idioma,legendado,duracao,fnome,fdiretor)
     VALUES (:data,:horario,:idioma,:legendado,:duracao,:fnome,:fdiretor)");

    $stmt1->bindParam(":data", $data);
    $stmt1->bindParam(":horario", $horario);
    $stmt1->bindParam(":idioma", $idioma);
    $stmt1->bindParam(":legendado", $legendado);
    $stmt1->bindParam(":duracao", $duracao);
    $stmt1->bindParam(":fnome", $filme);
    $stmt1->bindParam(":fdiretor", $diretor);

    $stmt1->execute();


    $stmt2 = $pdo->prepare("SELECT id FROM SESSAO WHERE data=:data AND horario=:horario AND fnome=:fnome
    EXCEPT SELECT scid FROM OCORRE_EM WHERE slnum NOT IN (:sala)");
    $stmt2->bindParam(":data", $data);
    $stmt2->bindParam(":horario", $horario);
    $stmt2->bindParam(":fnome", $filme);
    $stmt2->bindParam(":sala", $sala);

    $stmt2->execute();


    $stmt3 = $pdo->prepare("INSERT INTO OCORRE_EM (scid,slnum) VALUES (:SESSAO,:sala)");
    $stmt3->bindParam(":SESSAO",$stmt2->fetch()[0]);
    $stmt3->bindParam(":sala",$sala);
   
    $stmt2->execute();

    $stmt4 = $pdo->prepare("SELECT slnum FROM SALA WHERE numero=:sala");
    $stmt4->bindParam(":sala",$sala);
   

    $pdo->commit();

    require_once "../Ingressos/controllerInsert.php";
    addIngressos($stmt4->fetch(), "MEIA", $sala);


} catch (Exception $error) {
    $pdo->rollBack();
    die("Erro na inserção! " . $error->getMessage());
}

header('location:index.php');
exit();