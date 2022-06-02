<?php
require "functions.php";

$shop = array (
    array("Big Bling Velour Track Shorts", 79.00, 532),
    array("Plus-Size OG Big Bling Velour Track Pants", 99.00, 354),
    array("Monogram Velour Retro Shorts", 69.00, 643),
    array("Bling Velour Skirt", 79.00, 103)
);

$shop = loop($shop);

$new_price = discount($shop, 1);

?>

<main>
    <div class="yeek">
        <h1 class="title-category">Track Bottoms</h1>
        <div class="center">
            <div class="list-container">

                <?php
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_600x.jpg?v=1651500391", $shop[0][0], $shop[0][1], $shop[0][2]);
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1FBVE04W_LIQUORICE_3_600x.jpg?v=1628778530", $shop[1][0], $shop[1][1], $new_price, $shop[1][2]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_11_600x.jpg?v=1651500610", $shop[2][0], $shop[2][1], $shop[2][2]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV354_FREELOVE_2_600x.jpg?v=1647969116", $shop[3][0], $shop[3][1], $shop[3][2]);
                ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>