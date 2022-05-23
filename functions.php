<?php
function maakListItemContainer($src, $shop, $shop2, $prijs, $stock){
    echo "<div class='list-item__container'>
                    <a><img class='list-item__image' src='$src' alt=''></a>
                    <p class='list-item__text'>$shop</p>
                    <p class='list-item__text'> <a class='line'>$shop2</a> <a class='deal'>$prijs </a></p>
                    <p class='list-item__text'>  Stock: $stock </p>
                </div>";
}