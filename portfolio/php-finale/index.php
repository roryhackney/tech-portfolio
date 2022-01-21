<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Finale | Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
  </head>
  <body class="portal">

    <header>
      <div class="row">
        <a href="index.php"><img id="logo" src="images/logo.png" alt="logo"></a>
        <p>Rory Hackney</p>
      </div>
    </header>

    <nav>
      <ul>
        <li><a class="here" href="index.php">Portal Page</a></li>
        <li><a href="website/contact.php">Contact Form</a></li>
        <li><a href="currency-form.php">Currency Converter</a></li>
        <li><a href="daily-art.php">Daily Challenge</a></li>
        <li><a href="website/dinos.php">Database: Dinosaurs</a></li>
        <li><a href="fuel-calculator.php">Mileage Calculator</a></li>
      </ul>
    </nav>
 
<!--TODO: go through files, delete extraneous, polish roughs, add links to most important, reorganize files, fix links-->
<!--TODO: main site complete, go through final/... login and registration done, but not mobile-->

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
              <img src="images/final.jpg" alt="Screenshot of a login screen">
              <span>Final Project: User Management, Database Content, Contact Form, and more...</span>
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
        </ul>
        <a href="images/portfoliotable.jpg" target="_blank">
          <img src="images/portfoliotable.jpg" alt="Portfolio database table">
        </a>
      </aside>
    </div> <!--end wrapper-->
    <footer>
      <div class="copyright">
        <div class="row">
          <ul>
            <li>Copyright 2020-<?php echo date('Y');?></li>
            <li>All Rights Reserved</li>
            <li><a href="https://www.linkedin.com/in/roryhackney" target="_blank">Web development by Rory Hackney</a></li>
            <li><a href="https://www.roryhackney.com/portfolio.php">Back to Portfolio</a></li>
            <li><a href="https://www.roryhackney.com/hire-me.php">Hire Me</a></li>
            <li><a href="<?php echo "https://validator.w3.org/check?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid HTML</a></li>
            <li><a href="<?php echo "https://jigsaw.w3.org/css-validator/validator?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid CSS</a></li>
          </ul>
        </div> <!--end row-->
      </div> <!--end copyright-->
    </footer>
  </body>
</html>
