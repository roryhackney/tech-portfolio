<?php
  include('config.php');
  include('includes/header.php');
?>
    <div id="wrapper">
      <main>
        <h1><?php echo $pageHeading; ?></h1>
        <?php include('includes/form.php');?>
      </main>
      <aside>
        <h3>My Aside</h3>
      </aside>
      <?php include('includes/footer.php'); ?>
