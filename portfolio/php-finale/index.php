<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Finale | Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
  </head>
  <body>

    <header>
      <div class="row">
        <img id="logo" src="images/logo.png" alt="logo">
        <p>Rory Hackney</p>
      </div>
    </header>

    <nav>
      <ul>
        <li><a href="index.php">Portal Page</a></li>
        <li><a href="website/contact.php">Contact Form</a></li>
        <li><a href="currency-form.php">Currency Converter</a></li>
        <li><a href="daily-art.php">Daily Challenge</a></li>
        <li><a href="website/dinos.php">Database: Dinosaurs</a></li>
        <li><a href="fuel-calculator.php">Mileage Calculator</a></li>
      </ul>
    </nav>
 
<!--TODO: go through files, delete extraneous, polish roughs, add links to most important, reorganize files, fix links-->

    <div class="wrapper">
      <main>
        <h1>~Welcome to my portal page~</h1>
        <img id="selfie" src="images/me.jpg" alt="photo of Rory">
        <p>Rory Hackney is a web developer and designer from Seattle, Washington.
          They graduated with a BFA from the Minneapolis College of Art and Design
          in 2016, and recently completed a Certificate in Web Development at Seattle
          Central College. While they build their skills and career, they're working
          as an IT tutor, customer service professional, and bookkeeper.</p>
        <img id="art" src="images/bg.jpg" alt="forest art">
        <div id="spacer">
          <a href="final/index.php">
            <div id="wrap">
              Final Project: User Management, Dino Database, Contact Form, Daily Art, and more...
            </div>
          </a>
        </div><!--end of spacer-->
      </main>
      <aside>
        <h2>Exercises</h2>
        <ul>
            <li><a href="website/gallery.php">Kitten Gallery</a></li>
            <li><a href="database-people/people.php">Database: Heroes</a></li>
            <li><a href="exercises/daily-coffee.php">Daily Coffee</a></li>
            <img src="images/portfoliotable.jpg" alt="Portfolio database table">
        </ul>
      </aside>
    </div> <!--end wrapper-->
<!--TODO: set aside imgs to max 400px wide, kitten gallery imgs to max 200px wide, daily art imgs to 500px wide-->
    <footer>
      <div class="copyright">
        <div class="row">
          <ul>
            <li>Copyright 2020-<?php echo date('Y');?></li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web design by Rory Hackney</a></li>
            <!--TODO: change validation urls to roryhackney.com/php-finale/index.php-->
            <li><a href="https://validator.w3.org/check?uri=https://www.roryhackney.com/tech-portfolio/php-finale/index.php" target="_blank">Validated HTML</a></li>
            <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https://www.roryhackney.com/it261/index.php" target="_blank">Validated CSS</a></li>
          </ul>
        </div> <!--end row-->
      </div> <!--end copyright-->
    </footer>

  </body>
</html>
