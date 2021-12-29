<?php

require '../dbc/index.php';



$tabela = $pdo->query("SELECT * FROM FILME ORDER BY nome_original ASC");


require 'view.php';


?>