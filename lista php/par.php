<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    <h1>Informe o número</h1>
        <label for="num">Número</label>
        <input type="text" id = "num" name="num"></input>
        <input type="submit" value="Submeter">
        <?php
        if(!isset($_GET["num"])){
            exit();
        }
        $num=$_GET["num"];
        if ($num%2==0){
            echo "O número $num é par";
        }else{
            echo "O número $num é impar";
        }
        ?>     
    </form>
</body>
</html>