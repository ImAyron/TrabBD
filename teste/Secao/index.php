<?php

require '../dbc/index.php';



$tabela = $pdo->query("SELECT id,data,horario,idioma,legendado,duracao,fnome,fdiretor,slnum FROM SECAO INNER JOIN OCORRE_EM ON SECAO.id = OCORRE_EM.scid ORDER BY slnum,data,horario ASC");


require 'view.php';