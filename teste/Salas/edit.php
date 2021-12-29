<?php
require "../User/controllerLogin.php";
require "./querys.php";
if (booleanIsLogged()) {
  header("index.php");
  isLoggedIn();
  hasCargo("ADMIN");
}

$num_assentos = $_GET['num_assentos'];
$numero = $_GET['numero'];
$tipo = $_GET['tipo'];
$estabelecimento = $_GET['estabelecimento'];


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
  <title>Editar Salas</title>
</head>

<body>


  <div class="row">
    <div class="d-flex justify-content-center text-center col " style="background-color:white;">
      <a href="index.php"> <img class="img-thumbnail" src="../imagens/cineControl.png" alt=""></a>

    </div>

    <div class="col-10 " style="background-color: white;">

    </div>
    <div class=" col" style="background-color: white;">
      <a style='color:black;font-weight: bold;' href="./User/logout.php">
        <p><br>Deslogar</p>
      </a>

    </div>
  </div>
  <div class="col " style="background-color: grey;">

    <div class="row ">

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="../index.php">Home</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="index.php">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="../Filmes/index.php">Filmes</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="../Ingressos/index.php">Ingressos</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="sessões.html">Sessões</a>
        <br>
      </div>
    </div>
  </div>
  </div>


  <div class="row">
    <div class="col">

    </div>
    <div class="col-8" style="font-weight:bold;">
      <div class='form-group'>
        <form action="./controllerEdit.php" method="post">
          <br><br>
          <label for="numero">Número da sala:</label>
          <input disabled class="form-control" type="number" value= "<?=$numero ?>" placeholder="<?= $numero ?>"  id="numero">
              
                   <?php
                    
                     $phpVariable = $_GET['numero'];
                     
                   ?>
                    <input type="hidden" name="numero" value="<?=$phpVariable?>" />

          <p></p>
          <label for="num_assentos">Número de assentos:</label>
          <input class="form-control" type="number" placeholder="<?= $num_assentos ?>" name="num_assentos" id="num_assentos">
          <p></p>
          <label for="tipo">Tipo de sala:</label>
          <select class="form-control" name="tipo" id="tipo" default="3D">
            <option <?php if ($tipo == '2D') echo ("selected"); ?>>2D</option>
            <option <?php if ($tipo == '3D') echo ("selected"); ?>>3D</option>
          </select>
          <br>
          <input class='btn btn-danger' type="submit" value="Inserir">
          <a href="controllerDelete.php?numero=<?=$phpVariable?>"><button class='btn btn-primary'>Excluir</button></a>
        </form>
       
      </div>
    </div>
    <div class="col">

    </div>

  </div>

</body>

</html>