<?php
require "functions.php";

$shop = array(
    array("Short Sleeve Big Bling Velour Track Jacket", 89.00, 532),
    array("Monogram Cropped Velour Hoodie", 125.00, 743),
    array("Colorblock Ring Velour Crop Top", 49.00, 47),
    array("Mockneck Velour Track Jacket", 109.00, 832)
);

$shop = loop($shop);

$new_price = discount($shop, 0);
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Track Tops</h1>
        <div class="center">
            <div class="list-container">

            <?php
            discountContainer("//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_4_1080x.jpg?v=1651500318", $shop[0][0], $shop[0][1], $new_price, $shop[0][2]);
            itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_10_600x.jpg?v=1651500572", $shop[1][0], $shop[1][1], $shop[1][2]);
            itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_6_753c5ba8-a763-4fa8-9456-c6cd60e83b9c_600x.jpg?v=1652390631", $shop[2][0], $shop[2][1], $shop[2][2]);
            itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_7_218f19e6-a61f-46b9-a529-eb75cacd442d_600x.jpg?v=1648587308", $shop[3][0], $shop[3][1], $shop[3][2]);
            ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>