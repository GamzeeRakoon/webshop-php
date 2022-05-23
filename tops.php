<?php
require "functions.php";
$slogan = "Velvet is the new denim";
$counter = 0;

$shop = array(
    array("Short Sleeve Big Bling Velour Track Jacket", 89.00, 532),
    array("Monogram Cropped Velour Hoodie", 125.00, 743),
    array("Colorblock Ring Velour Crop Top", 49.00, 47),
    array("Mockneck Velour Track Jacket", 109.00, 832)
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

$new_price = $shop[0][1] - (30 / 100 * $shop[0][1]);
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
                    <p class="list-item__text"> <?= $shop[0][0] ?> </p>
                    <p class="list-item__text">$<a class='line'><?= $shop[0][1] ?></a> <a class='deal'> $<?= $new_price ?> </a></p>
                    <p class="list-item__text">  Stock: <?= $shop[0][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_10_600x.jpg?v=1651500572" alt=""></a>
                    <p class="list-item__text"> <?= $shop[1][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[1][2] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_6_753c5ba8-a763-4fa8-9456-c6cd60e83b9c_600x.jpg?v=1652390631" alt=""></a>
                    <p class="list-item__text"> <?= $shop[2][0] ?> </p>
                    <p class="list-item__text">$<?= $shop[2][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[2][2]?> </p>
                </div>

                <div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_7_218f19e6-a61f-46b9-a529-eb75cacd442d_600x.jpg?v=1648587308" alt=""></a>
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