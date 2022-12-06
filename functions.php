<?php
    require('./database/DBController.php');
    require('./database/product.php');

    $db = new DBController();
$product = new Product($db);
$product_shuffle = $product->getData(table:'Product');



    ?>
