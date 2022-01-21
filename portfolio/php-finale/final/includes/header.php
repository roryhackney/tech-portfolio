<!doctype html>
<html lang="en">
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $bodyClass . ' ' . $dailyClass; ?>">
  <header>
    <div class="success">
    <?php
      if(isset($_SESSION['success'])) : ?>
        <h3>Welcome, <?php echo $_SESSION['UserName']; ?></h3>
          <p><?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?></p>
    <?php endif; ?>
    </div>

    <div id="head">
      <h1>Welcome To My Super Secret Website!</h1>
      <p>(Members Only)</p>
    </div>

    <div class="welcome-logout">
      <?php if(isset($_SESSION['FirstName'])) : ?>
      <h3>Welcome, <?php echo $_SESSION['FirstName']; ?></h3>
      <p><a href="index.php?logout='1'">Log Out</a></p>
    <?php endif; ?>
    </div>

  </header>
  <nav>
    <ul>
      <?php echo makeLinks($myNav); ?>
    </ul>
  </nav>
    <div id="wrapper">
