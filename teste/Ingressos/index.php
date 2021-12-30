<?php

require '../dbc/index.php';


$ingressos =$pdo->query("SELECT * FROM INGRESSO ORDER BY sid,tipo");

require 'view.php';