<?php
$slogan = "Velvet is the new denim";
$counter = 0;

$shop = array(
    array("Big Bling Terry Halter Dress", "Smocked Velour Dress", "Big Bling Velour Strap Dress", "Small Bling Sleeveless Velour Jumpsuit"),
    array(79.00, 89.00, 89.00, 119.00),
    array(452, 142, 0, 421)
);

while ($counter < 4) {
    switch ($shop[2][$counter]) {
        case ($shop[2][$counter] < 0):
            $shop[2][$counter] = "Not in stock";
            break;
        case ($shop[2][$counter] < 500):
            $shop[2][$counter] = "Barely in stock";
            break;
        case ($shop[2][$counter] > 500):
            $shop[2][$counter] = "Allot in stock";
    };
    $counter++;
}

$new_price = $shop[1][3] - (30 / 100 * $shop[1][3]);
?>

<?php
require "navbar.php"
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Dresses & Jumpsuits</h1>
        <div class="center">
            <div class="list-container">

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_600x.jpg?v=1650050172" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][0] ?> </p>
                    <p class="list-item__text"> Stock:  <?= $shop[2][0] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_1_600x.jpg?v=1646415995" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][1] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[2][1] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_8_600x.jpg?v=1644520958" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][2] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][2] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[2][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1HUV300_JADEGREEN_1_6fbf2c14-0ac3-4efe-aad7-c4a9c5a20255_600x.jpg?v=1636476323" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][3] ?> </p>
                    <p class="list-item__text">$<a class="line"><?= $shop[1][3] ?></a> <a class="deal">$<?= $new_price?></a></p>
                    <p class="list-item__text">  Stock: <?= $shop[2][3]?> </p>
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