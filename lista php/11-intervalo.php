<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>sessao</title>
</head>
<body>

<?php
session_start();

// verifica se os numeros foram enviados
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    // salva os numeros na sessao
    $_SESSION['numero1'] = $_GET['numero1'];
    $_SESSION['numero2'] = $_GET['numero2'];
}

// exibe o intervalo salvo
if (isset($_SESSION['numero1']) && isset($_SESSION['numero2'])) {
    echo "<p>intervalo salvo na sessao: {$_SESSION['numero1']} ate {$_SESSION['numero2']}</p>";
}
?>

<form method="get">
    <input type="number" name="numero1" placeholder="primeiro numero" required>
    <input type="number" name="numero2" placeholder="segundo numero" required>
    <input type="submit" value="salvar">
</form>

</body>
</html>
