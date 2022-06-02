<?php
require "functions.php";

$shop = array(
    array("Big Bling Terry Halter Dress", 79.00, 452),
    array("Smocked Velour Dress", 89.00, 142),
    array("Big Bling Velour Strap Dress", 89.00, 0),
    array("Small Bling Sleeveless Velour Jumpsuit", 119.00, 421)
);

$shop = loop($shop);

$new_price = discount($shop, 3);


?>

<main>
    <div class="yeek">
        <h1 class="title-category">Dresses & Jumpsuits</h1>
        <div class="center">
            <div class="list-container">

                <?php
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_600x.jpg?v=1650050172", $shop[0][0], $shop[0][1], $shop[0][2]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_1_600x.jpg?v=1646415995", $shop[1][0], $shop[1][1], $shop[1][2]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_8_600x.jpg?v=1644520958", $shop[2][0], $shop[2][1], $shop[2][2]);
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1HUV300_JADEGREEN_1_6fbf2c14-0ac3-4efe-aad7-c4a9c5a20255_600x.jpg?v=1636476323", $shop[3][0], $shop[3][1], $new_price, $shop[3][2]);
                ?>
                
            </div>
        </div>
    </div>
</main>
</body>
</html>