<?php
require "functions.php";
require 'dbconnection.class.php';

$dbconnect = new dbconnection();

$sql = "SELECT * FROM producten WHERE `categorie` = 'tops' ";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$shop = $query -> fetchAll(PDO::FETCH_NUM);

$shop = loop($shop);

$new_price = discount($shop, 2);
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Track Tops</h1>
        <div class="center">
            <div class="list-container">

            <?php
            discountContainer("//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_4_1080x.jpg?v=1651500318", $shop[0][2], $shop[0][3], $new_price, $shop[0][4]);
            itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_10_600x.jpg?v=1651500572", $shop[1][2], $shop[1][3], $shop[1][4]);
            itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_6_753c5ba8-a763-4fa8-9456-c6cd60e83b9c_600x.jpg?v=1652390631", $shop[2][2], $shop[2][3], $shop[2][4]);
            itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/800x1200_7_218f19e6-a61f-46b9-a529-eb75cacd442d_600x.jpg?v=1648587308", $shop[3][2], $shop[3][3], $shop[3][4]);
            ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>