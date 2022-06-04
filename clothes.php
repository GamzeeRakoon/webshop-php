<?php
require "functions.php";

$type = $_GET['type'];

$tops_array = array(
    array("Short Sleeve Big Bling Velour Track Jacket", 89.00, 532),
    array("Monogram Cropped Velour Hoodie", 125.00, 743),
    array("Colorblock Ring Velour Crop Top", 49.00, 47),
    array("Mockneck Velour Track Jacket", 109.00, 832)
);

$bottoms_array = array (
    array("Big Bling Velour Track Shorts", 79.00, 532),
    array("Plus-Size OG Big Bling Velour Track Pants", 99.00, 354),
    array("Monogram Velour Retro Shorts", 69.00, 643),
    array("Bling Velour Skirt", 79.00, 103)
);

$dress_array = array(
    array("Big Bling Terry Halter Dress", 79.00, 452),
    array("Smocked Velour Dress", 89.00, 142),
    array("Big Bling Velour Strap Dress", 89.00, 0),
    array("Small Bling Sleeveless Velour Jumpsuit", 119.00, 421)
);

$shorts_array = array(
    array("Big Bling Velour Biker Shorts",69.00 , 234,),
    array("Pacific High Rise Destroyed Shorts", 68.00, 532),
    array("Big Bling Velour Shorts", 69.00, 562),
    array("Classic Velour Shorts", 69.00, 735)
);

$shop = array();

?>

<main>
    <div class="yeek">
        <h1 class="title-category"><?=$title?></h1>
        <div class="center">
            <div class="list-container">

                <?php

                function tops($shop, $new_price1) {
                    discountContainer("//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_4_1080x.jpg?v=1651500318", $shop[0][0], $shop[0][1], $new_price1, $shop[0][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_10_600x.jpg?v=1651500572", $shop[1][0], $shop[1][1], $shop[1][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_6_753c5ba8-a763-4fa8-9456-c6cd60e83b9c_600x.jpg?v=1652390631", $shop[2][0], $shop[2][1], $shop[2][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_7_218f19e6-a61f-46b9-a529-eb75cacd442d_600x.jpg?v=1648587308", $shop[3][0], $shop[3][1], $shop[3][2]);
                }

                function bottoms($shop, $new_price1) {
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_600x.jpg?v=1651500391", $shop[0][0], $shop[0][1], $shop[0][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1FBVE04W_LIQUORICE_3_600x.jpg?v=1628778530", $shop[1][0], $shop[1][1], $new_price1, $shop[1][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_11_600x.jpg?v=1651500610", $shop[2][0], $shop[2][1], $shop[2][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV354_FREELOVE_2_600x.jpg?v=1647969116", $shop[3][0], $shop[3][1], $shop[3][2]);
                }

                function dress($shop, $new_price1) {
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_600x.jpg?v=1650050172", $shop[0][0], $shop[0][1], $shop[0][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_1_600x.jpg?v=1646415995", $shop[1][0], $shop[1][1], $shop[1][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_8_600x.jpg?v=1644520958", $shop[2][0], $shop[2][1], $shop[2][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1HUV300_JADEGREEN_1_6fbf2c14-0ac3-4efe-aad7-c4a9c5a20255_600x.jpg?v=1636476323", $shop[3][0], $shop[3][1], $new_price1, $shop[3][2]);
                }

                function shorts($shop, $new_price1, $new_price2) {
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_6_600x.jpg?v=1644520803", $shop[0][0], $shop[0][1], $new_price1, $shop[0][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" , $shop[1][0], $shop[1][1], $shop[1][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450", $shop[2][0], $shop[2][1], $new_price2, $shop[2][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575", $shop[3][0], $shop[3][1], $shop[3][2]);
                }

                switch ($type) {
                    case ($type == 'tops'):
                        $tops_array = loop($tops_array);
                        $shop = $tops_array;
                        $new_price1 = discount($shop, 0);
                        $new_price2 = discount($shop, 2);
                        tops($shop, $new_price1, $new_price2);
                        break;
                    case ($type == 'bottoms'):
                        $bottoms_array = loop($bottoms_array);
                        $shop = $bottoms_array;
                        $new_price1 = discount($shop, 0);
                        bottoms($shop, $new_price1);
                        break;
                    case ($type == 'dress'):
                        $dress_array = loop($dress_array);
                        $shop = $dress_array;
                        $new_price1 = discount($shop, 0);
                        dress($shop, $new_price1);
                        break;
                    case ($type == "shorts"):
                        $shorts_array = loop($shorts_array);
                        $shop = $shorts_array;
                        $new_price1 = discount($shop, 0);
                        $new_price2 = discount($shop, 2);
                        shorts($shop, $new_price1, $new_price2);
                        break;
                }
                ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>
