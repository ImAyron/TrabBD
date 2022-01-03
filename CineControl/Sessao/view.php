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


    <div class="row">
        <div class="col">

        </div>
        <div class="col-10">
            <br>
            <?php require_once "../User/controllerLogin.php"; ?>
            <a href="insert.php"><button class="btn btn-primary">Adicionar Sessao</button></a>
           
            <br>
            <br>

            <table class="table table-active table-striped ">
                <tr>
                    <th scope="col">Filme</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Idioma</th>
                    <th scope="col">Legendado</th>
                    <th scope="col">Duração</th>
                    <th scope="col">Sala</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>

                <?php

                require_once 'index.php';

                if ($sessoes->fetch()) {


                    while ($c = $sessoes->fetch()) {
                        $id = $c["id"];
                        $data = $c["data"];
                        $horario = $c["horario"];
                        $idioma = $c["idioma"];
                        $duracao = $c["duracao"];
                        $fnome = $c["fnome"];
                        $fdiretor = $c["fdiretor"];
                        $slnum = $c["slnum"];


                        echo  "<tr>" .
                            "<td>" . $c["fnome"] . "<br></td>" .
                            "<td>" . $c["fdiretor"] . "<br></td>" .
                            "<td>" . $c["data"] . "</td>" .
                            "<td>" . $c["horario"] . "<br></td> " .
                            "<td>" . $c["idioma"] . "<br></td>" .
                            "<td>" . ($c["legendado"] ? "Sim" : "Não") . "<br></td>" .
                            "<td>" . $c["duracao"] . "<br></td>" .
                            "<td>" . $c["slnum"] . "<br></td>" .
                            "<td><a href='../Ingressos/view.php?&id=$id'><button class='btn btn-primary'>Ver Ingressos</button></a></td>".
                            "<td><a href='./controllerDelete.php?&id=$id'><button class='btn btn-danger'>Excluir</button></a></td>";

                        "</tr>";
                    }
                } else {
                    echo  "<tr><td>" . "Nenhum dado encontrado" . "</td><td><td><td></tr>";
                }

                ?>


            </table>
        </div>
        <div class="col">

        </div>
    </div>


</body>

</html>