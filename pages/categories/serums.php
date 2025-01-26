<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- 
            ETML
            Auteur : Kathleen Lu
            Date : 04.06.2023
            Description : La page de catalogue des sérums du site de Peach Youth contenant :
                            - une barre de filtres pour choisir une catégorie du catalogue
                            - une section pour les sérums pour le visage
        -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../../resources/css/styles.css">
        <title>Serums | Peach Youth</title>
    </head>
    <body>
        <nav id="mainNav">
            <a href="home.html" class="logo">
                <img src="../../resources/images/logo/logo.png" alt="logo de Peach Youth">
            </a>

            <ul class="navMenu">
                <li class="navItem">
                    <a href="home.html" class="navLink">Home</a>
                </li>
                <li class="navItem">
                    <a href="catalogAll.html" class="navLink">Catalog</a>
                </li>
                <li class="navItem">
                    <a href="statistics.html" class="navLink">Statistics</a>
                </li>
                <li class="navItem">
                    <a href="contact.html" class="navLink">Contact</a>
                </li>
            </ul>

            <div id="navRight">
                <a href="error404.html">
                    <span class="material-symbols-rounded like">favorite</span>
                </a>

                <button class="hamburgerBtn" aria-label="Mobile Navigation Button">
                    <span class="material-symbols-rounded">menu</span>
                </button>
            </div>
            <div class="toggleSeparation"></div>
        </nav>
        
        <header id="simpleHeader">
            <div id="catalogHero">
                <p id="catalogNav"><a href="catalogAll.html">Catalog</a> / <a href="#filter">Serums</a></p>
                <section id="catalogHeroText">
                    <h1>Serums for the glow</h1>
                    <p class="heroParagraph">Serums are usually applied after cleansing and toning, but before moisturizing. They are designed to deliver targeted benefits and address specific skin concerns.</p>
                </section>
            </div>
        </header>

        <main>
            <nav id="filter">
                <ul>
                    <li><a href="catalogAll.html">All</a></li>
                    <li><a href="catalogCleansers.html">Cleansers</a></li>
                    <li><a href="catalogExfoliators.html">Exfoliators</a></li>
                    <li><a href="catalogToners.html">Toners</a></li>
                    <li><a href="#" class="currentFilter">Serums</a></li>
                    <li><a href="catalogMoisturizers.html">Moisturizers</a></li>
                    <li><a href="catalogSunProtection.html" class="lastFilter">Sun Protection</a></li>
                </ul>
            </nav>

            <section id="serums" class="category lastContainer">
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
        </main>
        
        <footer>
            <div id="footerMain">
                <section id="info">
                    <h2>Peach Youth</h2>
                    <a href="mailto:info@peachyouth.ch">info@peachyouth.ch</a>
                    <div id="social">
                        <a href="error404.html"><i class="bi bi-facebook"></i></a>
                        <a href="error404.html"><i class="bi bi-twitter"></i></a>
                        <a href="error404.html"><i class="bi bi-instagram"></i></a>
                        <a href="error404.html"><i class="bi bi-youtube"></i></a>
                        <a href="error404.html"><i class="bi bi-tiktok"></i></a>
                    </div>
                </section>
                
                <nav id="footerNav">
                    <ul>
                        <li class="nav-item">
                            <a href="home.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="catalogAll.html" class="nav-link">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a href="statistics.html" class="nav-link">Statistics</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </nav>
                
                <section id="newsletter">
                    <h3>Subscribe to our newsletter for updates and discounts</h3>
                    <form>
                        <input type="email" placeholder="Enter your e-mail">
                        <input type="submit" value="Subscribe" class="subscribe">
                    </form>
                </section>
            </div>

            <div id="footerSeparation"></div>
            <div id="bottom">
                <p><span>© 2023 Peach Youth. </span><span>All rights reserved</span></p>
                <a href="#">Back to top</a>
            </div>
        </footer>
        <script src="../js/script.js"></script>
    </body>
</html>