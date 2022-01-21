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
  <p>See the database table stuctures and data used for this project.</p>
  <h3>Users Table</h3>
  <img src="images/userstable.jpg" alt="MySQL table of Users">
  <h3>Portfolio Table</h3>
  <img src="images/portfoliotable.jpg" alt="MySQL Portfolio table">
</main>
<aside>
  <h4>Note:</h4>
  <p>This website accesses information from a database using MySQL. This page shows screenshots of the tables's structure and information. No personal information is shown.</p>
</aside>
<?php
include 'includes/footer.php';
