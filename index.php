<?php
// echo printa na tela
echo 'batata';
//pode ter código html junto com o php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>macumba</title>
</head>
<body>
    <br>
    <button>botão</button>
    
    <?php
        echo '<p>paragrafo com texto</p>';
        //pode ter código php no meio do html
    ?>

    <?= "outro jeito de printar no php"?>
    <br>
    <a href="1variavel.php">variavel</a>
    <br>
    <a href="2condicionais.php">condicionais</a>
    <br>
    <a href="3array.php">array</a>
    <br>
    <a href="4repeticao.php">repeticao</a>
</body>
</html>