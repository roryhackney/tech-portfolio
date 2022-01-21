<?php
//init variables
  $name = '';
  $email = '';
  $amount = '';
  $bank = '';
  $currency = '';

  $nameError = '';
  $emailError = '';
  $amountError = '';
  $bankError = '';
  $currencyError = '';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
//if name is empty, create $nameError and say 'Please enter your name'
//which is assigned to the $nameError variable
//If not empty, assign $_POST['name'] to $name
    if(empty($_POST['name'])) {
      $nameError = 'Please enter your name.';
    } else {
      $name = $_POST['name'];
    }
    if(empty($_POST['email'])) {
      $emailError = 'Please enter your email address .';
    } else {
      $email = $_POST['email'];
    }
    if(empty($_POST['amount'])) {
      $amountError = 'Please enter an amount of money.';
    } else {
      $amount = $_POST['amount'];
    }
    if($_POST['bank'] == 'NULL') {
      $bankError = 'Please choose your banking institution.';
    } else {
      $bank = $_POST['bank'];
    }
    if(empty($_POST['currency'])) {
      $currencyError = 'Please select your currency.';
    } else {
      $currency = $_POST['currency'];
    }
  }//close if server request method
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currency Form With An Attitude</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
  </head>

  <body class="currency-form">
    <header>
      <div class="row">
        <a href="index.php"><img id="logo" src="images/logo.png" alt="logo"></a>
        <p>Rory Hackney</p>
      </div>
    </header>

    <nav>
      <ul>
        <li><a href="index.php">Portal Page</a></li>
        <li><a href="website/contact.php">Contact Form</a></li>
        <li><a class="here" href="currency-form.php">Currency Converter</a></li>
        <li><a href="daily-art.php">Daily Challenge</a></li>
        <li><a href="website/dinos.php">Database: Dinosaurs</a></li>
        <li><a href="fuel-calculator.php">Mileage Calculator</a></li>
      </ul>
    </nav>

    <div class="main-wrapper">
      <h1>Currency Form</h1>
      <form action="" method="post">
        <fieldset>
          <label>Name</label>
          <input type="text" name="name" value="<?php
            if(isset($_POST['name'])){echo $_POST['name'];} ?>">
              <span><?php echo $nameError; ?></span>
          <label>Email</label>
          <input type="email" name="email" value="<?php
            if(isset($_POST['email'])){echo $_POST['email'];} ?>">
              <span><?php echo $emailError; ?></span>
          <label>How much money do you have?</label>
          <input type="text" name="amount" value="<?php
            if(isset($_POST['amount'])){echo $_POST['amount'];} ?>">
              <span><?php echo $amountError; ?></span>
          <label>Choose your bank.</label>
          <select name="bank">
            <option value="NULL"
              <?php if(isset($_POST['bank']) && $_POST == 'NULL'){
                echo 'selected = "unselected"';}?>
            >Select One</option>
            <option value="Bank of America"
              <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America'){
                echo 'selected = "selected"';}?>
            >Bank of America</option>
            <option value="Chase Bank"
              <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank'){
                echo 'selected = "selected"';}?>
            >Chase Bank</option>
            <option value="Boeing Credit Union"
              <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Boeing Credit Union'){
                echo 'selected = "selected"';}?>
            >Boeing Credit Union</option>
            <option value="Wells Fargo"
              <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo'){
                echo 'selected = "selected"';}?>
            >Wells Fargo</option>
            <option value="Your Mattress"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Your Mattress'){
              echo 'selected = "selected"';}?>
            >Your Mattress</option>
          </select>
            <span><?php echo $bankError; ?></span>
          <label> Please Choose your currency </label>
          <ul>
            <!--logic: if post currency is set and is post currency equal to value? then check the radio-->
            <li><input type="radio" name="currency" value="0.013"
              <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') {
                  echo 'checked="checked"';}?>
              >Rubles</li>
            <li><input type="radio" name="currency" value="0.76"
              <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') {
                  echo 'checked="checked"';}?>
              >Canadian Dollars</li>
            <li><input type="radio" name="currency" value="1.28"
              <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') {
                  echo 'checked="checked"';}?>
              >Pounds</li>
            <li><input type="radio" name="currency" value="1.18"
              <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') {
                  echo 'checked="checked"';}?>
              >Euros</li>
            <li><input type="radio" name="currency" value="0.0094"
              <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') {
                  echo 'checked="checked"';}?>
              >Yen</li>
          </ul>
            <span><?php echo $currencyError; ?></span>
          <input type="submit" value="Convert it!">
          <p><a href="">Reset form</a></p>
        </fieldset>
      </form>

      <?php
          if(isset($_POST['amount'], $_POST['currency']) &&
            is_numeric($_POST['amount']) &&
            is_numeric($_POST['currency'])
            ) { //end condition and start statements
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                //calculate and format total
                $total = $amount * $currency;
                $total_f = number_format($total, 2);
      ?>
  <!-- display messages -->
      <div class="box">
        <?php
                echo '<h2> Thank you, ', $name, '!</h2>';
                echo '<p>You have filled out our form successfully.</p>';
                echo '<p>Your foreign currency in the amount of ', $amount, ' has now been converted to $' . $total_f . '.</p>';
                echo '<p>Your money will be wired to ', $bank, ' within 24 hours.</p>';
                echo '<p>We will get back to you through your email, ', $email, '.</p>';
              if ($total < 0750.00){
                  echo '<h1 class="red">Less than $750</h1>';
                  echo '<h2 class="red">That sucks!</h2>';
              } else {
                echo '<h1 class="green">More than $750</h1>';
                echo '<h2 class="green">That\'s awesome!</h2>';
              }
              } //end if isset
        ?>
      </div>
    </div> <!--end main wrapper-->
    <footer>
      <div class="copyright">
        <div class="row">
          <ul>
            <li>Copyright 2020-<?php echo date('Y');?></li>
            <li>All Rights Reserved</li>
            <li><a href="https://www.linkedin.com/in/roryhackney">Web development by Rory Hackney</a></li>
            <li><a href="https://www.roryhackney.com/portfolio.php">Back to Portfolio</a></li>
            <li><a href="https://www.roryhackney.com/hire-me.php">Hire Me</a></li>
            <li><a href="<?php echo "https://validator.w3.org/check?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid HTML</a></li>
            <li><a href="<?php echo "https://jigsaw.w3.org/css-validator/validator?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid CSS</a></li>
          </ul>
        </div> <!--end row-->
      </div> <!--end copyright-->
    </footer>
  </body>
</html>
