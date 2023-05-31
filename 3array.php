<?php
if(isset($_POST["nome"]) && isset($_POST["idade"])){
    echo "olá ".$_POST["nome"]." sua idade é ".$_POST["idade"];
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    
    <?php
        $array = [1,2,3,4,5,6,7,27];
        //echo é usado para strings, var_dump pode ser usada para mostrar qualquer tipo de variavel
        var_dump($array);
    ?>
    <form action="" method="POST">
        <input type="text" name="nome" required/>
        <br>
        <input type="number" name="idade" required/>
        <br>
        <input type="submit" value='enviar'>
    </form>
</body>
</html>