<?php
$slogan = "Velvet is the new denim";
$counter = 0;
$discount = 0;

$shop = array(
    array("Big Bling Velour Biker Shorts",69.00 , 234,),
    array("Pacific High Rise Destroyed Shorts", 68.00, 532),
    array("Big Bling Velour Shorts", 69.00, 562),
    array("Classic Velour Shorts", 69.00, 735)
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

$new_price1 = $shop[0][1] - (30 / 100 * $shop[0][1]);
$new_price2 = $shop[2][1] - (30 / 100 * $shop[2][1]);
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
                    <p class="list-item__text"> <?= $shop[0][0] ?> </p>
                    <p class="list-item__text">$<a class="line"><?= $shop[0][1] ?></a> <a class="deal">$<?= $new_price1?></a> </p>
                    <p class="list-item__text"> Stock:  <?= $shop[0][2] ?> </p>

                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" alt=""></a>
                    <p class="list-item__text"> <?= $shop[1][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[1][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450" alt=""></a>
                    <p class="list-item__text"> <?= $shop[2][0] ?> </p>
                    <p class="list-item__text">$<a class="line"><?= $shop[2][1] ?></a> <a class="deal">$<?= $new_price2 ?></a> </p>
                    <p class="list-item__text"> Stock:  <?= $shop[2][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575" alt=""></a>
                    <p class="list-item__text"> <?= $shop[3][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[3][1] ?> </p>
                    <p class="list-item__text"> Stock:  <?= $shop[3][2] ?> </p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>