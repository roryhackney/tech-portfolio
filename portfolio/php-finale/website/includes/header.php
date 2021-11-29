<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--                     -->
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
  </head>
  <body class="<?php echo $bodyClass, ' ', $dailyClass; ?>">
    <header>
      <div class="innerHeader">
        <img id="logo" src="images/logo.jpg" alt="logo">
        <nav>
          <ul>
            <!-- call nav display function -->
            <?php echo makeLinks($nav); ?>
          </ul>
        </nav>
      </div><!--close div .innerHeader-->
    </header>
