<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palíndromo</title>
</head>
<body>

    <h1>palíndromo</h1>

    <form method="get" action="">
        <label for="texto">digite um texto:</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">calcular</button>
    </form>

    <?php
    // verifica se a variável foi enviada
    if (isset($_GET['texto'])) {

        // armazena o texto digitado
        $texto = $_GET['texto'];

        // calcula o tamanho da string
        $tamanho = strlen($texto);

        // verifica se é um palíndromo
        $palindromo = ($texto == strrev($texto)) ? 'sim' : 'não';

        // conta o número de vogais
        $vogais = preg_match_all('/[aeiou]/i', $texto, $matches);

        // conta o número de consoantes
        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto, $matches);
    ?>

        <ul>
            <li>tamanho da string: <?php echo $tamanho; ?></li>
            <li>tamanho da string sem espaços: <?php echo strlen(str_replace(' ', '', $texto)); ?></li>
            <li>é um palíndromo: <?php echo $palindromo; ?></li>
            <li>número de vogais: <?php echo $vogais; ?></li>
            <li>número de consoantes: <?php echo $consoantes; ?></li>
        </ul>

    <?php
    }
    ?>

</body>
</html>
