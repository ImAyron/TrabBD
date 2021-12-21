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
    <title>Inserir Salas</title>
</head>

<body>

    <div class="row">
        <div class="col">
            

        </div>
        <div class="col">
            <div class='form-group'>
                <form action="controllerInsert.php" method="post">

                    <label for="numero">Numero:</label>
                    <input type="text" name="numero" id="numero">
                    <p></p>
                    <label for="num_assentos">num_assentos:</label>
                    <input type="text" name="num_assentos" id="num_assentos">
                    <p></p>
                    <label for="tipo">tipo:</label>
                    <input type="tipo" name="tipo" id="tipo">
                    <P></P>
                    <input type="submit" value="Inserir">

                </form>
            </div>
        </div>
      
    </div>

</body>

</html>