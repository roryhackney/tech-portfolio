<?php
  include 'config.php';
  //format: isset($_GET['today'])
  if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
  } else {
    header('Location: people.php');
  }

  $sql = 'SELECT * FROM People WHERE PeopleID = ' . $id;
  //connect to database
  $iConnect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
              or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

  $result = mysqli_query($iConnect, $sql)
            or die(myError(__FILE__, __LINE__, mysqli_error($iConnect)));

  if(mysqli_num_rows($result) > 0) {
    //show the records
    while($row = mysqli_fetch_assoc($result)) {
      $FirstName = stripslashes($row['FirstName']);
      $LastName = stripslashes($row['LastName']);
      $Occupation = stripslashes($row['Occupation']);
      $Email = stripslashes($row['Email']);
      $Birthdate = stripslashes($row['Birthdate']);
      $Description = stripslashes($row['Description']);
    } //end while
  } else {
    $Feedback = 'No one is there.';
  } //end if else

  include 'includes/header.php';
?>

<main>
  <h2>Welcome to <?php echo $FirstName; ?>'s Page!</h2>
  <?php
    if($Feedback == '') {
      echo '<ul>';
        echo '<li><b>First Name: </b>' . $FirstName . '</li>';
        echo '<li><b>Last Name: </b>' . $LastName . '</li>';
        echo '<li><b>Occupation: </b>' . $Occupation . '</li>';
        echo '<li><b>Email: </b>' . $Email . '</li>';
        echo '<li><b>Birthdate: </b>' . $Birthdate . '</li>';
      echo '</ul>';
      echo '<p>' . $Description . '</p>';
      echo '<p><a href="people.php">Return to People Page</a></p>';
      echo '<br>';
    } else {
      echo $Feedback;
    }
  ?>
</main>

<aside>
  <?php
    if($Feedback == '') {
      echo '<img src="images/people' . $id .'.jpg"  alt="' . $FirstName . '">';
    } else {
      echo $Feedback;
    }

    @mysqli_free_result($result);

    @mysqli_close($iConnect);
  ?>

</aside>

<?php

  include 'includes/footer.php';
