<?php

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
  <br>
  <div>
    <div class="row">
      <div class="col">
        <div class="row">
          <div class="col"></div>
          <div class="col-10">
            <h3 style="color: #ef481f;">Melhores Diretores <i class="fas fa-trophy"></i></h3>
            <table  class="table table-bordered table-warning table-active table-striped ">
            
            
            <tr>
                    <th scope="col">Filme</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Idioma</th>
                  

                </tr>
                <tr>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                </tr>
                </table>
          </div>
          <div class="col"></div>
          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="row">
          <div class="col"></div>
          <div class="col-10">
            <h3 style="color: #ef481f;">Melhores Diretores <i class="fas fa-trophy"></i></h3>
            <table  class="table table-bordered table-active table-active table-striped ">
            
            
            <tr >
                    <th scope="col">Filme</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Idioma</th>
                  

                </tr>
                <tr>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                </tr>
                </table>
          </div>
          <div class="col"></div>
          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="row">
          <div class="col"></div>
          <div class="col-10">
            <h3 style="color: #ef481f;">Melhores Filmes<i class="fas fa-trophy"></i></h3>
            <table  class="table table-bordered table-danger table-active table-striped ">
            
            
            <tr>
                    <th scope="col">Filme</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Idioma</th>
                  

                </tr>
                <tr>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                  <td>
                  Filme
                  </td>
                </tr>
                </table>
          </div>
          <div class="col"></div>
          
        </div>
      </div>
    </div>




  </div>


  </div>


</body>

</html>