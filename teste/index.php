<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="trab.css">
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
      <a href="index.php"> <img class="img-thumbnail" src="imagens/cineControl.png" alt=""></a>

    </div>

    <div class="col-10 " style="background-color: white;">

    </div>
    <div class=" col" style="background-color: white;">
      <a style='color:black;font-weight: bold;' href="./User/logout.php">
        <p><br>Deslogar</p>
      </a>

    </div>
  </div>
  <div class="col " style="background-color: grey;">

    <div class="row ">

      <div class="col border border-dark">
        <br>
        <a class="d-flex justify-content-center text-center" href="index.php">Home</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="Salas/view.php">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="Filmes/view.php">Filmes</a>
        <br>
      </div>
      
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="./Sessao/view.php">Sessões</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="./Estabelecimentos/view.php">Estabelecimentos</a>
        <br>
      </div>
    </div>
  </div>
  </div>
  <div class="fundo">

    <div class="row">
      <div class="col" style="background-color: white;">
      </div>
      <div class="col " style="background-color: #c4baba;">
        <p></p>
        <br>
        <img class="rounded mx-auto d-block" src="imagens/login.png" alt="">


        <form action="./User/checkLogin.php" method="post">
          <div class="form-group">
            <br>
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" name='email' aria-describedby="email" placeholder="">

          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="senha" name='senha' placeholder="">
          </div>
          <br>
          <br>
          <input class='btn btn-primary'type="submit" value="Login">
          <br>
          <br>
          <br>
          <br>

        </form>
      </div>

      <div class="col" style="background-color: white;">
      </div>

    </div>
    <div class="row" style="background-color: white;">
      <div class="col"></div>
    </div>

  </div>


</body>

</html>