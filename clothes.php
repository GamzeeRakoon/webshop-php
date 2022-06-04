<?php
require "functions.php";

$type = $_GET['type'];

$tops_array = array(
    array("Short Sleeve Big Bling Velour Track Jacket", 89.00, 532),
    array("Monogram Cropped Velour Hoodie", 125.00, 743),
    array("Colorblock Ring Velour Crop Top", 49.00, 47),
    array("Mockneck Velour Track Jacket", 109.00, 832)
);

$title = '';

$shop = array();

//function titleChange() {
//    switch ($title):
//        case ($type == "top"):
//            $title = 'track tops';
//            break;
//
//}

//$new_price1 = discount($shop, 0);
//$new_price2 = discount($shop, 2);


?>

<main>
    <div class="yeek">
        <h1 class="title-category"><?=$title?></h1>
        <div class="center">
            <div class="list-container">

                <?php

                function tops($shop) {
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_6_600x.jpg?v=1644520803", $shop[0][0], $shop[0][1], $new_price1, $shop[0][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" , $shop[1][0], $shop[1][1], $shop[1][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450", $shop[2][0], $shop[2][1], $new_price2, $shop[2][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575", $shop[3][0], $shop[3][1], $shop[3][2]);
                }

                function bottoms() {
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_600x.jpg?v=1651500391", $shop[0][0], $shop[0][1], $shop[0][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1FBVE04W_LIQUORICE_3_600x.jpg?v=1628778530", $shop[1][0], $shop[1][1], $new_price, $shop[1][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_11_600x.jpg?v=1651500610", $shop[2][0], $shop[2][1], $shop[2][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV354_FREELOVE_2_600x.jpg?v=1647969116", $shop[3][0], $shop[3][1], $shop[3][2]);
                }

                function dress() {
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_600x.jpg?v=1650050172", $shop[0][0], $shop[0][1], $shop[0][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_1_600x.jpg?v=1646415995", $shop[1][0], $shop[1][1], $shop[1][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_8_600x.jpg?v=1644520958", $shop[2][0], $shop[2][1], $shop[2][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1HUV300_JADEGREEN_1_6fbf2c14-0ac3-4efe-aad7-c4a9c5a20255_600x.jpg?v=1636476323", $shop[3][0], $shop[3][1], $new_price, $shop[3][2]);
                }

                function shorts() {
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_6_600x.jpg?v=1644520803", $shop[0][0], $shop[0][1], $new_price1, $shop[0][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" , $shop[1][0], $shop[1][1], $shop[1][2]);
                    discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450", $shop[2][0], $shop[2][1], $new_price2, $shop[2][2]);
                    itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575", $shop[3][0], $shop[3][1], $shop[3][2]);
                }

                switch ($type) {
                    case ($type == 'tops'):
//                        titleChange();
                        $tops_array = loop($tops_array);
                        $shop = $tops_array;

                        tops($shop);

                        break;
                    case ($type == 'bottoms'):
                        bottoms();
                        break;
                    case ($type == 'dress'):
                        dress();
                        break;
                    case ($type == "shorts"):
                        shorts();
                        break;
                }
                ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>
