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
  <?php include 'includes/form.php'; ?>
</main>
<aside>
  <h4>Note:</h4>
  <p>Please feel free to contact me about anything! Whether you have a project for me, want to talk shop, are looking for more information, or something not covered here, I'm happy to hear from you and I'll respond as soon as I can. Thanks for your time!</p>
</aside>
<?php include 'includes/footer.php';
