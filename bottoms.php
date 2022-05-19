<?php
$slogan = "Velvet is the new denim";
$name1 = "Big Bling Velour Track Shorts";
$name2 = "Plus-Size OG Big Bling Velour Track Pants";
$name3 = "Monogram Velour Retro Shorts";
$name4 = "Bling Velour Skirt";
$price1 = "$79.0";
$price2 = "$99.00";
$price3 = "$69.00";
$price4 = "$79.00";
?>

<?php
require "navbar.php"
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Track Bottoms</h1>
        <div class="center">
            <div class="list-container">
                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_600x.jpg?v=1651500391" alt=""></a>
                    <p class="list-item__text"><?= $name1?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price1?></p>
                </div>
                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1FBVE04W_LIQUORICE_3_600x.jpg?v=1628778530" alt=""></a>
                    <p class="list-item__text"><?= $name2 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price2 ?></p>
                </div><div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_11_600x.jpg?v=1651500610" alt=""></a>
                    <p class="list-item__text"><?= $name3 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price3 ?></p>
                </div><div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV354_FREELOVE_2_600x.jpg?v=1647969116" alt=""></a>
                    <p class="list-item__text"><?= $name4 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price4 ?></p>
                </div>
                <!--                    <img class="category-item" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_1080x.jpg?v=1651500382">-->
                <!--                    <img class="category-item" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_1080x.jpg?v=1650050147">-->
                <!--                    <img class="category-item" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UBV452_TINT_OF_MINT_1_1080x.jpg?v=1650046309">-->
            </div>
        </div>
    </div>
</main>
</body>
</html>