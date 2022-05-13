<?php
  include 'config.php';
  include 'includes/header.php';
?>

    <div id="wrapper">
      <h1 class="<?php echo $center; ?>"><?php echo $pageHeading; ?></h1>
      <main>
        <?php randomImage($dinoImages); ?>
        <?php
          $sql = 'SELECT * FROM Dinos';
          $connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                      or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
          $result = mysqli_query($connect, $sql)
                      or die(myError(__FILE__, __LINE__, mysqli_error($connect)));
          if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<ul>';
              echo '<li><b>Learn more about: <a href="dino-view.php?id=' .
                    $row['DinoID'] . '">' . $row['DinoName'] . '</a></b></li>';
              echo '<li>Diet: ' . $row['DinoDiet'] . '</li>';
              echo '<li>Found in: ' . $row['DinoPlace'] . '</li>';
              echo '</ul>';
            }//close while loop
          } else { //if there are no dinos
            echo 'No dinosaurs found.';
          } //close if else

          @mysqli_free_result($result);
          @mysqli_close($connect);

        ?>

      </main>
      <aside>
        <h3>Always remember that dinosaurs are cool.</h3>
        <p>Additional note:</p>
        <ul>
          <li>Birds are dinosaurs.</li>
          <li>Many dinosaurs had feathers and they were very pretty.</li>
          <li>Source: <a href="https://www.nhm.ac.uk/discover/dino-directory.html">Museum Website</a></li>
        </ul>
      </aside>

      <?php include('includes/footer.php'); ?>
