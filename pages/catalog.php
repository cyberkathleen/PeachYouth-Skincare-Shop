<?php
  require_once dirname(__DIR__) . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
      Author: Kathleen Lu
      Created: 03.06.2023
      Modified: 27.01.2025
      Description: The Peach Youth website catalogue page containing:
                      - a filter bar for choosing a category from the catalogue
                      - a category for facial cleansing products
                      - a category for facial scrubs
                      - a category for facial toners
                      - a category for facial serums
                      - a category for facial moisturisers
                      - a category for facial sun protection products
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Catalog | Peach Youth</title>
  </head>
  <body>
    <?php include(ROOT_PATH . '/includes/nav.php'); ?>
    
    <header id="simpleHeader">
      <div id="catalogHero">
        <p id="catalogNav"><a href="#">Catalog</a> / <a href="#filter">All</a></p>
        <section id="catalogHeroText">
          <h1>Your routine is everything</h1>
          <p class="heroParagraph">Like the products which you want to integrate in your routine, then come and buy them in our shops.</p>
          <p>It's as simple as that!</p>
        </section>
      </div>
    </header>

    <main>
      <nav id="filter">
        <ul>
          <li><a href="#" class="currentFilter">All</a></li>
          <li><a href="categories/cleansers.php">Cleansers</a></li>
          <li><a href="categories/exfoliators.php">Exfoliators</a></li>
          <li><a href="categories/toners.php">Toners</a></li>
          <li><a href="categories/serums.php">Serums</a></li>
          <li><a href="categories/moisturizers.php">Moisturizers</a></li>
          <li><a href="categories/sun_protections.php" class="lastFilter">Sun Protection</a></li>
        </ul>
      </nav>

      <section id="cleansers" class="category">
        <h2>Cleansers</h2>
        <div class="container">
          <div class="product">
            <img src="../../userContent/categories/cleansers/cleanser1.jpg" alt="a cleanser from Curology">
            <div class="productDescription">
              <p class="brand">Curology</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">The Cleanser</p>
            <p class="price">CHF 12</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/cleansers/cleanser2.jpg" alt="a cleanser from Dr.Ceuracle">
            <div class="productDescription">
              <p class="brand">Dr.Ceuracle</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">5 Alpha Control Melting Cleansing Gel</p>
            <p class="price">CHF 19.50</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/cleansers/cleanser3.jpg" alt="a cleanser from Glossier.">
            <div class="productDescription">
              <p class="brand">Glossier.</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Milky Jelly Cleanser</p>
            <p class="price">CHF 19</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/cleansers/cleanser4.jpg" alt="a cleanser from NEEDLY">
            <div class="productDescription">
              <p class="brand">NEEDLY</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Mild Deep Cleansing Oil</p>
            <p class="price">CHF 24.55</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/cleansers/cleanser5.jpg" alt="a cleanser form MEDI-PEEL">
            <div class="productDescription">
              <p class="brand">MEDI-PEEL</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Lacto Collagen Cleansing Oil</p>
            <p class="price">CHF 31.50</p>
          </div>
        </div>
      </section>

      <section id="exfoliators" class="category">
        <h2>Exfoliators</h2>
        <div class="container">
          <div class="product">
            <img src="../../userContent/categories/exfoliators/exfoliator1.jpg" alt="an exfoliator from Dear Scrub">
            <div class="productDescription">
              <p class="brand">Dear Scrub</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Coffee Salt Scrub</p>
            <p class="price">CHF 25</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/exfoliators/exfoliator2.jpg" alt="an exfoliator from Dear Scrub">
            <div class="productDescription">
              <p class="brand">Dear Scrub</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Sea Salt Rose</p>
            <p class="price">CHF 25</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/exfoliators/exfoliator3.jpg" alt="an exfoliator from Dear Scrub">
            <div class="productDescription">
              <p class="brand">Dear Scrub</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Coffee Salt Lavender</p>
            <p class="price">CHF 25</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/exfoliators/exfoliator4.jpg" alt="an exfoliator from Glossier.">
            <div class="productDescription">
              <p class="brand">Glossier.</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Solution Exfoliating Skin Perfector</p>
            <p class="price">CHF 21</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/exfoliators/exfoliator5.jpg" alt="an exfoliator from The Ordinary">
            <div class="productDescription">
              <p class="brand">The Ordinary</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">AHA 30% + BHA 2% Peeling Solution</p>
            <p class="price">CHF 12.90</p>
          </div>
        </div>
      </section>
      
      <section id="toners" class="category">
        <h2>Toners</h2>
        <div class="container">
          <div class="product">
            <img src="../../userContent/categories/toners/toner1.jpg" alt="a toner from BRING GREEN">
            <div class="productDescription">
              <p class="brand">BRING GREEN</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Tea Tree Cica Soothing Toner 250ml</p>
            <p class="price">CHF 14.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/toners/toner2.jpg" alt="a toner from Botanical Republic">
            <div class="productDescription">
              <p class="brand">Botanical Republic</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Radiant Hydrating Toner</p>
            <p class="price">CHF 28</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/toners/toner3.jpg" alt="a toner from Laneige">
            <div class="productDescription">
              <p class="brand">Laneige</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Fresh Calming Balancing Toner</p>
            <p class="price">CHF 52.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/toners/toner4.jpg" alt="a toner from Isntree">
            <div class="productDescription">
              <p class="brand">Isntree</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Hyaluronic Acid Toner Plus</p>
            <p class="price">CHF 25s.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/toners/toner5.jpg" alt="a toner from The Dream">
            <div class="productDescription">
              <p class="brand">The Dream</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Pure Solution Essence</p>
            <p class="price">CHF 33.90</p>
          </div>
        </div>
      </section>

      <section id="serums" class="category">
        <h2>Serums</h2>
        <div class="container">
          <div class="product">
            <img src="../../userContent/categories/serums/serum1.jpg" alt="a serum from Peach Youth">
            <div class="productDescription">
              <p class="brand">Peach Youth</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Lactic Acid 5%</p>
            <p class="price">CHF 6.50</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum2.jpg" alt="a serum from The Ordinary">
            <div class="productDescription">
              <p class="brand">The Ordinary</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Niacinamide 10% + Zinc 1%</p>
            <p class="price">CHF 7.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum3.jpg" alt="a serum from Hylamide">
            <div class="productDescription">
              <p class="brand">Hylamide</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Booster, Glow</p>
            <p class="price">CHF 19</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum4.jpg" alt="a serum from Poko">
            <div class="productDescription">
              <p class="brand">Poko</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Soothing Serum</p>
            <p class="price">CHF 31.95</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum5.jpg" alt="a serum from Good Skin Club">
            <div class="productDescription">
              <p class="brand">Good Skin Club</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Ultrahydrate Serum</p>
            <p class="price">CHF 48</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum6.jpg" alt="a serum from Kakadu">
            <div class="productDescription">
              <p class="brand">Kakadu</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">C Dark Spot Serum</p>
            <p class="price">CHF 36</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum7.jpg" alt="a serum from InstaNatural">
            <div class="productDescription">
              <p class="brand">InstaNatural</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Retinol Serum</p>
            <p class="price">CHF 36.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum8.jpg" alt="a serum from The Ordinary">
            <div class="productDescription">
              <p class="brand">The Ordinary</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Caffeine Solution 5% + EGCG</p>
            <p class="price">CHF 11.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/serums/serum9.jpg" alt="a serum from The Ordinary">
            <div class="productDescription">
              <p class="brand">The Ordinary</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Hyaluronic Acid 2% + B5</p>
            <p class="price">CHF 10.90</p>
          </div>            
        </div>
      </section>

      <section id="moisturizers" class="category">
        <h2>Moisturizers</h2>
        <div class="container">
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer1.jpg" alt="a moisturizer from Poko">
            <div class="productDescription">
              <p class="brand">Poko</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Ultra Hydrating Moisturizer</p>
            <p class="price">CHF 30.95</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer2.jpg" alt="a moisturizer from Poko">
            <div class="productDescription">
              <p class="brand">Poko</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Regenerating Collagen Moisturizer</p>
            <p class="price">CHF 38.95</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer3.jpg" alt="a moisturizer from FRÉ">
            <div class="productDescription">
              <p class="brand">FRÉ</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Tinted Defense Moisturizer</p>
            <p class="price">CHF 35</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer4.jpg" alt="a moisturizer from Curology">
            <div class="productDescription">
              <p class="brand">Curology</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">The Moisturizer</p>
            <p class="price">CHF 15</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer5.jpg" alt="a moisturizer from The Ordinary">
            <div class="productDescription">
              <p class="brand">The Ordinary</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Natural Moisturizing Factors + HA</p>
            <p class="price">CHF 8.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer6.jpg" alt="a moisturizer from Proven">
            <div class="productDescription">
              <p class="brand">Proven</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Personalized Day Moisturizer With SPF</p>
            <p class="price">CHF 54.90</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer7.jpg" alt="a moisturizer from SKIN1004">
            <div class="productDescription">
              <p class="brand">SKIN1004</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Tone Brightening Capsule Cream</p>
            <p class="price">CHF 21</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer8.jpg" alt="a moisturizer from Derma Express">
            <div class="productDescription">
              <p class="brand">Derma Express</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Invisible Moon Brightening Cream</p>
            <p class="price">CHF 27</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/moisturizers/moisturizer9.jpg" alt="a moisturizer from Grown Alchemist">
            <div class="productDescription">
              <p class="brand">Grown Alchemist</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Hydra-Repair Day Cream</p>
            <p class="price">CHF 54</p>
          </div>
        </div>
      </section>

      <section id="sunProtection" class="category lastContainer">
        <h2>Sun protection</h2>
        <div class="container">
          <div class="product">
            <img src="../../userContent/categories/sun/sunscreen1.jpg" alt="a sunscreen from Everyday Humans">
            <div class="productDescription">
              <p class="brand">Everyday Humans</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Oh My Bod! SPF50 Body Sunscreen</p>
            <p class="price">CHF 16</p>
          </div>          
          <div class="product">
            <img src="../../userContent/categories/sun/sunscreen2.jpg" alt="a sunscreen from Everyday Humans">
            <div class="productDescription">
              <p class="brand">Everyday Humans</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Rosé S'il Vous Plait SPF30 Gentle Mineral Sunscreen</p>
            <p class="price">CHF 22.25</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/sun/sunscreen3.jpg" alt="a sunscreen from Glossier.">
            <div class="productDescription">
              <p class="brand">Glossier.</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Invisible Shield</p>
            <p class="price">CHF 25</p>
          </div>
          <div class="product">
            <img src="../../userContent/categories/sun/sunscreen4.jpg" alt="a sunscreen from The Face Shop">
            <div class="productDescription">
              <p class="brand">The Face Shop</p>
              <span class="material-symbols-rounded like">favorite</span>
            </div>
            <p class="productName">Power Long-Lasting Sun Cream SPF50+ PA+++</p>
            <p class="price">CHF 29</p>
          </div>
        </div>
      </section>
    </main>
    
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>
    <script src="../assets/js/script.js"></script>
  </body>
</html>