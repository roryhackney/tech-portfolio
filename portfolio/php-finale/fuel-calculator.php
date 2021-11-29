<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Calculator Days Errors Sticky</title>
    <style>
      * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {background-color: #fadadd;}

      h1 {
        text-align: center;
        margin: 0;
        padding: 10px 0 14px 0;
      }
      fieldset {
        width: 450px;
        margin: 0 auto;
        padding: 10px 15px 10px 10px;
        background-color: beige;
        border: 2px solid silver;
      }
      label {
        display: block;
        padding: 5px 0;
        font-size: 1.2em;
      }
      input {
        border: 1px solid lightgray;
      }
      ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }
      select {
        display: block;
        margin-bottom: 5px;
        border: 1px solid lightgrey;
      }
      a, input[type="submit"]{
        text-decoration: none;
        font-size: .9em;
        color: black;
        border: 1px solid gray;
        background-color: gainsboro;
        padding: 1px 3px 1px 3px;
        margin: 10px 15px 6px 0;
      }
      h2 {
        text-align: center;
        margin-bottom: 5px;
        color: red;
        font-family: 'Georgia', serif;
      }
      div {
        border: 1px solid gray;
        width: 450px;
        margin: 10px auto 0 auto;
        padding: 0 10px 20px 10px;
        background-color: white;
      }
      span {
        display: block;
        border: 2px solid silver;
        width: 400px;
        margin: 5px auto;
        padding: 10px;
        color: red;
        background-color: white;
      }
      p {
        margin: 0px;
      }
    </style>
  </head>

  <body>
    <h1>Our Calculator</h1>
    <form action="" method="post">
      <fieldset>
        <label>What is your name?</label>
        <input type="text" name="name" value="<?php
        if(isset($_POST['name'])) {echo $_POST['name'];}
        ?>">

        <label>How many miles will you be driving?</label>
        <input type="text" name="distance" value= "<?php
        if(isset($_POST['distance'])) {echo $_POST['distance'];}?>">

        <label>How many hours per day would you like to drive?</label>
        <input type="text" name="hoursPerDay" value="<?php
        if(isset($_POST['hoursPerDay'])) {echo $_POST['hoursPerDay'];}?>">

        <label>How much are you paying per gallon?</label>
        <ul>
          <li><input type="radio" name="gallonPrice" value="3.00"
            <?php if(isset($_POST['gallonPrice'])
                    && $_POST['gallonPrice'] == "3.00") {
                      echo "checked = checked";
            }?>>$3.00</li>
          <li><input type="radio" name="gallonPrice" value="3.50"
            <?php if(isset($_POST['gallonPrice'])
                    && $_POST['gallonPrice'] == "3.50") {
                      echo "checked = checked";
            }?>>$3.50</li>
          <li><input type="radio" name="gallonPrice" value="4.00"
            <?php if(isset($_POST['gallonPrice'])
                    && $_POST['gallonPrice'] == "4.00") {
                      echo "checked = checked";
            }?>>$4.00</li>
        </ul>

        <label>What is your fuel efficiency?</label>
        <select name="efficiency">
          <option value="NULL" <?php
              if(isset($_POST['efficiency'])
                  && $_POST['efficiency'] == 'NULL') {
                echo 'selected="unselected"'; }?>
            >Select one</option>
          <option value="10" <?php
              if(isset($_POST['efficiency'])
                  && $_POST['efficiency'] == '10') {
                echo 'selected="selected"'; }?>
            >Terrible at 10mpg</option>
          <option value="20" <?php
              if(isset($_POST['efficiency'])
                  && $_POST['efficiency'] == '20') {
                echo 'selected="selected"'; }?>
            >Bad at 20mpg</option>
          <option value="30" <?php
              if(isset($_POST['efficiency'])
                  && $_POST['efficiency'] == '30') {
                echo 'selected="selected"'; }?>
            >Okay at 30mpg</option>
          <option value="40" <?php
              if(isset($_POST['efficiency'])
                  && $_POST['efficiency'] == '40') {
                echo 'selected="selected"'; }?>
          >Good at 40mpg</option>
        </select>

        <input type="submit" value="Calculate">
        <a href="">Reset</a>

      </fieldset>
    </form>

    <?php
    #if the form has been submitted then check to see if anything is empty
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
          $nameError = 'Please enter your name.';
          echo '<span>' . $nameError . '</span>';
        }else {
          $name = $_POST['name'];
        } //end name check
        if(empty($_POST['distance'])) {
          $distanceError = 'Please enter number of miles.';
          echo '<span>' . $distanceError . '</span>';
        } else {
          $distance = $_POST['distance'];
        } //end distance check
        if(empty($_POST['hoursPerDay'])) {
          $hoursError = 'Please enter number of hours per day.';
          echo '<span>' . $hoursError . '</span>';
        } else {
          $hoursPerDay = $_POST['hoursPerDay'];
        }//end hours per day check
        if(empty($_POST['gallonPrice'])) {
          $priceError = 'Please select your price per gallon.';
          echo '<span>' . $priceError . '</span>';
        } else {
          $gallonPrice = $_POST['gallonPrice'];
        } //end gallon price check
        if($_POST['efficiency'] == "NULL") {
          $efficiencyError = 'Please select your fuel efficiency.';
          echo '<span>' . $efficiencyError . '</span>';
        } else {
          $efficiency = $_POST['efficiency'];
        }// end efficiency check
        if(!empty($_POST['distance']) && !is_numeric($_POST['distance'])){
          echo '<span>Please enter NUMBER of miles.</span>';
        }
        if(!empty($_POST['hoursPerDay']) && !is_numeric($_POST['hoursPerDay'])){
          echo '<span>Please enter NUMBER of hours per day.<span>';
        }
      }//end server if
    ?>

    <?php
      if(isset($_POST['distance'],
              $_POST['efficiency'],
              $_POST['gallonPrice'],
              $_POST['hoursPerDay'])
            && is_numeric($_POST['distance'])
            && is_numeric($_POST['hoursPerDay'])
            && !empty($_POST['name'])
          ) {//end conditions
          $totalCost = ($distance / $efficiency) * $gallonPrice;
          $totalHours = $distance / 65;
          $days = $totalHours / $hoursPerDay;
          echo '<div>';
          echo '<h2>Calculator Results</h2>';
          echo '<p>' . $name . ', you will be driving <b>' . $distance . ' miles.</b></p>';
          echo '<p>Your vehicle has an efficiency rating of <b>' . $efficiency . ' miles per gallon.</b></p>';
          echo '<p>Your total cost of gas will be <b>$' . number_format($totalCost, 2), '.</b></p>';
          echo '<p>You will be driving for <b>' . number_format($totalHours, 0) . ' hours.</b></p>';
          echo '<p>At <b>' . $hoursPerDay . ' hours per day</b>, it will take you <b>' . number_format($days, 0) . ' days</b> to get there.</p>';
          echo '</div>';
      }//end isset
    ?>

  </body>
</html>
