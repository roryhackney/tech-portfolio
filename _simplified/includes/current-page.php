<?php

//clean input to ensure safety
function validate($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

/*page specific info*/
$page = $_SERVER["PHP_SELF"];
$page = validate($page);

switch($page) {
    case '/_simplified/index.php':
        $bodyClass = 'home';
        $title = 'Home';
        $currentPage = 'home';
        break;
    case '/_simplified/about.php':
        $bodyClass = 'about';
        $title = 'About Me';
        $currentPage = 'about';
        break;
    case '/_simplified/hire-me.php':
        $bodyClass = 'hire';
        $title = 'Hire Me';
        $currentPage = 'hire';
        break;
    case '/_simplified/portfolio.php':
        $bodyClass = 'portfolio';
        $title = 'Portfolio';
        $currentPage = 'portfolio';
        break;
    case '/_simplified/post.php':
        $bodyClass = 'portfolio-detail';
        $title = $_GET["title"];
        $currentPage = 'portfolio';
        break;
    case '/_simplified/thanks.php':
        $bodyClass = 'thanks';
        $title = 'Thank You';
        $currentPage = '';
        break;
    default:
        $bodyClass = "not-found-404";
        $title = "Page Not Found";
        $currentPage = "404";
}

/*copyright*/
$copyYear = "2021-" . date("Y");

$linkedin = "https://www.linkedin.com/in/roryhackney/";
$github = "https://www.github.com/roryhackney";
$email = "roryhackney@gmail.com";