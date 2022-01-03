<?php

require_once '../dbc/index.php';


$salas = $pdo->query("SELECT * FROM SALA ORDER BY eid,numero ASC");


