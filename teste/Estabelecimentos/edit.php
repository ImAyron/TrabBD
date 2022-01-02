<?php
require_once "../User/controllerLogin.php";

if (booleanIsLogged()) {
  header("index.php");
  isLoggedIn();
  hasCargo("ADMIN");
}

$cep=$_GET['cep'];
$end_num=$_GET['end_num'];
$num_salas=$_GET['num_salas'];
$telefone=$_GET['telefone'];
$id=$_GET['id'];

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
  <title>Inserir Salas</title>
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

      if (!booleanIsLogged()) {
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
        <form action="./controllerEdit.php" method="post">
          <input type="hidden" name="id" id=""value="<?= $id ?>">
          <br><br>
          <label for="cep">CEP:</label>
          <input disabled class="form-control" type="text" name="cep" id="cep" value="<?= $cep ?>">
          <p></p>
          <input type="hidden" value="<?= $cep ?>" name="cep" id="">
          <label for="end_num">Número do Endereço:</label>
          <input class="form-control" type="number" name="end_num" value="<?= $end_num ?>">
          <p></p>
          <label for="num_salas">Número de Salas:</label>
          <input class="form-control" type="number" name="num_salas"  value="<?= $num_salas?>">
          <p></p>
          <label for="telefone">Telefone:</label>
          <input class="form-control" type="number" name="telefone"  value="<?= $telefone ?>">

          <br>
          <input class='btn btn-danger' type="submit" value="Atualizar">

        </form>
<br>
        <a href="controllerDelete.php?id=<?=$id?>"><button class='btn btn-primary'>Excluir</button></a>

      </div>
    </div>
    <div class="col">

    </div>

  </div>

</body>

</html>