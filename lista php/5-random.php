<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        display:flex;
        height:100vh;
        justify-content:center;
        align-items:center;
        font-size:30pt;
    }
</style>
<body>
    
</body>
</html>
<form method = "GET">
    <h1>informe o intervalor</h1>
    
    <label for="inputa"> valor minimo:</label>

    <input type="text" id = "inputa" name = "a" value="<?php if(isset($_GET["a"])){echo trim  ($_GET["a"]);}?>">

    <br>

    <label for="input">valor maximo</label>

    <input type="text" id = "inputb" name = "b" value="<?php if(isset($_GET["b"])){echo trim ($_GET["b"]);}?>">

    <input type="submit" value = "enviar">
</form>
<div class = "container">
<?php
    if(!isset($_GET["a"]) && !isset ($_GET["b"])){
        exit();
}
    if (trim ($_GET["a"]) == "" || trim ($_GET["b"]) == ""){
        exit();
}
  $valormin=$_GET["a"];
  $valormax=$_GET["b"];
  $random=  rand($valormin, $valormax);
  echo $random;
  ?>
<div>

