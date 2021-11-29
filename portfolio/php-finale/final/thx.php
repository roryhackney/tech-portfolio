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
  <p>You successfully submitted the contact form!</p>
  <p>I will get back to you soon.</p>
</main>
<aside>
  <h4>Thanks!</h4>
</aside>
<?php
  include 'includes/footer.php';
