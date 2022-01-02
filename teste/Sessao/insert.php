<?php
require_once "../Salas/index.php";
require_once "../Filmes/index.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="../css/trab.css">
  <style type="text/css">
    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      color: black;
    }
  </style>
  <title>Inserir Sessão</title>
</head>

<body>
<div class="row">
    <div class="d-flex justify-content-center text-center col " style="background-color:white;">
      <a href="index.php"> <img class="img-thumbnail" src="../Imagens/cineControl.png" alt=""></a>

    </div>

    <div class="col-10 " style="background-color: white;">

    </div>
    <div class=" col" style="background-color: white;">
      <?php
      require_once "../User/controllerLogin.php";

      if (booleanIsLogged()) {
      ?>
        <a style='color:black;font-weight: bold;' href="../User/logout.php">
          <p><br>Deslogar</p>
        </a>
      <?php
      }
      ?>
    </div>


  </div>
  <div class="col " style="background-color: grey;">

    <div class="row ">

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../Filmes/view.php">Filmes</a>
        <br>
      </div>

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../Sessao/view.php">Sessões</a>
        <br>
      </div>

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../Salas/view.php">Salas</a>
        <br>
      </div>

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../Estabelecimentos/view.php">Estabelecimentos</a>
        <br>
      </div>

    </div>


  </div>

  <div class="row">
    <div class="col">

    </div>
    <div class="col-8" style="color:black;font-weight: bold;">
      <div class='form-group'>
        <form action="controllerInsert.php" method="post">
          <br><br>
          <label for="sala">Sala:</label>
          <select class="form-control" name="sala" id="sala">
            <option selected disabled>Estabelecimento - Sala</option>
            <?php

            while ($sala = $salas->fetch()) {

              echo '<option class="form-control">'  . $sala['eid'] . "\t-\t"  . $sala['numero'] . '</option>';
            }
            ?>
          </select>
          <br>

          <label for="data">Data:</label>
          <input class="form-control" type="date" name="data" id="data">
          <p></p>

          <label for="horario">Horário:</label>
          <input class="form-control" type="time" name="horario" id="horario">
          <p></p>

          <label for="idioma">Idioma</label>
          <input class="form-control" type="text" name="idioma" id="idioma">
          <p></p>

          <label for="legendado">Legendado?</label><br>
          <input type="radio" name="legendado" id="sim" value="true">
          <label for="sim">Sim</label>
          <input type="radio" name="legendado" id="nao" value="false">
          <label for="nao">Não</label>
          <p></p>

          <label for="duracao">Duração:</label>
          <input class="form-control" type="time" name="duracao" id="duracao">
          <p></p>

          
          <label for="filme">Filme:</label>
          <select class="form-control" name="filme" id="filme">
            <option selected disabled>Selecione o filme</option>
            <?php

            while ($filme = $filmes->fetch()) {

              echo '<option class="form-control">'  . $filme['nome_original'] . "\t-\t"  . $filme['diretor'] . '</option>';
            }
            ?>
          </select>
          <br>
          <input class='btn btn-danger' type="submit" value="Inserir">

        </form>

      </div>
    </div>
    <div class="col">

    </div>

  </div>

</body>

</html>