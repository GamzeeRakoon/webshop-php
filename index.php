<?php
$slogan = "Velvet is the new denim";
$naam = "yake bigu"

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
        <i class="fa-solid fa-angle-left div-top-icon fa-2x"></i>
            <a class="div-top-text">
                <?= $slogan ?>
            </a>
            <i class="fa-solid fa-angle-right div-top-icon fa-2x"></i>
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
                    <li><i class="fa-solid fa-bag-shopping"></i></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div>
            <img class="main-image-size" src="img/JC_SU22_HomepageBanners_16_26c7ecd8-7a4b-40e4-b428-b06531e2a454_1400x.progressive.webp" alt="">
        </div>
        <div class="top-background-container">
            <div class="top-background-item">
                <img class="image-first" src="//cdn.shopify.com/s/files/1/0534/0551/5937/files/JC_May_mobile_double_1800x.jpg?v=1652189192" alt="">
            </div>
            <div class="top-background-item">
                <img class="image-first" src="//cdn.shopify.com/s/files/1/0534/0551/5937/files/JC_May_mobile_short2_1800x.jpg?v=1652792120" alt="">
            </div>
        </div>

        <div class="yeek">
            <h1 class="title">SHOP BY CATEGORY</h1>
            <div class="center">
                <div class="category-container">
                    <div class="category-item__container">
                        <a href="tops.php" ><img class="category-item__image" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_4_1080x.jpg?v=1651500318"></a>
                        <p class="category-item__text top">TRACK TOPS</p>
                    </div>
                    <div class="category-item__container">
                        <a href="bottoms.php"><img class="category-item__image" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_1080x.jpg?v=1651500382"></a>
                        <p class="category-item__text bottoms">TRACK BOTTOMS</p>
                    </div><div class="category-item__container">
                        <a href="dress.php"><img href="" class="category-item__image" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_1080x.jpg?v=1650050147"></a>
                        <p class="category-item__text dress">DRESSES & JUMPSUITS</p>
                    </div><div class="category-item__container">
                        <a href="shorts.php"><img href="" class="category-item__image" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UBV452_TINT_OF_MINT_1_1080x.jpg?v=1650046309"></a>
                        <p class="category-item__text shorts">SHORTS</p>
                    </div>
<!--                    <img class="category-item" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/MAY_PDP_800x1200_5_5ee915f6-5c89-4526-953f-717a6aa72205_1080x.jpg?v=1651500382">-->
<!--                    <img class="category-item" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UDY459_PUSHPOP_1_1080x.jpg?v=1650050147">-->
<!--                    <img class="category-item" src="//cdn.shopify.com/s/files/1/0534/0551/5937/products/J2UBV452_TINT_OF_MINT_1_1080x.jpg?v=1650046309">-->
                </div>
            </div>
        </div>


        <div class="hero__media-container">     
        <iframe id="YouTubeVideo-162126310036d97d8b" class="video-div video-thing" data-type="youtube" data-video-id="pkuKoxbsL2Q" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/pkuKoxbsL2Q?autohide=0&amp;cc_load_policy=0&amp;controls=0&amp;fs=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fjuicycouture.com&amp;widgetid=1" tabindex="-1" width="1920" height="1080" frameborder="0"></iframe>
        </div>
    </main>
</body>
</html>