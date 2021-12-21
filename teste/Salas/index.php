<?php

require '../dbc/index.php';


// salas
$salas = $pdo->query("SELECT * FROM sala ORDER BY numero ASC");


require 'view.php';


?>