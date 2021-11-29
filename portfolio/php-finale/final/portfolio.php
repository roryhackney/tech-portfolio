<?php

session_start();
if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'Please log in to view this content.';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include 'config.php';
include 'includes/header.php';
?>
<main>
  <h2><?php echo $pageHeading; ?></h2>
  <p>This page shows examples with prices of custom art work.</p>
  <p>For more information, or to purchase custom art, simply fill out the <a href="contact.php">Contact form.</a></p>
  <?php
    $portfolioSQL = 'SELECT * FROM portfolio';
    $portfolioConnect = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $portfolioResult = mysqli_query($portfolioConnect, $portfolioSQL);
    if(mysqli_num_rows($portfolioResult) > 0) {
      while($portfolioRow = mysqli_fetch_assoc($portfolioResult)) {
        echo '<ul>';
        echo '<li><b>For more information: <a href="portfolio-view.php?id=' . $portfolioRow['id'] .'">' . $portfolioRow['title'] . '</a></b></li>';
        echo '<li>Material: ' . $portfolioRow['material'] . '</li>';
        echo '<li>Cost: ' . $portfolioRow['cost'] . '</li>';
        echo '</ul>';
      } //close while loop
    } else { //if there is nothing in table
      echo 'Portfolio information not found.';
    }

    @mysqli_free_result($portfolioResult);
    @mysqli_close($portfolioConnect);

  ?>
</main>
<aside>
  <h4>Note:</h4>
  <p>Custom work not described here can absolutely be done: simply describe your project when submitting the <a href="contact.php">Contact form.</a></p>
  <p>Examples: holiday cards, pet drawings, printables (mugs, shirts, etc), and much more!</p>
  </aside>
<?php
  include 'includes/footer.php';
