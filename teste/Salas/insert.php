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
  <title>Inserir Salas</title>
</head>

<body>
  <div class="row">
    <div class="d-flex justify-content-center text-center col " style="background-color:white;">
      <a href="../index.php"> <img class="img-thumbnail" src="../Imagens/cineControl.png" alt=""></a>

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
          <label for="numero">Número da sala:</label>
          <input class="form-control" type="number" name="numero" id="numero">
          <p></p>
          <label for="num_assentos">Número de assentos:</label>
          <input class="form-control" type="number" name="num_assentos" id="num_assentos">
          <p></p>
          <label for="tipo">Tipo de sala:</label>
          <select class="form-control" name="tipo" id="tipo">
            <option selected disabled>Selecione o tipo</option>
            <option value="2D">2D</option>
            <option value="3D">3D</option>
          </select>
          <p></p>
          <label for="sala">Estabelecimento:</label>
          <select class="form-control" name="estabelecimento" id="estabelecimento">
            <option selected disabled>Selecione o tipo</option>
            <?php
            include_once "../Estabelecimentos/index.php";

            while ($est = $estabelecimento->fetch()) {

              echo '<option class="form-control">' . $est['id'] . '</option>';
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