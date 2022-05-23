<?php
$slogan = "Velvet is the new denim";
$counter = 0;

$shop = array(
    array("Big Bling Terry Halter Dress", 79.00, 452),
    array("Smocked Velour Dress", 89.00, 142),
    array("Big Bling Velour Strap Dress", 89.00, 0),
    array("Small Bling Sleeveless Velour Jumpsuit", 119.00, 421)
);

while ($counter < 4) {
    switch ($shop[$counter][2]) {
        case ($shop[$counter][2] < 0):
            $shop[$counter][2] = "Not in stock";
            break;
        case ($shop[$counter][2] < 500):
            $shop[$counter][2] = "Barely in stock";
            break;
        case ($shop[$counter][2] > 500):
            $shop[$counter][2] = "Allot in stock";
    };
    $counter++;
}

$new_price = $shop[3][1] - (30 / 100 * $shop[3][1]);
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
                    <p class="list-item__text">$<?= $shop[0][1] ?> </p>
                    <p class="list-item__text"> Stock:  <?= $shop[0][1] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_1_600x.jpg?v=1646415995" alt=""></a>
                    <p class="list-item__text"> <?= $shop[1][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[1][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_8_600x.jpg?v=1644520958" alt=""></a>
                    <p class="list-item__text"> <?= $shop[2][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[2][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[2][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1HUV300_JADEGREEN_1_6fbf2c14-0ac3-4efe-aad7-c4a9c5a20255_600x.jpg?v=1636476323" alt=""></a>
                    <p class="list-item__text"> <?= $shop[3][0] ?> </p>
                    <p class="list-item__text">$<a class="line"><?= $shop[3][1] ?></a> <a class="deal">$<?= $new_price?></a></p>
                    <p class="list-item__text">  Stock: <?= $shop[3][2]?> </p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>