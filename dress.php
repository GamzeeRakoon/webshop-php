<?php
require "functions.php";
require 'dbconnection.class.php';

$dbconnect = new dbconnection();

$sql = "SELECT * FROM producten WHERE `categorie` = 'dress' ";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$shop = $query -> fetchAll(PDO::FETCH_NUM);

$shop = loop($shop);

$new_price = discount($shop, 3);
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Dresses & Jumpsuits</h1>
        <div class="center">
            <div class="list-container">

                <?php
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_600x.jpg?v=1650050172", $shop[0][2], $shop[0][3], $shop[0][4]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_1_600x.jpg?v=1646415995", $shop[1][2], $shop[1][3], $shop[1][4]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_8_600x.jpg?v=1644520958", $shop[2][2], $shop[2][3], $shop[2][4]);
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1HUV300_JADEGREEN_1_6fbf2c14-0ac3-4efe-aad7-c4a9c5a20255_600x.jpg?v=1636476323", $shop[3][2], $shop[3][3], $new_price, $shop[3][4]);
                ?>
                
            </div>
        </div>
    </div>
</main>
</body>
</html>