<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- 
            ETML
            Auteur : Kathleen Lu
            Date : 04.06.2023
            Description : La page de catalogue des produits nettoyants du site de Peach Youth contenant :
                            - une barre de filtres pour choisir une catégorie du catalogue
                            - une section pour les produits nettoyants pour le visage
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
        <title>Cleansers | Peach Youth</title>
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
                <p id="catalogNav"><a href="catalogAll.html">Catalog</a> / <a href="#filter">Cleansers</a></p>
                <section id="catalogHeroText">
                    <h1>Cleansing should never be skipped</h1>
                    <p class="heroParagraph">Cleansing is the very first step of your routine. It has to be done everyday!</p>
                </section>
            </div>
        </header>

        <main>
            <nav id="filter">
                <ul>
                    <li><a href="catalogAll.html">All</a></li>
                    <li><a href="#" class="currentFilter">Cleansers</a></li>
                    <li><a href="catalogExfoliators.html">Exfoliators</a></li>
                    <li><a href="catalogToners.html">Toners</a></li>
                    <li><a href="catalogSerums.html">Serums</a></li>
                    <li><a href="catalogMoisturizers.html">Moisturizers</a></li>
                    <li><a href="catalogSunProtection.html" class="lastFilter">Sun Protection</a></li>
                </ul>
            </nav>

            <section id="cleansers" class="category lastContainer">
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