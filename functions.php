<?php
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

function loop($shop){
    $counter = 0;
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
    return $shop;
}

function discount($new_discount,  $product_number) {

    $new_price = $new_discount[$product_number][1] - (30 / 100 * $new_discount[$product_number][1]);
    return number_format($new_price, 2, ',','');
}

?>