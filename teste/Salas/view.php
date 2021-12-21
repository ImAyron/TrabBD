<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" type='text/css' href="../css/trab.css">
    <title>Document</title>
</head>
<body style="background-color: black;">
<div class="row">

<div class="col-11">

</div>
<div class="col">
 <a href="../index.php"> <img class="img-thumbnail" src="../imagens/cineControl.png" alt=""></a>
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
    <a class="d-flex justify-content-center text-center" href="../Salas/index.php">Salas</a>
    <br>
  </div>
  <div class="col border border-dark">

    <br>
    <a class="d-flex justify-content-center text-center" href="Filmes/index.php">Filmes</a>
    <br>
  </div>
  <div class="col border border-dark">

    <br>
    <a class="d-flex justify-content-center text-center" href="reservas.html">Tutores</a>
    <br>
  </div>
  <div class="col border border-dark">

    <br>
    <a class="d-flex justify-content-center text-center" href="reservas.html">Reservas</a>
    <br>
  </div>
</div>
</div>
</div>

  <br>

  <table class="table table-striped table-dark">
  <tr>
  <th scope="col">Numero</th>
      <th scope="col">qtd assentos</th>
      <th scope="col">Tipo</th>
      
  </tr>
 
  
   
  <?php 

    while($c =$salas->fetch()){
     echo  "<tr><td>Numero da sala: " . $c["numero"] ."</td>". " <td>Numero de assentos:" . $c["num_assentos"] ."</td>"." <td>Tipo:" . $c["tipo"]."<br>"."</td>  </tr>";
    }
  
  ?>

  </table>
  <a href="insert.php"><button class="btn btn-danger">Inserir Nova Sala</button></a>

</body>
</html>