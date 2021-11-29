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

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: portfolio.php');
}

$viewSQL = 'SELECT * FROM portfolio WHERE id = ' . $id;
$viewConnect = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$viewResult = mysqli_query($viewConnect, $viewSQL);
if(mysqli_num_rows($viewResult) > 0) {
  while($viewRow = mysqli_fetch_assoc($viewResult)) {
    $pTitle = stripslashes($viewRow['title']);
    $pImg = 'images/' . stripslashes($viewRow['image']);
    $pMaterial = stripslashes($viewRow['material']);
    $pContent = stripslashes($viewRow['content']);
    $pCost = stripslashes($viewRow['cost']);
  }
} else {
    $Feedback = 'Portfolio information not found.';
}

include 'includes/header.php';
?>
<main>
  <h2><?php echo $pTitle;?></h2>
  <?php
    if($Feedback == '') {
      echo '<img src="' . $pImg . '" alt="' . $pTitle . '">';
      echo '<ul>';
      echo '<li><b>Material</b>: ' . $pMaterial . '</li>';
      echo '<li>' . $pContent . '</li>';
      echo '<li><b>Cost:</b> ' . $pCost . '</li>';
      echo '</ul>';
    } else {
      echo $Feedback;
    }
  ?>
  <p><a href="portfolio.php">Return to Portfolio Page</a></p>
  <p><a href="contact.php">Contact Page</a></p>
</main>
<aside>
  <h4>Note:</h4>
  <p>Custom work not described here can absolutely be done: simply describe your project when submitting the <a href="contact.php">Contact form.</a></p>
  <p>Examples: holiday cards, pet drawings, printables (mugs, shirts, etc), and much more!</p>
</aside>

<?php include 'includes/footer.php';
