<?php

require_once '../dbc/index.php';


$ingressos =$pdo->query("SELECT * FROM INGRESSO ORDER BY sid,tipo");

require_once 'view.php';