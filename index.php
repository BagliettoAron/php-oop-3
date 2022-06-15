<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Gioco.php';
require_once __DIR__ . '/Collare.php';
require_once __DIR__ . '/Cucce.php';
require_once __DIR__ . '/User.php';

    

    $crocchette_cane = new Cibo(20, 200, 'dog', 5, 'damp' );

    $collare_gatto = new Collare(19.99, 'cat', 2);

    $cuccia_furetto = new Cucce(35, 'furetto', 3);

    $gioco_criceto = new Gioco(15, 'criceto', 4);

    $cliente = new User ();



    echo '<pre>';
    var_dump($gioco_criceto);
    echo '</pre>';
?>