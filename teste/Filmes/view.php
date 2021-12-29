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
        <a class="d-flex justify-content-center text-center" href="../salas/index.php">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="index.php">Filmes</a>
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
    <br>
      <table class="table table-active table-bordered  table-striped ">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Diretor</th>
          <th scope="col">Sinopse</th>
          <th scope="col">Categoria</th>
          <th scope="col">Duração</th>
          <th scope="col">Etária</th>
          <th scope="col">Atores</th>
          <th scope="col">Exibir</th>

        </tr>



        <?php

        while ($c = $tabela->fetch()) {
          $phpVariable = $c["nome_original"];
          //$num_assentos=$c["num_assentos"];
          //$tipo=$c["tipo"];
          
          echo  "<tr><td>" . $c["nome_exibido"] . "</td>" .
            "<td>" . $c["diretor"] . "</td>" .
            "<td>" . $c["sinopse"] . "<br></td> " .
            //"<td><a href='/TRABBD/teste/Salas/controllerDelete.php?numero=$phpVariable'><button class='btn btn-secondary'> Excluir</button></a></td>" .
           // "<td><a href='/TRABBD/teste/Salas/edit.php?
            //numero=$phpVariable
           // &num_assentos= $num_assentos
           // &tipo=$tipo'>

             //<button class='btn btn-primary'>Editar</button></a></td>" .

             "<td>" . $c["categorias"] . "<br></td> " .
             "<td>" . $c["duracao"] . "<br></td> " .
             "<td>" . $c["classificacao_etaria"] . "<br></td> " .
             "<td>" . $c["astros"] . "<br></td> " .
             "<td>" . "<a href='edit.php?nome_original=$phpVariable'><button>Editar</button></a>" . "<br></td> " .
            "</tr>";
        }

        ?>

      </table>
      <?php require "../User/controllerLogin.php"; ?>
      <a href="insert.php"><button class="btn btn-danger">Inserir Novo Filme</button></a>
    </div>
   
  </div>


</body>

</html>