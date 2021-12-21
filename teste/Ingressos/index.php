<?php

require '../dbc/index.php';


// salas
$tabela = $pdo->query("SELECT * FROM ingresso ");
$ingressos =$pdo->query("SELECT count(*) FROM ingresso where vendido='true'");

require 'view.php';


?>