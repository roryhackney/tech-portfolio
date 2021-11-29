<?php

//LOGIN/REGISTRATION CONFIG
ob_start();
define('DEBUG', true);
include 'credentials.php';

//PAGE CONTENT SWITCHES
//this page = this page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//for each page..
switch(THIS_PAGE) {
  case 'login.php':
    $pageTitle = "Login Page - Rory's Art Site";
    $bodyClass  = 'login';
    break;
  case 'register.php':
    $pageTitle = "Registration Page - Rory's Art Site";
    $bodyClass = 'register';
    break;
  case 'index.php':
    $pageTitle = "Home Page - Rory's Art Site";
    $pageHeading = "Home";
    $bodyClass = 'home';
    break;
  case 'about.php':
    $pageTitle = "About Page - Rory's Art Site";
    $pageHeading = "About";
    $bodyClass = 'about';
    break;
  case 'daily.php':
    $pageTitle = "Daily Practice - Rory's Art Site";
    $pageHeading = "Today's Best Practice";
    $bodyClass = 'daily';
    break;
  case 'portfolio.php':
    $pageTitle = "Portfolio Page - Rory's Art Site";
    $pageHeading = "Portfolio";
    $bodyClass = 'portfolio';
    break;
  case 'portfolio-view.php':
    $pageTitle = "Portfolio View Page - Rory's Art Site";
    $bodyClass = 'view';
    break;
  case 'contact.php':
    $pageTitle = "Contact Page - Rory's Art Site";
    $pageHeading = "Contact";
    $bodyClass = 'contact';
    break;
  case 'thx.php':
    $pageTitle = "Contact Confirmation - Rory's Art Site";
    $pageHeading = "Thank You";
    $bodyClass = 'thx';
    break;
} //end switch cases

//CONTACT FORM CONFIG
$contactName = '';
$contactEmail = '';
$contactSubject = '';
$contactBudget = '';
$contactFavorites = '';
$contactComments = '';

$nameError = '';
$emailError = '';
$subjectError = '';
$budgetError = '';
$favoritesError = '';
$commentsError = '';

if(isset($_POST['contact'])) {
  if(empty($_POST['contactName'])) {
    $nameError = 'Please enter your name.';
  } else {
    $contactName = $_POST['contactName'];
  }
  if(empty($_POST['contactEmail'])) {
    $emailError = 'Please enter your email.';
  } else {
    $contactEmail = $_POST['contactEmail'];
  }
  if($_POST['contactSubject'] == 'NULL') {
    $subjectError = 'Please select a subject.';
  } else {
    $contactSubject = $_POST['contactSubject'];
  }
  if(empty($_POST['contactBudget'])) {
    $budgetError = 'Please choose your budget.';
  } else {
    $contactBudget = $_POST['contactBudget'];
  }
  if(empty($_POST['favorites'])) {
    $favoritesError = 'Please check at least one style you like.';
  } else {
    $contactFavorites = $_POST['$contactFavorites'];
  }
  if(empty($_POST['comments'])) {
    $commentsError = 'Please enter any additional information.';
  } else {
    $contactComments = $_POST['comments'];
  }

  function myFavorites() {
    $returnFav = '';
    if(isset($_POST['favorites'])) {
      $returnFav = implode(', ', $_POST['favorites']);
    }
    return $returnFav;
  }

  if(!empty($_POST['contactName']) &&
    !empty($_POST['contactEmail']) &&
    !empty($_POST['contactBudget']) &&
    !empty($_POST['favorites']) &&
    !empty($_POST['comments'])  &&
    $_POST['contactSubject'] != 'NULL'
    ) {
      $to = 'mungorory@gmail.com';
      $subject = 'IT261 Final Contact Form ' . date('m/d/y');
      $body = '' . $contactName . ' has filled out your form.' . PHP_EOL . '';
      $body .= 'Their email is: ' . $contactEmail . PHP_EOL . '';
      $body .= 'Their subject is: ' . $contactSubject . PHP_EOL . '';
      $body .= 'Their budget is: ' . $contactBudget . PHP_EOL . '';
      $body .= 'Their preferred style is ' . myFavorites() . PHP_EOL . '';
      $body .= 'They added: ' . $contactComments . '';

      $headers = array('From' => 'no-reply@roryhackney.com',
                       'Reply-to' => '' . $contactEmail . '');
      mail($to, $subject, $body, $headers);
      header('Location: thx.php');
    }
} //end if contact form has been submitted


//ARRAYS

//image array (for random)

$images = ['background.jpg', 'char.jpg', 'comics.jpg', 'digital.jpg', 'environment.jpg', 'hatching.jpg', 'ink.jpg', 'lineart.jpg', 'lineless.jpg', 'reference.jpg', 'value.jpg', 'watercolor.jpg'];

//nav array
$myNav['index.php'] = 'Home';
$myNav['about.php'] = 'About';
$myNav['daily.php'] = 'Daily';
$myNav['portfolio.php'] = 'Portfolio';
$myNav['contact.php'] = 'Contact';

//FUNCTIONS
function randomImages($imgArray) {
  $i = rand(0, count($imgArray) - 1);
  $displayedImage = 'images/' . $imgArray[$i];
  echo '<img src="' . $displayedImage . '" class="random" alt="' . substr_replace($imgArray[$i], '', -4) . '">';
}

function makeLinks($nav) {
  $return = '';
  foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
      $return .= '<li><a href="' . $key . '" class="here">' . $value . '</a></li>';
    } else {
      $return .= '<li><a href="' . $key . '">' . $value . '</a></li>';
    } //end else
  } //end foreach
  return $return;
} //end function makeLinks

//myError function for login and registration code
function myError($myFile, $myLine, $errorMessage) {
    if(defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b>' . $myFile . '</b> on line <b>' . $myLine . '</b>';
        echo 'Error message: <b>' . $errorMessage . '</b>';
        die();
    } else {
        echo 'There is a problem.';
        die();
    }
} //end myError function
