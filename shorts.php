<?php
$slogan = "Velvet is the new denim";
$name1 = "Big Bling Velour Biker Shorts";
$name2 = "Pacific High Rise Destroyed Shorts";
$name3 = "Big Bling Velour Shorts";
$name4 = "Classic Velour Shorts";
$price1 = "$69.00";
$price2 = "$68.00";
$price3 = "$69.00";
$price4 = "$69.00";
?>

<?php
require "navbar.php"
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Shorts</h1>
        <div class="center">
            <div class="list-container">
                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_6_600x.jpg?v=1644520803" alt=""></a>
                    <p class="list-item__text"><?= $name1?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price1?></p>
                </div>
                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" alt=""></a>
                    <p class="list-item__text"><?= $name2?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price2?></p>
                </div><div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450" alt=""></a>
                    <p class="list-item__text"><?= $name3?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price3?></p>
                </div><div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575" alt=""></a>
                    <p class="list-item__text"><?= $name4?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$price4 ?></p>
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