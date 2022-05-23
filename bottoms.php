<?php
$slogan = "Velvet is the new denim";
$counter = 0;

$shop = array (
    array("Big Bling Velour Track Shorts", "Plus-Size OG Big Bling Velour Track Pants","Monogram Velour Retro Shorts","Bling Velour Skirt"),
    array(79.00, 99.00, 69.00, 79.00),
    array(532, 354, 643, 103)
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

$new_price = $shop[1][1] - (30 / 100 * $shop[1][1]);
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
                    <p class="list-item__text"> <?= $shop[0][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][0]?> </p>
                    <p class="list-item__text"> Stock: <?= $shop[2][0] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1FBVE04W_LIQUORICE_3_600x.jpg?v=1628778530" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][1] ?> </p>
                    <p class="list-item__text"> <a class="line">$<?= $shop[1][1] ?></a> <a class="deal">$<?= $new_price?></a> </p>
                    <p class="list-item__text"> Stock: <?= $shop[2][1] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_11_600x.jpg?v=1651500610" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][2] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][2] ?> </p>
                    <p class="list-item__text"> Stock: <?= $shop[2][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV354_FREELOVE_2_600x.jpg?v=1647969116" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][3] ?> </p>
                    <p class="list-item__text">$<a><?= $shop[1][3] ?></a></p>
                    <p class="list-item__text"> Stock: <?= $shop[2][3] ?> </p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>