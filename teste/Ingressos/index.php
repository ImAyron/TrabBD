<?php

require '../dbc/index.php';


// salas
$ingressos =$pdo->query("SELECT * FROM INGRESSO ORDER BY sid,tipo");

require 'view.php';