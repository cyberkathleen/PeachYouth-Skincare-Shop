<?php
  require_once dirname(__DIR__) . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
      Author: Kathleen Lu
      Created: 01.06.2023
      Modified: 27.01.2025
      Description: The Peach Youth website contact page containing:
                      - a presentation of the creator
                      - a contact form for writing a message
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Contact | Peach Youth</title>
  </head>
  <body>
    <?php include(ROOT_PATH . '/includes/nav.php'); ?>
        
    <header id="simpleHeader">
      <section id="simpleHero">
        <h1>About the creator</h1>
        <p class="heroParagraph">Where to find me? Want to contact me? Don’t. I’ll not answer you anyways.</p>
      </section>
    </header>
    
    <main>
      <div id="presentation">
        <section id="presentationText">
          <h2>Hey you!</h2>
          <p>This is Cyberkath, thank you for visiting my website, I hope you liked it!</p>
          <p>A few more words about me. I am the founder of this brand and the creator of this website. If I’m not in front of my PC coding, you’ll find me in my lab trying out new products.</p>
          <p class="paragraph">You can contact me at:</p>
          <a href="mailto:hello@cyberkath.ch">hello@cyberkath.ch</a>
        </section>
        <img class="introImg" src="../assets/images/face2.jpg" alt="a picture of the creator">
      </div>
      
      <section id="contactMe">
        <h2>Contact me</h2>
        <form>
          <div id="yourName">
            <div class="contactBox">
              <label for="firstName">First Name</label>
              <input type="text" id="firstName" name="firstName" placeholder="First Name">
            </div>
            <div class="contactBox">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="lastName" placeholder="Last Name">
            </div>
          </div>
          <label for="emailAddress">Your email</label>
          <input type="email" id="emailAddress" name="emailAddress" required placeholder="example@gmail.com">
          <label for="message">Your message</label>
          <textarea name="message" id="message" required placeholder="Write your text..." cols="30" rows="10"></textarea>
          <input type="submit" value="SEND" class="buttonGeneral sendMessage">
        </form>
      </section>
    </main>
    
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>
    <script src="../assets/js/script.js"></script>
  </body>
</html>