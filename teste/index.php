<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=" stylesheet" type='text/css' href="css/trab.css">
  <title>Document</title>
</head>

<body>


  <div class="row">
    <div class="d-flex justify-content-center text-center col " style="background-color: black;">
   
      <a href="./User/logout.php"> <br><button class='btn btn-danger'>Logout</button></a>
    </div>

    <div class="col-10 " style="background-color: black;">

    </div>
    <div class="col" style="background-color: black;">
      <a href="index.php"> <img class="img-thumbnail" src="imagens/cineControl.png" alt=""></a>
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
        <a class="d-flex justify-content-center text-center" href="Salas/index.php">Salas</a>
        <br>
      </div>
      <div class="col border border-dark">

        <br>
        <a class="d-flex justify-content-center text-center" href="Filmes/index.php">Filmes</a>
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
  <div class="fundo">

    <div class="row">
      <div class="col">
      </div>
      <div class="col " style="background-color: grey;">
        <p></p>
        <img class="rounded mx-auto d-block" src="imagens/login.png" alt="">


        <form action="./User/checkLogin.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" name='email' aria-describedby="email" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="senha" name='senha' placeholder="">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar Senha</label>
          </div>
          <input type="submit" value="Login">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </form>
      </div>

      <div class="col" style="background-color: black;">
      </div>

    </div>
    <div class="row" style="background-color: black;">
      <div class="col"></div>
    </div>

  </div>


</body>

</html>