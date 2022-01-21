<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
  </head>
  <body class="<?php echo $bodyClass, ' ', $dailyClass; ?>">
    <header>
      <div class="innerHeader">
        <a href="../index.php"><img id="logo" src="images/logo.png" alt="logo"></a>
        <nav>
          <ul>
            <!-- call nav display function -->
            <?php echo makeLinks($nav); ?>
          </ul>
          <ul class="subnav">
            <?php echo makeLinks($nav2); ?>
          </ul>
        </nav>
      </div><!--close div .innerHeader-->
    </header>
