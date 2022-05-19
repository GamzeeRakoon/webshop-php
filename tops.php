<?php
$slogan = "Velvet is the new denim";
$name1 = "Short Sleeve Big Bling Velour Track Jacket";
$name2 = "Monogram Cropped Velour Hoodie";
$name3 = "Colorblock Ring Velour Crop Top";
$name4 = "Mockneck Velour Track Jacket";
$price1 = "$89.0";
$price2 = "$125.00";
$price3 = "$49.00";
$price4 = "$109.00";
?>

<?php
require "navbar.php"
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Track Tops</h1>
        <div class="center">
            <div class="list-container">
                <div class="list-item__container">
                    <a><img class="list-item__image" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_4_1080x.jpg?v=1651500318" alt=""></a>
                    <p class="list-item__text"><?= $name1?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price1?></p>
                </div>
                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_10_600x.jpg?v=1651500572" alt=""></a>
                    <p class="list-item__text"><?= $name2 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price2?></p>
                </div><div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_6_753c5ba8-a763-4fa8-9456-c6cd60e83b9c_600x.jpg?v=1652390631" alt=""></a>
                    <p class="list-item__text"><?= $name3 ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price3?></p>
                </div><div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_7_218f19e6-a61f-46b9-a529-eb75cacd442d_600x.jpg?v=1648587308" alt=""></a>
                    <p class="list-item__text"><?= $name4 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $price4?></p>
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