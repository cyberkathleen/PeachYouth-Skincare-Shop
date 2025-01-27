<?php
  require_once __DIR__ . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
      Author: Kathleen Lu
      Created: 03.05.2023
      Modified: 27.01.2025
      Description: The Peach Youth website homepage including :
                      - a hero section inviting users to go and buy products
                      - a section presenting the different product categories
                      - a bestseller display section
                      - a product values banner
                      - a new products section
                      - an inspirational quote
                      - a brand presentation section
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Home | Peach Youth</title>
  </head>
  <body>
    <?php include(ROOT_PATH . '/includes/nav.php'); ?>
    
    <header id="homeHeader">
      <div id="hero">
        <section id="heroLeft">
          <h1>Give your skin a healthy glow</h1>
          <p>With the best of its kind Korean skincare routine</p>
          <a href="pages/catalog.php" class="buttonGeneral">Shop now</a>
          <img class="hideInMobile" src="assets/images/ingredients.jpg" alt="a product with ingredients on a lila background">
        </section>
        <img class="introImg" src="assets/images/face1.jpg" alt="a face with smooth skin">
      </div>
    </header>

    <main>
      <section id="categories">
        <h2>Categories</h2>
        <div class="categoriesContainer">
          <div class="bigCategory">
            <img src="assets/images/products/cleansers/cleanser5.jpg" alt="a cleanser">
            <a href="pages/categories/cleansers.php">Cleansers</a>
          </div>
          <div class="smallCategory">
            <img src="assets/images/products/exfoliators/exfoliator1.jpg" alt="an exfoliator">
            <a href="pages/categories/exfoliators.php">Exfoliators</a>
          </div>
          <div class="smallCategory">
            <img src="assets/images/products/sun/sunscreen1.jpg" alt="a sunscreen">
            <a href="pages/categories/sun_protections.php">Sun Protection</a>
          </div>
          <div class="smallCategory">
            <img src="assets/images/products/toners/toner1.jpg" alt="a Toner">
            <a href="pages/categories/toners.php">Toners</a>
          </div>
          <div class="smallCategory">
            <img src="assets/images/products/serums/serum2.jpg" alt="a serum">
            <a href="pages/categories/serums.php">Serums</a>
          </div>
          <div class="bigCategory">
            <img src="assets/images/products/moisturizers/moisturizer1.jpg" alt="a moisturizer">
            <a href="pages/categories/moisturizers.php">Moisturizers</a>
          </div>
        </div>
      </section>

      <section id="bestsellers">
        <h2>Bestsellers</h2>
        <div class="container">
          <div class="product">
            <img src="assets/images/products/random/random1.jpg" alt="a serum bottle from Peach Youth">
            <div class="productDescription">
              <p class="brand">Peach Youth</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">The Secret Serum of Youth</p>
            <p class="price">CHF 15</p>
          </div>
          <div class="product">
            <img src="assets/images/products/random/random3.jpg" alt="two no-sebum mineral powders from Innisfree">
            <div class="productDescription">
              <p class="brand">Innisfree</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">No-Sebum Mineral Powder</p>
            <p class="price">CHF 9.20</p>
          </div>
          <div class="product">
            <img src="assets/images/products/packs/pack1.jpg" alt="the daily set package from The Ordinary">
            <div class="productDescription">
              <p class="brand">The Ordinary</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">The Daily Set</p>
            <p class="price">CHF 34.90</p>
          </div>
          <div class="product">
            <img src="assets/images/products/random/random4.jpg" alt="overnight mask from Peach Youth">
            <div class="productDescription">
              <p class="brand">Peach Youth</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Comfort Nourishing Rice Overnight Mask</p>
            <p class="price">CHF 9.50</p>
          </div>
        </div>
      </section>

      <div id="banner">
        <p>100% Vegan<span> · </span>No artificial color & fragrances<span> · </span>100% Recyclable packaging<span> · </span>Natural</p>
      </div>

      <section id="new">
        <h2>New in</h2>
        <div class="container">
          <div class="product">
            <img src="assets/images/products/moisturizers/moisturizer7.jpg" alt="a tone brightening capsule cream from Skin1004">
            <div class="productDescription">
              <p class="brand">SKIN1004</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Tone Brightening Capsule Cream</p>
            <p class="price">CHF 21</p>
          </div>
          <div class="product">
            <img src="assets/images/products/packs/pack2.jpg" alt="a starter set from Curology">
            <div class="productDescription">
              <p class="brand">Curology</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Starter Set</p>
            <p class="price">CHF 28</p>
          </div>
          <div class="product">
            <img src="assets/images/products/packs/pack3.jpg" alt="antibacterial perfumed shower gel pack from Chill More">
            <div class="productDescription">
              <p class="brand">Chill More</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Antibacterial Perfumed Shower Gel Pack</p>
            <p class="price">CHF 64.90</p>
          </div>
          <div class="product">
            <img src="assets/images/products/random/random2.jpg" alt="an oil serum from poko">
            <div class="productDescription">
              <p class="brand">poko</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Luxury Facial Oil</p>
            <p class="price">CHF 31.90</p>
          </div>
        </div>
      </section>
      
      <div id="quote">
        <p>Real <span class="italic">skin</span> has texture, pores, and even the occasional blemish. The goal is <span class="italic">healthy</span> skin, not perfect skin</p>
      </div>
      
      <section id="about" class="lastContainer">
        <h2>About Peach Youth</h2>
        <div id="about1">
          <img src="assets/images/advertisementBoard.jpg" alt="an advertisement board of Peach Youth">
        </div>
        <div id="about2">
          <section id="about2Text">
            <h4>Learn more about our company and our values</h4>
            <p>Our company has become known for its high quality service through our very friendly and helpful staff, and we are proud that our products are used by countless people in Switzerland.</p>
          </section>
          <div id="about2Img">
            <img src="assets/images/about1.jpg" alt="good skin club packaging">
            <img src="assets/images/about3.jpg" alt="The abnormal beauty company label on a bottle">
          </div>
        </div>
      </section>
    </main>
    
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>
    <script src="assets/js/script.js"></script>
  </body>
</html>