<?php
require "functions.php";

$shop = array(
    array("Big Bling Terry Halter Dress", 79.00, 452),
    array("Smocked Velour Dress", 89.00, 142),
    array("Big Bling Velour Strap Dress", 89.00, 0),
    array("Small Bling Sleeveless Velour Jumpsuit", 119.00, 421)
);

$shop = loop($shop);

$new_price = discount($shop, 3);


?>

<main>
    <div class="yeek">
        <h1 class="title-category">Dresses & Jumpsuits</h1>
        <div class="center">
            <div class="list-container">

                <?php

                ?>
                
            </div>
        </div>
    </div>
</main>
</body>
</html>