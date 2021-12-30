<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="../css/trab.css">
  <style type="text/css">
    a{
      text-decoration: none;
      color: white;
    }
    a:hover{
      color: black;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <div class="row">
    <div class="d-flex justify-content-center text-center col " style="background-color:white;">
      <a href="../index.php"> <img class="img-thumbnail" src="../imagens/cineControl.png" alt=""></a>

    </div>

    <div class="col-10 " style="background-color: white;">

    </div>
    <div class=" col" style="background-color: white;">
      <a style='color:black;font-weight: bold;' href="../User/logout.php">
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
    <div class="col-8">
    <br>
      <table class="table table-active table-striped ">
        <tr>
          <th scope="col">id</th>
          <th scope="col">cep</th>
          <th scope="col">end_num</th>
          <th scope="col">num_salas</th> 
          <th scope="col">telefone</th>

        </tr>



        <?php

        while ($c = $estabelecimento->fetch()) {
          $id = $c["id"];
          $cep = $c["cep"];
          $end_num = $c["end_num"];
          $num_salas = $c["num_salas"];
          $telefone = $c["telefone"];
          
          echo  "<tr><td>" . $c["id"] . "</td>" .
            "<td>" . $c["cep"] . "</td>" .
            "<td>" . $c["end_num"] . "<br></td> " . 
            "<td>" . $c["num_salas"] . "<br></td>" .
            "<td>" . $c["telefone"] . "<br></td>" . "</tr>";
            
        }

        ?>

      </table>
    </div>
    <div class="col">

    </div>
  </div>


</body>

</html>