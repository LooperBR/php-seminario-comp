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
        $array = array(1,2,3,4,5,6,7,27);
        //echo é usado para strings, var_dump pode ser usada para mostrar qualquer tipo de variavel
        var_dump($array);
        echo '<br/>';
        //pode se manipular cada parte do array
        $array[0] = 7;
        
        var_dump($array);

        echo "<br>";

        $mapa = array(
            "nome" => "joao",
            "idade" => 21,
            "curso" => "computação"
        );

        var_dump($mapa);

        echo "<br>";
        echo $mapa["nome"]."<br>";
        echo $mapa["idade"]."<br>";
        echo $mapa["curso"]."<br>";
        echo $mapa["cartao"]."<br>";

        
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