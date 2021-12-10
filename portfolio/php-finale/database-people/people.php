<?php
  include 'config.php';
  include 'includes/header.php';
?>
<main>
  <h1>Heroes Database</h1>
  <?php
  //connect to the database
  $sql = 'SELECT * FROM People';
  $iConnect = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
              or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
  //extract the data here

  $result = mysqli_query($iConnect, $sql)
            or die(myError(__FILE__,__LINE__,mysqli_error($iConnect)));

  //if we have more than 0 rows..
  if(mysqli_num_rows($result) > 0) {
    //show the records
    while ($row = mysqli_fetch_assoc($result)) {
      //this array will display contents of the row
      echo '<ul>';
      //use similar to switch cases links
      echo '<li class="bold">For More Information: <a href="people-view.php?id=' .
            $row['PeopleID'] . ' ">' . $row['FirstName'] . '</a></li>';
      echo '<li>Last Name: '. $row['LastName'] . '</li>';
      echo '<li>Occupation: ' . $row['Occupation'] . '</li>';
      echo '</ul>';
    }//close while loop
  } else { //if there are no people
      echo 'No one is there.';
  } //close else

  //release web server
  @mysqli_free_result($result);

  //close connection
  @mysqli_close($iConnect);
  ?>
</main>
<aside>
  <h3>This is the aside</h3>
  <?php
    $images['people1'] = 'A hero called DudeMan.';
    $images['people2'] = 'A hero called DudeGirl.';
    $images['people3'] = 'A hero called RoboBoss.';
    $images['people4'] = 'A villain called EvilBro.';
    $images['people5'] = 'An accountant called PaperGirl.';
    $i = rand(1, 5);
    $pick = 'people' . $i;
    $displayedImage = 'images/people' . $i . '.jpg';
    echo '<img src="' . $displayedImage . '" alt="' . $images[$pick] . '">';
    echo '<p>' . $images[$pick] . '</p>';
  ?>
</aside>
<?php
  include 'includes/footer.php';
