<?php

ob_start(); //prevents header errors before reading whole page
define('DEBUG', 'TRUE'); //defines constant as we do want to see errors

include 'credentials.php';


//for hw:
//REMEMBER: this is placed at the bottom of config file
function myError($myFile, $myLine, $errorMessage){
  if(defined('DEBUG') && DEBUG) {
    echo 'Error in file: <b>' . $myFile . '</b> on line <b>' . $myLine . '</b>.';
    echo 'Error message: <b>' . $errorMessage . '</b>';
    die();
  } else {
    echo 'There is a problem.';
    die();
  }
}
