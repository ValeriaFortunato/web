<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado imc</title>
</head>

<body>

    <h1>recebendo dados post</h1>

    <?php

    // verifica se os dados foram enviados
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // calcula o imc
        $imc = $peso / ($altura * $altura);

        echo "<p>nome: $nome</p>";
        echo "<p>email: $email</p>";
        echo "<p>peso: $peso kg</p>";
        echo "<p>altura: $altura m</p>";
        echo "<p>imc: " . number_format($imc, 2) . "</p>";

        if ($imc < 18.5) {

            echo "<h2>abaixo do peso</h2>";
            echo "<img src='abaixopeso.png' width='300'>";

        } elseif ($imc < 25) {

            echo "<h2>peso normal</h2>";
            echo "<img src='normal.png' width='300'>";

        } elseif ($imc < 30) {

            echo "<h2>sobrepeso</h2>";
            echo "<img src='sobrepeso.png' width='300'>";

        } elseif ($imc < 35) {

            echo "<h2>obesidade grau 1</h2>";
            echo "<img src='obesidade1.png' width='300'>";

        } elseif ($imc < 40) {

            echo "<h2>obesidade grau 2</h2>";
            echo "<img src='obesidade2.png' width='300'>";

        } else {

            echo "<h2>obesidade grau 3</h2>";
            echo "<img src='obesidade3.png' width='300'>";

        }

    } else {

        header("Location: imc10.2.php?error=faltando_error");

    }

    ?>

</body>
</html>
