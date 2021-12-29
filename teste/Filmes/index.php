<?php

require '../dbc/index.php';


// salas

$tabela = $pdo->query("SELECT * FROM FILME ORDER BY nome_original ASC");


require 'view.php';


?>