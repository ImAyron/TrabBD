<?php

require '../dbc/index.php';

$stmt = $pdo->query("SELECT * FROM SALA ORDER BY eid,numero ASC");

require 'view.php';


?>