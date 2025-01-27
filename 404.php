<?php
  require_once __DIR__ . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
      Author: Kathleen Lu
      Created: 31.05.2023
      Modified: 27.01.2025
      Description: The Peach Youth website 404 error page, which takes you back to the home page
    -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Open+Sans:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Error 404 | Peach Youth</title>
  </head>
  <body>
    <?php include(ROOT_PATH . '/includes/nav.php'); ?>

    <main id="errorPage">
      <div id="errorContainer">
        <section id="error404">
          <h1>404<span>ERROR</span></h1>
          <p>Oops... The page you are looking for might have been removed or is temporarily unavailable.</p>
          <a href="index.php" class="buttonGeneral">Go to home</a>
        </section>
        <img
          src="assets/images/about2.jpg"
          alt="a lila-coloured door with piled up cartoon packages in front"
        />
      </div>
    </main>

      <?php include(ROOT_PATH . '/includes/footer.php'); ?>
    <script src="assets/js/script.js"></script>
  </body>
</html>
