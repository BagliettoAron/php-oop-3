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
require_once __DIR__ . '/CreditCard.php';

    

    $crocchette_cane = new Cibo('Forza10', 20, 200, 'dog', 5, 'damp' );

    $collare_gatto = new Collare('cat gadegets', 19.99, 'cat', 2);

    $cuccia_furetto = new Cucce('Animal House', 35, 'furetto', 3);

    $gioco_criceto = new Gioco('Little Pet Games', 15, 'criceto', 4);

    $clientTest = new User();

    try {
        $clientTest -> addToCart($crocchette_cane);
    } catch (Exception $e) {
        echo 'undefined error';
    }
    $clientTest -> addToCart($cuccia_furetto);
    $clientTest -> userDataRegistered('nameTest', 'emailTest');


    // echo '<pre>';
    // var_dump($clientTest->cart);
    // echo '</pre>';

    ?>

    <h2>Cart Shop</h2>

    <ul>
        <?php foreach ($clientTest ->cart as $bought_item) { ?>
            <li> <?php echo $bought_item->printProduct(); ?></li>
        <?php } ?>
    </ul>

    <h3> Total Price: <?php echo $clientTest -> totalPrice() ?> €  </h3>