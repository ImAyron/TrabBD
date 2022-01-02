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
  <title>Document</title>
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

  

  </div>


  <div class="row">
    <div class="col">

    </div>
    <div class="col-8">
      <br>
      <?php require_once "../User/controllerLogin.php"; ?>
      <a href="insert.php"><button class="btn btn-primary">Inserir Nova Sala</button></a>
      <br>
      <br>
      <table class="table table-active table-striped ">
        <tr>
          <th scope="col">Numero</th>
          <th scope="col">qtd assentos</th>
          <th scope="col">Tipo</th>
          <th scope="col">Estabelecimento</th>
          <th scope="col">Editar</th>
        </tr>

        <?php
        require_once 'index.php';


        while ($c = $salas->fetch()) {
          $numero = $c["numero"];
          $num_assentos = $c["num_assentos"];
          $tipo = $c["tipo"];
          $estabelecimento = $c["eid"];

          echo  "<tr><td>" . $c["numero"] . "</td>" .
            "<td>" . $c["num_assentos"] . "</td>" .
            "<td>" . $c["tipo"] . "<br></td> " .
            "<td>" . $c["eid"] . "<br></td> " .
            "<td><a href='/TRABBD/teste/Salas/edit.php?&numero=$numero&num_assentos= $num_assentos&tipo=$tipo&estabelecimento=$estabelecimento'><button class='btn btn-primary'>Editar</button></a></td>";
        }

        ?>

      </table>
    </div>
    <div class="col">

    </div>
  </div>


</body>

</html>