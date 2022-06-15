<?php
require "functions.php";
require 'dbconnection.class.php';

$dbconnect = new dbconnection();

$sql = "SELECT * FROM producten WHERE `categorie` = 'bottoms' ";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$shop = $query -> fetchAll(PDO::FETCH_NUM);

$shop = loop($shop);

$new_price = discount($shop, 2);
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Track Bottoms</h1>
        <div class="center">
            <div class="list-container">

                <?php
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_600x.jpg?v=1651500391", $shop[0][2], $shop[0][3], $shop[0][4]);
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J1FBVE04W_LIQUORICE_3_600x.jpg?v=1628778530", $shop[1][2], $shop[1][3], $new_price, $shop[1][4]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_11_600x.jpg?v=1651500610", $shop[2][2], $shop[2][3], $shop[2][4]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV354_FREELOVE_2_600x.jpg?v=1647969116", $shop[3][2], $shop[3][3], $shop[3][4]);
                ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>