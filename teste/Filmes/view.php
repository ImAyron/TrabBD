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
  <br>
  <?php require_once "../User/controllerLogin.php"; ?>
    

  <div class="row">
    <div class="col-2">

    </div>
    <div class="col">
      <br>
      <a href="insert.php"><button class="btn btn-primary">Inserir Novo Filme</button></a>
      <br>
      <br>

      <table class="table table-active table-bordered  table-striped ">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Diretor</th>

          <th scope="col">Categoria</th>

          <th scope="col">Vizualizar</th>
          <th scope="col">Editar</th>

        </tr>



        <?php

        require_once "index.php";

        while ($c = $filmes->fetch()) {
          $phpVariable = $c["nome_original"];
          $p0=$c['nome_exibido'];
          $p1=$c["diretor"];
          $p2=$c["sinopse"];
          $p3=$c['classificacao_etaria'];
          $p4=$c['categorias'];
          $p7=$c['astros'];
          $p5=$c['data_estreia'];
          $p6=$c['duracao'];


          echo  "<tr><td>" . $c["nome_exibido"] . "</td>" .
            "<td>" . $c["diretor"] . "</td>" .
            "<td>" . $c["categorias"] . "<br></td> " .
            "<td>" . "<a href='show.php?nome_original=$phpVariable&diretor=$p1&nome_exibido=$p0&sinopse=$p2&etaria=$p3&categorias=$p4&astros=$p7&data=$p5&duracao=$p6' ><button class='btn btn-primary'>Vizualizar</button></a>" . "<br></td> " .
            "<td>" . "<a href='edit.php?nome_original=$phpVariable&diretor=$p1&nome_exibido=$p0&sinopse=$p2&etaria=$p3&categorias=$p4&astros=$p7&data=$p5&duracao=$p6' ><button class='btn btn-primary'>Editar</button></a>" . "<br></td> " .
           
            "</tr>";
        }

        ?>

      </table>
    
    </div>
    <div class="col-2">

    </div>

  </div>


</body>

</html>