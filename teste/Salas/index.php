<?php

require '../dbc/index.php';


$salas = $pdo->query("SELECT * FROM SALA ORDER BY eid,numero ASC");


require_once 'view.php';
