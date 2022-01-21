<?php

date_default_timezone_set('America/Los_Angeles');

// $var10 = 'test';
// if(isset($var1)) {
//   print_r(isset($var1));
// } else {
//   echo 'Variable has not been set.';
// };

//is today set, if today is set, we're good.
//else, today = date function(day)

if(isset($_GET['today'])) {
  $today = $_GET['today'];
} else {
  $today = date('l');
}

//echo $today;
switch($today) {
  case 'Friday' :
    $coffee = 'Friday is Frappuccino Day!';
    $pic = 'frappe.jpg';
    $alt = 'Frappuccino';
    $content = 'Sugar, ice, and milk.';
    break;

  case 'Saturday' :
    $coffee = 'Saturday is Drip Coffee Day!';
    $pic = 'drip.jpg';
    $alt = 'Drip Coffee';
    $content = 'Drip, drip, drip.';
    break;

  case 'Sunday' :
    $coffee = 'Sunday is Cappuccino Day!';
    $pic = 'cappuccino.jpg';
    $alt = 'Cappuccino';
    $content = 'More foam than coffee, ideally.';
    break;

  case 'Monday' :
    $coffee = 'Monday is Latte Day!';
    $pic = 'latte.jpg';
    $alt = 'Latte';
    $content = 'Nice, foamy milk.';
    break;

  case 'Tuesday' :
    $coffee = 'Tuesday is Americano Day!';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = 'Water and coffee, what could be better?';
    break;

  case 'Wednesday' :
    $coffee = 'Wednesday is Iced Tea Day!';
    $pic = 'icedtea.jpg';
    $alt = 'Iced Tea';
    $content = 'Tealicious!';
    break;

  case 'Thursday' :
    $coffee = 'Thursday is Refresher Day!';
    $pic = 'refresher.jpg';
    $alt = 'Refresher';
    $content = 'Yum yum juice.';
    break;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch Page</title>
    <link href="../css/daily.css" type="text/css" rel="stylesheet">
  </head>
  <body class="coffee">
    <header>
      <div class="row">
        <a href="index.php"><img id="logo" src="../images/logo.png" alt="logo"></a>
        <span>Rory Hackney</span>
      </div>
    </header>
    <nav>
      <ul>
        <li><a href="../index.php">Portal Page</a></li>
        <li><a href="../website/contact.php">Contact Form</a></li>
        <li><a href="../currency-form.php">Currency Converter</a></li>
        <li><a href="../daily-art.php">Daily Challenge</a></li>
        <li><a href="../website/dinos.php">Database: Dinosaurs</a></li>
        <li><a href="../fuel-calculator.php">Mileage Calculator</a></li>
        <li><a href="../website/gallery.php">Kitten Gallery</a></li>
        <li><a href="../database-people/people.php">Database: Heroes</a></li>
        <li class="here"><a href="daily-coffee.php">Daily Coffee</a></li>
      </ul>
    </nav>
    <div>
      <h1>Daily Coffee: <?php echo $coffee; ?></h1>
      <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
      <p><?php echo $content; ?></p>
      <p>Click below to find out what awesome flavors we have each day!</p>
      <ul class="daily-links">
        <li><a href="daily-coffee.php?today=Monday">Monday</a></li>
        <li><a href="daily-coffee.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily-coffee.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily-coffee.php?today=Thursday">Thursday</a></li>
        <li><a href="daily-coffee.php?today=Friday">Friday</a></li>
        <li><a href="daily-coffee.php?today=Saturday">Saturday</a></li>
        <li><a href="daily-coffee.php?today=Sunday">Sunday</a></li>
      </ul>
      <footer>
        <ul>
          <li>Copyright 2020-<?php echo date('Y');?></li>
          <li>All Rights Reserved</li>
          <li><a href="https://www.linkedin.com/in/roryhackney" target="_blank">Web development by Rory Hackney</a></li>
          <li><a href="https://www.roryhackney.com/php-finale">PHP Finale Home</a></li>
          <li><a href="https://www.roryhackney.com/portfolio.php">Back to Portfolio</a></li>
          <li><a href="https://www.roryhackney.com/hire-me.php">Hire Me</a></li>
          <li><a href="<?php echo "https://validator.w3.org/check?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid HTML</a></li>
          <li><a href="<?php echo "https://jigsaw.w3.org/css-validator/validator?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid CSS</a></li>
        </ul>
      </footer>
    </div>
  </body>
</htmL>
