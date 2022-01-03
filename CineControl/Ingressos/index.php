<?php

require_once '../dbc/index.php';

$id = $_GET['id'];

$ingressos =$pdo->prepare("SELECT * FROM INGRESSO WHERE sid=:id ORDER BY sid,tipo");
$ingressos->bindParam(":id", $id);
$ingressos->execute();

require_once 'view.php';