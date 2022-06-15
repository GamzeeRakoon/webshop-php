<?php
require "functions.php";
require 'dbconnection.class.php';

$dbconnect = new dbconnection();

$sql = "SELECT * FROM producten WHERE `categorie` = 'shorts' ";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$shop = $query -> fetchAll(PDO::FETCH_NUM);

$shop = loop($shop);

$new_price1 = discount($shop, 0);
$new_price2 = discount($shop, 2);
?>

<main>
    <div class="yeek">
        <h1 class="title-category">Shorts</h1>
        <div class="center">
            <div class="list-container">

                <?php
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/625x937_6_600x.jpg?v=1644520803", $shop[0][2], $shop[0][3], $new_price1, $shop[0][4]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/JC336-SHRT_Pink_1_600x.jpg?v=1651164410" , $shop[1][2], $shop[1][3], $shop[1][4]);
                discountContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBVA56_LIQUORICE_3_600x.jpg?v=1646781450", $shop[2][2], $shop[2][3], $new_price2, $shop[2][4]);
                itemContainer("https://cdn.shopify.com/s/files/1/0534/0551/5937/products/J2SBV356_FIRSTPLACE_1_600x.jpg?v=1646761575", $shop[3][2], $shop[3][3], $shop[3][4]);
                ?>

            </div>
        </div>
    </div>
</main>
</body>
</html>