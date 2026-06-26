<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados recebidos</title>
</head>

<body>

    <h1>dados recebidos</h1>

    <?php
    if (isset($_GET['nome']) && isset($_GET['email'])) {

        $nome = $_GET['nome'];
        $email = $_GET['email'];

        echo "<p>nome: $nome</p>";
        echo "<p>email: $email</p>";

    } else {

        header("Location: imc10.php?error=faltando_error");

    }
    ?>

    <form method="post" action="imc10.3.php">

        <label for="peso">digite seu peso (kg):</label>
        <input type="text" id="peso" name="peso" required>

        <label for="altura">digite sua altura (m):</label>
        <input type="text" id="altura" name="altura" required>

        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">

        <button type="submit">calcular imc</button>

    </form>

</body>
</html>
