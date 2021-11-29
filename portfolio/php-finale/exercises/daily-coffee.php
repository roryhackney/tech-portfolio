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
    <title>Switch Page</title>
  </head>
  <body>
    <h1><?php echo $coffee; ?></h1>
    <p><?php echo $content; ?></p>
    <p>Click below to find out what awesome flavors we have each day!</p>
    <ul>
      <li><a href="switch.php?today=Monday">Monday</a></li>
      <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
      <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
      <li><a href="switch.php?today=Thursday">Thursday</a></li>
      <li><a href="switch.php?today=Friday">Friday</a></li>
      <li><a href="switch.php?today=Saturday">Saturday</a></li>
      <li><a href="switch.php?today=Sunday">Sunday</a></li>
    </ul>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" width="300px" height="300px">
  </body>
</htmL>
