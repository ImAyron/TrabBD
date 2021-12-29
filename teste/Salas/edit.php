<?php
require "../User/controllerLogin.php";
if (booleanIsLogged()) {
    header("index.php");
    isLoggedIn();
    hasCargo("ADMIN");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" type='text/css' href="../css/trab.css">
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
    <a style='color:black;font-weight: bold;'href="./User/logout.php"><p><br>Deslogar</p></a>
     
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
        <a class="d-flex justify-content-center text-center" href="Salas/index.php">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="Filmes/index.php">Filmes</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="Ingressos/index.php">Ingressos</a>
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
                <form action="controllerEdit.php" method="post">
                    <br>
                    <label for="numero">Numero:</label>
                   <?php
                     $num_assentos=$_GET['num_assentos'];
                     echo $phpVariable = $_GET['numero'];
                     $tipo=$_GET['tipo'];
                   ?>
                    <input type="hidden" name="numero" value="<?=$phpVariable?>" />

                    <p></p>
                    <label for="num_assentos">num_assentos:</label>
                    <input class="form-control" type="text" placeholder="<?=$num_assentos?>" name="num_assentos" id="num_assentos">
                    <p></p>
                    <label for="tipo">tipo:</label>
                    <select class="form-control"  name="tipo" id="tipo">
                        <option></option>
                        <option>2D</option>
                        <option>3D</option>

                    </select>
                    <br>
                    <input class='btn btn-danger'type="submit" value="Inserir">

                </form>

            </div>
        </div>
        <div class="col">

        </div>

    </div>

</body>

</html>