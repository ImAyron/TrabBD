<?php
$nome_original = $_GET['nome_original'];
$diretor = $_GET['diretor'];
$nome_exibido = $_GET['nome_exibido'];
$sinopse = $_GET['sinopse'];
$etaria = $_GET['etaria'];
$categorias = $_GET['categorias'];
$astros = $_GET['astros'];
$data = $_GET['data'];
$duracao = $_GET['duracao'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="../css/trab.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <style type="text/css">
    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      color: black;
    }

    i {
      font-size: 30px;
    }
  </style>
  <title>Document</title>
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
  <br>
  <div>
    <h3 class="d-flex justify-content-center text-center"><?php echo $nome_exibido; ?></h1>

      <h5 class="d-flex justify-content-center text-center"><?php echo $nome_original ?></h5>
      <br>
  </div>

  <div class="row">

    <div class="col">

    </div>
    <div class="col-8">
      <div class="row">
        <div class="col">

          <p>
          <h6><i class="fas fa-video"></i>
            Diretor</h6><?php echo $diretor ?></p>

          <p>
          <h6><i class="far fa-star"></i> Astros</h6>
          </p>
          <p><?php echo $astros; ?></p>

        </div>
        <div class="col">
          <p>
          <h6><i class="fas fa-film"></i> Duração</h6>

          </p>
          <p><?php echo $duracao ?></p>
          <p>
          <h6><i class="fas fa-tv"></i></i> Estreia</h6>

          </p>
          <p><?php echo $data ?></p>
        </div>
        <div class="col-6">

          <p>
          <h6>Categorias</h6>
          </p>
          <p><?php echo $categorias ?></p>

          <h6>Sinopse</h6>
          <p><?php echo $sinopse; ?></p>
          <p>
          <h6>Indicação classificatória</h6>
          </p>
          <p><button class='btn btn-warning'><?php echo $etaria ?></button></p>
        </div>

        <a href="controllerDelete.php?nome_original=<?= $nome_original ?>&diretor=<?= $diretor ?>"><button class='btn btn-primary'>Excluir</button></a>
      </div>




    </div>
    <div class="col">

    </div>

  </div>


</body>

</html>