<?php
function discountContainer($src, $item, $price, $discount, $stock){
    echo "<div class='list-item__container'>
                    <a><img class='list-item__image' src='$src' alt=''></a>
                    <p class='list-item__text'>$item</p>
                    <p class='list-item__text'>$<a class='line'>$price</a> <a class='deal'>$$discount </a></p>
                    <p class='list-item__text'>  Stock: $stock </p>
                </div>";
};

function itemContainer($src, $item, $price, $stock){
    echo "<div class='list-item__container'>
                    <a><img class='list-item__image' src='$src' alt=''></a>
                    <p class='list-item__text'>$item</p>
                    <p class='list-item__text'>$$price</p>
                    <p class='list-item__text'>  Stock: $stock </p>
                </div>";
};

?>