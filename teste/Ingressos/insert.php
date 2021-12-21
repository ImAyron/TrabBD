<?php
session_start();
if (!isset($_SESSION['cargo']) || empty($_SESSION['cargo'])) {
    echo "<br><a>Voce precrisa estar </a> <a href='../index.php'>logado</a>!</a><br>";
    exit();
}
if ($_SESSION['cargo'] != "ADMIN") {
    echo "<br><a>Você não tem permissão para fazer esta ação! </a> <a href='index.php'>Voltar</a></a><br>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" type='text/css' href="../css/trab.css">
    <title>Inserir Salas</title>
</head>

<body style="background-color: black;color:white;">
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
                <a class="d-flex justify-content-center text-center" href="sessões.html">Tutores</a>
                <br>
            </div>
            <div class="col border border-dark">

                <br>
                <a class="d-flex justify-content-center text-center" href="sessões.html">sessões</a>
                <br>
            </div>
        </div>
    </div>
    </div>


    <div class="row">
        <div class="col">

        </div>
        <div class="col-8">
            <div class='form-group'>
                <form action="controllerInsert.php" method="post">

                    <label for="numero">ID:</label>
                    <input class="form-control" type="text" name="id" id="id">
                    <p></p>
                    <label for="num_assentos">SID:</label>
                    <input class="form-control" type="text" name="sid" id="sid">
                    <p></p>
                    <label for="tipo">tipo:</label>
                    <select  class="form-control"name="tipo" id="tipo">
                        <option>meia</option>
                        <option>inteira</option>
                        
                        
                    </select>
                    <input type="submit" value="Inserir">

                </form>

            </div>
        </div>
        <div class="col">

        </div>

    </div>

</body>

</html>