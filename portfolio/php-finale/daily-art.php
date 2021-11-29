<?php

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
  $today = $_GET['today'];
} else {
  $today = date('l');
}

switch($today) {

  case 'Monday' :
    $challenge = 'Monday is Draw It Again Day!';
    $pic = 'draw_it_again.jpg';
    $alt = 'The same drawing, 9 years apart';
    $credit = 'Laura Brouwers';
    $link = 'https://www.instagram.com/cyarine';
    $content = "The Draw It Again challenge consists of taking an old drawing (made at least one year prior, but the longer ago the piece was made, the better) and recreating it, using the new techniques, skills, and plain old practice that you've built in the meantime. It's a great way to see how much you've improved, and how your art style has changed! Try the Draw It Again challenge next Monday!";
    $bodyClass = 'monday';
    break;

  case 'Tuesday' :
    $challenge = 'Tuesday is Style Challenge Day!';
    $pic = 'art_style.jpg';
    $alt = 'The same drawing, in six different styles';
    $credit = 'Alyssa Bronstad';
    $link = 'https://www.artstation.com/artwork/axRYq';
    $content = "The Style challenge consists of drawing the same thing (usually a headshot of an original character, fan art, or yourself) in six or more different art styles. Popular styles include <i>The Simpsons, Disney</i>, old cartoons from the 1920s, new cartoons such as <i>Steven Universe</i>, and more. This challenge helps the artist break out of their usual style and try something new. Try the Style challenge next Tuesday!";
    $bodyClass = 'tuesday';
    break;

  case 'Wednesday' :
    $challenge = 'Wednesday is Draw This In Your Style Day!';
    $pic = 'dtiys.jpg';
    $alt = 'The same drawing by two different artists';
    $credit = 'Original Artist: Sai, Redrawn By: Heather Lynch ';
    $link = 'https://hlynch316.artstation.com/';
    $credit2 = 'https://www.instagram.com/_sailti/?hl=en';
    $content = "The Draw This In Your Style challenge consists of an artist challenging other artists to create their own version of a drawing. Often, many artists will participate, resulting in a huge library of the same piece in different styles! This challenge is great for building community and pushing one's art technique. Try the Draw This In Your Style challenge next Wednesday!";
    $bodyClass = 'wednesday';
    break;

  case 'Thursday' :
    $challenge = 'Thursday is Straight To Ink Day!';
    $pic = 'inktober.jpg';
    $alt = 'A drawing made with ink alone';
    $credit = 'Stephanie Mai';
    $link = 'https://www.instagram.com/stephanieeedraws/';
    $content = "The Straight To Ink challenge consists of drawing something without making a sketch first. Usually the artist will take their inking tool of choice (dip pen, brush, or even digital medium) and draw something without erasing or changing anything once it’s drawn. This challenge teaches greater control and confidence in one's lines. Try the Straight To Ink challenge next Thursday!";
    $bodyClass = 'thursday';
    break;

  case 'Friday' :
    $challenge = 'Friday is Hourly Drawing Day!';
    $pic = 'hourly.jpg';
    $alt = 'One drawing for every hour in the day';
    $credit = 'Maddi Gonzalez';
    $link = 'https://www.instagram.com/quasimaddi/';
    $content = "The Hourly Drawing challenge consists of drawing something every hour (often a simple illustration or short comic strip telling the story of the artist’s day). This challenge helps the artist get into the habit of making art consistently, and it's great for building community. Try the Hourly Drawing challenge next Friday!";
    $bodyClass = 'friday';
    break;

  case 'Saturday' :
    $challenge = 'Saturday is Environments Day!';
    $pic = 'environment.jpg';
    $alt = 'Digital painting of a jungle';
    $credit = 'Laura Price';
    $link = 'https://lulusketches.tumblr.com/';
    $content = "The Environments challenge consists of drawing a different environment every day for a month. This challenge pushes artists to work with reference and learn to render backgrounds, which are often a weakness for young artists. Try the Environments challenge next Saturday!";
    $bodyClass = 'saturday';
    break;

  case 'Sunday' :
    $challenge = 'Sunday is Improvement Hell Day!';
    $pic = 'hell.jpg';
    $alt = '20 sketches of hands, including bone and muscle studies';
    $credit = 'Kam Fox';
    $link = 'https://www.deviantart.com/kam-fox';
    $content = "The Improvement Hell challenge consists of drawing something difficult to improve your practice, such as hands or feet, backgrounds, animals, color studies, or a medium or technique never tried before. Try the Improvement Hell challenge next Sunday!";
    $bodyClass = 'sunday';
    break;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/daily.css">
    <title>Daily Art Challenges</title>
  </head>
  <body class="<?php echo $bodyClass ?>">
    <header>
      <div class="row">
        <img id="logo" src="images/logo.png" alt="logo">
        <p>Rory Hackney</p>
      </div>
    </header>

    <nav>
      <ul>
        <li><a href="index.php">Portal Page</a></li>
        <li><a href="daily.php">Daily Challenge</a></li>
        <li><a href="week5/calculator-days-errors-sticky.php">Mileage Calculator</a></li>
        <li><a href="website/contact.php">Email Form</a></li>
        <li><a href="database-people/people.php">Database: People</a></li>
      </ul>
    </nav>

    <div>
      <h1><?php echo $challenge; ?></h1>
      <p><?php echo $content; ?></p>
      <br>
      <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
      <p class="src">
        <?php
          echo $credit;
          if(isset($credit2)){
            echo '<a href="' . $credit2 . '">Source</a>';
          };
        ?>
        <a target="_blank" href="<?php echo $link; ?>">Source</a>
      </p>
      <br>
      <p>Click below to find out what you should try each day!</p>
      <br>
      <ul>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
      </ul>
      <br>
      <a href="https://validator.w3.org/check?uri=https://www.roryhackney.com/it261/daily.php" target="_blank">Validated HTML</a>
      <br>
      <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://www.roryhackney.com/it261/daily.php" target="_blank">Validated CSS</a>
    </div>
  </body>
</htmL>
