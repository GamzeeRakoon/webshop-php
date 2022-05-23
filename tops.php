<?php
$slogan = "Velvet is the new denim";
$counter = 0;

$shop = array(
    array("Short Sleeve Big Bling Velour Track Jacket", "Monogram Cropped Velour Hoodie", "Colorblock Ring Velour Crop Top", "Mockneck Velour Track Jacket"),
    array(89.00, 125.00, 49.00, 109.00),
    array(532, 743, 47, 832)
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

$new_price = $shop[1][0] - (30 / 100 * $shop[1][0]);
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
                    <p class="list-item__text"> <a class="line">$<?= $shop[1][0] ?></a cl> <a class="deal">$<?= $new_price ?> </a></p>
                    <p class="list-item__text">  Stock: <?= $shop[2][0] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_10_600x.jpg?v=1651500572" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][1] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][1] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[2][1] ?> </p>
                </div>

                <div class="list-item__container">
                    <a><img class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_6_753c5ba8-a763-4fa8-9456-c6cd60e83b9c_600x.jpg?v=1652390631" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][2] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][2] ?> </p>
                    <p class="list-item__text">  Stock: <?= $shop[2][2]?> </p>
                </div>

                <div class="list-item__container">
                    <a><img href="" class="list-item__image" src="https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_7_218f19e6-a61f-46b9-a529-eb75cacd442d_600x.jpg?v=1648587308" alt=""></a>
                    <p class="list-item__text"> <?= $shop[0][3] ?> </p>
                    <p class="list-item__text">$<?= $shop[1][3] ?> </p>
                    <p class="list-item__text"> Stock:  <?= $shop[2][3] ?> </p>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>