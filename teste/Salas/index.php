<?php

require '../dbc/index.php';


// salas
$tabela = $pdo->query("SELECT * FROM sala ORDER BY numero ASC");


require 'view.php';


?>