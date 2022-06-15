<?php
$slogan = "Velvet is the new denim";

function indexContainer($page, $src, $name, $css) {
    echo           "<div class='category-item__container'>
                        <a href='$page' ><img class='category-item__image' src='$src'></a>
                        <a class='category-item__text $css' href='$page'><p>$name</p></a>
                    </div>";
};

function discountContainer($src, $item, $price, $discount, $stock){
    echo "<div class='list-item__container'>
                    <a><img class='list-item__image' src='$src' alt=''></a>
                    <p class='list-item__text'>$item</p>
                    <p class='list-item__text'>$<a class='line'>".number_format($price, 2, ',','')."</a> <a class='deal'>$$discount </a></p>
                    <p class='list-item__text'>  Stock: $stock </p>
                </div>";
};

function itemContainer($src, $item, $price, $stock){
    echo "<div class='list-item__container'>
                    <a><img class='list-item__image' src='$src' alt=''></a>
                    <p class='list-item__text'>$item</p>
                    <p class='list-item__text'>$".number_format($price, 2, ',','')."</p>
                    <p class='list-item__text'>  Stock: $stock </p>
                </div>";
};

function loop($item){
    $counter = 0;
    while ($counter < 4) {
        switch ($item[$counter][4]) {
            case ($item[$counter][4] < 0):
                $item[$counter][4] = "Not in stock";
                break;
            case ($item[$counter][4] < 500):
                $item[$counter][4] = "Barely in stock";
                break;
            case ($item[$counter][4] > 500):
                $item[$counter][4] = "Allot in stock";
        };
        $counter++;
    }
    return $item;
}

function discount($new_discount,  $product_number) {

    $new_price = $new_discount[$product_number][3] - (30 / 100 * $new_discount[$product_number][3]);
    return number_format($new_price, 2, ',','');
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juicy Couture® Official Site</title>

    <script src="https://kit.fontawesome.com/ad4c693861.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon_32x32.webp">

</head>
<body>
<header>
    <div class="div-top">
        <a class="div-top-text">
            <?= $slogan ?>
        </a>
    </div>
    <nav>
        <ul class="thing-thing">
            <a href="index.php"><img src="img/186369.svg" alt=""></a>
            <li><a href="tops.php">TOPS</a></li>
            <li><a href="bottoms.php">BOTTOM</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="shorts.php">SHORTS</a></li>
        </ul>
        <div>
            <ul>
                <li><i class="fa-regular fa-user"></i></li>
                <li><i class="fa-solid fa-magnifying-glass"></i></li>
                <li><a href="cart.php" class="fa-solid fa-bag-shopping cart-icon"></a></li>
            </ul>
        </div>
    </nav>
</header>