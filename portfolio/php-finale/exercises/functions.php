<?php

//functions

//hello function directly echoing greeting
function greeting() {
  echo 'hello';
}

greeting();

echo '<br>';

//hello function passing information to a variable using return

function greetings() {
  return 'hello';
}

$variable = greetings();
echo $variable;

echo '<br>';

//hello function echoing greeting using a parameter

function sayHello($greeting) {
  echo"Hello $greeting <br>";
}

sayHello('nerd');

//function to find area of a rectangle using parameters

function rectArea($width, $height) {
  $result = $width * $height;
  return $result;
}

$rect = rectArea(15,9);
echo $rect;

echo '<br>';

//function to find and return the area and volume of a cube using parameters

function areaVol($length2, $width2, $height2) {
  $area = $length2 * $width2;
  $volume = $area * $height2;
  return array($area, $volume);
}

$result2 = areaVol(1,2,3);
echo 'Area: ' . $result2[0] . '<br>';
echo 'Volume: ' . $result2[1] . '<br>';

list($myArea, $myVolume) = areaVol(5,10,3);
echo 'Area: ' . $myArea . '<br>';
echo 'Volume: ' . $myVolume;

//function to display nav pages with a comma and space between them

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function myNav($nav) {
  $myReturn = implode(', ', $nav);
  return $myReturn;
}

echo myNav($nav);