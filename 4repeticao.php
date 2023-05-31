<?php
    $pages_array[0] = (object) array('titulo' => 'titulo 0', 'texto' => 'texto 0');
    $pages_array[1] = (object) array('titulo' => 'titulo 1', 'texto' => 'texto 1');
    $pages_array[2] = (object) array('titulo' => 'titulo 2', 'texto' => 'texto 2');
    $pages_array[3] = (object) array('titulo' => 'titulo 3', 'texto' => 'texto 3');
    $pages_array[4] = (object) array('titulo' => 'titulo 4', 'texto' => 'texto 4');
    $pages_array[5] = (object) array('titulo' => 'titulo 5', 'texto' => 'texto 5');

    foreach($pages_array as $page){
        ?>
        <h1><?= $page->titulo ?></h1>
        <p><?= $page->texto ?></p>
      <?php  
    }
?>