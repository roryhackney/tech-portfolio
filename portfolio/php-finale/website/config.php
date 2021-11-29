<?php
//declare constant this page = this page
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

  //gallery PHP
  //$array[associative key name] = 'imgname Text description (value)'
  //img names are all five letters long
  $kittens['Misha_'] = 'misha A small orange kitten saved from neglect.';
  $kittens['Bastian_'] = 'basti A medium fluffy ragdoll from an ivory tower.';
  $kittens['Theo_'] = 'theod A huge fluffy kitten found in a barn.';
  $kittens['Stroodel_'] = 'stroo An ancient bony kitten spoiled for 20+ years.';
  $kittens['George_'] = 'georg An old black kitten still causing trouble from beyond the grave.';

//create switch to change certain content for each page
  switch(THIS_PAGE) {
    case 'index.php':
      $title = 'Home Page';
      $pageHeading = 'Welcome to the Home Page';
      $center = 'center';
      $bodyClass = 'home';
      break;
    case 'about.php':
      $title = 'About Page';
      $pageHeading = 'Welcome to the About Page';
      $center = 'center';
      $bodyClass = 'about inner';
      break;
    case 'daily.php':
      $title = 'Daily Page';
      $pageHeading = 'Welcome to the Daily Page';
      $center = 'center';
      $bodyClass = 'daily inner';
      break;
    case 'dinos.php':
      $title = 'Dinosaurs Page';
      $pageHeading = 'Dinosaurs Page';
      $center = 'center';
      $bodyClass = 'dinos inner';
      break;
    case 'contact.php':
    //emailable form here
      $title = 'Contact Us';
      $pageHeading = 'Welcome to the Contact Page';
      $bodyClass = 'contact inner';
      break;
    case 'gallery.php':
      $title = 'Gallery (Kittens) Page';
      $pageHeading = 'Welcome to Our Kittens Page!';
      $bodyClass = 'gallery inner';
      break;
    case 'thx.php':
      $title = 'Thank You Page';
      $pageHeading = 'Thank You! Form Submitted Successfully';
      break;
  }//end switch

//create nav array
  $nav['index.php'] = 'Home';
  $nav['about.php'] = 'About';
  $nav['daily.php'] = 'Daily';
  $nav['dinos.php'] = 'Dinosaurs';
  $nav['contact.php'] = 'Contact';
  $nav['gallery.php'] = 'Gallery';
//end nav array

//create nav display function
  function makeLinks($nav) {
    $myReturn = '';
    foreach($nav as $key => $value) {
      if(THIS_PAGE == $key) {
        $myReturn .= '<li><a href="' . $key . '" class="active">' . $value . '</a></li>';
      } else {
        $myReturn .= '<li><a href="' . $key . '">' . $value . '</a></li>';
      }//end else
    }//end foreach
    return $myReturn;
  } //end function

  //declare some image arrays
  $images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg'];
  $kittenImages = array('kitten1.jpg', 'kitten2.jpg', 'kitten3.jpg', 'kitten4.jpg', 'kitten5.jpg', 'kitten6.jpg', 'kitten7.jpg');

//create random images function
  function randomImage($imageArray) {
    $i = rand(0, count($imageArray) - 1);
    $displayedImage = 'images/' . $imageArray[$i];
    echo '<img src="' . $displayedImage . '" alt="' . str_replace('.jpg', '', $imageArray[$i]) . '">';
  }

//Form PHP

//init variables
  $firstName = '';
  $lastName = '';
  $email = '';
  $phone = '';
  $gender = '';
  $favorites = '';
  $select = '';
  $privacy = '';
  $comments = '';

  $firstNameError = '';
  $lastNameError = '';
  $emailError = '';
  $phoneError = '';
  $genderError = '';
  $favoritesError = '';
  $selectError = '';
  $commentsError = '';
  $privacyError = '';

  if($_SERVER['REQUEST_METHOD'] == 'POST') { //if form has been submitted:
    if(empty($_POST['firstName'])) {
      $firstNameError = 'Please enter your first name.';
    } else {
      $firstName = $_POST['firstName'];
    }
    if(empty($_POST['lastName'])) {
      $lastNameError = 'Please enter your last name.';
    } else {
      $lastName = $_POST['lastName'];
    }
    if(empty($_POST['email'])) {
      $emailError = 'Please enter your email.';
    } else {
      $email = $_POST['email'];
    }
    if(empty($_POST['gender'])) {
      $genderError = 'Please select a gender for today.';
    } else {
      $gender = $_POST['gender'];
    }

    if(empty($_POST['favorites'])) {
      $favoritesError = 'Please check at least one that you like.';
    } else {
      $favorites = $_POST['favorites'];
    }

    if($_POST['pet'] == 'NULL') {
      $selectError = 'Please choose one adorable animal.';
    } else {
      $select = $_POST['pet'];
    }

    if(empty($_POST['comments'])) {
      $commentsError = 'Please enter your comments.';
    } else {
      $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])) {
      $privacyError = 'Please agree to the privacy contract.';
    } else {
      $privacy = $_POST['privacy'];
    }

    function myFavorites() {
      $myReturn = '';
      if(!empty($_POST['favorites'])) {
        $myReturn = implode(', ', $_POST['favorites']);
      }  return $myReturn; //end if
    }

    if(empty($_POST['phone'])) {
      $phoneError = 'Please enter your phone number.';
    } elseif(array_key_exists('phone', $_POST)) {
      if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        $phoneError = 'Invalid format. Please enter as xxx-xxx-xxxx.';
      } else {
        $phone = $_POST['phone'];
      }
    }

    if(isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['gender'],
            $_POST['favorites'],
            $_POST['comments'],
            $_POST['privacy'],
            $_POST['phone']) &&
            $_POST['pet'] != 'NULL' &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
             {
              $to = 'mungorory@gmail.com';
              $subject = 'Form Email Test (PHP Finale) ' . date('m/d/y');
              $body = '' . $firstName . ' ' . $lastName . ' has filled out your form. ' . PHP_EOL . '';
              $body .= 'Their email is: ' . $email . ' ' . PHP_EOL . '';
              $body .= 'Their phone number is ' . $phone . ' ' . PHP_EOL . '';
              $body .= 'Their favorite things are: ' . myFavorites() . ' ' . PHP_EOL . '';
              $body .= 'Their favorite pet is: ' . $select . ' ' . PHP_EOL . '';
              $body .= 'Their preferred gender assignment is: ' . $gender . ' ' . PHP_EOL . '';
              $body .= 'They commented: ' . $comments . '';

              $headers = array(
                'From' => 'no-reply@roryhackney.com',
                'Reply-to' => ' ' . $email . '');
        //send email using mail() and header()
              mail($to, $subject, $body, $headers) ;
              header('Location: thx.php');
            } //end isset
  } //end server request check


ob_start(); //prevents header errors before reading whole page
define('DEBUG', 'TRUE'); //defines constant as we do want to see errors
//
include 'credentials.php';
  //REMEMBER: this is placed at the bottom of config file
  function myError($myFile, $myLine, $errorMessage) {
    if(defined('DEBUG') && DEBUG) {
      echo 'Error in file: <b>' . $myFile . '</b> on line <b>' . $myLine . '</b>.';
      echo 'Error message: <b>' . $errorMessage . '</b>.';
      die();
    } else {
      echo 'There is a problem.';
      die();
    }
  } //end of myError function
