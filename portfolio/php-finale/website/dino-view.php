<?php
  include 'config.php';

  if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
  } else {
    header('Location: dinos.php');
  }

  $sql = 'SELECT * FROM Dinos WHERE DinoID = ' . $id;
  $connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
              or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
  $result = mysqli_query($connect, $sql)
            or die(myError(__FILE__, __LINE__, mysqli_error($connect)));

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $DinoName = stripslashes($row['DinoName']);
      $DinoDiet = stripslashes($row['DinoDiet']);
      $DinoPlace = stripslashes($row['DinoPlace']);
      $DinoType = stripslashes($row['DinoType']);
      $DinoSize = stripslashes($row['DinoSize']);
      $DinoImg = 'images/' . stripslashes($row['DinoImg']) . '.jpg';
    }
  } else {
    $Feedback = 'No dinosaurs have been discovered.';
  } //end if else

include 'includes/header.php';
?>

<div id="wrapper">
<main>
  <h2>Welcome to <?php echo $DinoName; ?>'s Page!</h2>
  <?php
    if($Feedback == '') {
      echo '<ul>';
      echo '<li><b>Name:</b> ' . $DinoName . '</li>';
      echo '<li><b>Diet:</b> ' . $DinoDiet . '</li>';
      echo '<li><b>Found in:</b> ' . $DinoPlace . '</li>';
      echo '<li><b>Type:</b> ' . $DinoType . '</li>';
      echo '<li><b>Size:</b> ' . $DinoSize . '</li>';
      echo '</ul>';
      echo '<p><a href="dinos.php">Return to Dinos Page</a></p>';
    } else {
      echo $Feedback;
    }
  ?>
</main>

<aside>
  <?php
    if($Feedback == '') {
      echo '<img src="' . $DinoImg . '" alt="' . $DinoName . '">';
    } else {
      echo $Feedback;
    }
    @mysqli_free_result($result);
    @mysqli_close($connect);
  ?>
</aside>
</div>

<?php
  include 'includes/footer.php';
