<?php
require "functions.php";

$shop = array(
    array("Big Bling Velour Biker Shorts",69.00 , 234,),
    array("Pacific High Rise Destroyed Shorts", 68.00, 532),
    array("Big Bling Velour Shorts", 69.00, 562),
    array("Classic Velour Shorts", 69.00, 735)
);

$shop = loop($shop);

$new_price1 = discount($shop, 0);
$new_price2 = discount($shop, 2);


?>

<main>
    <div class="yeek">
        <h1 class="title-category">Shorts</h1>
        <div class="center">
            <div class="list-container">

                <?php
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_6_600x.jpg?v=1644520803", $shop[0][0], $shop[0][1], $new_price1, $shop[0][2]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" , $shop[1][0], $shop[1][1], $shop[1][2]);
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450", $shop[2][0], $shop[2][1], $new_price2, $shop[2][2]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575", $shop[3][0], $shop[3][1], $shop[3][2]);
                ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>