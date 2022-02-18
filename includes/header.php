<?php

/*copyright logic*/
$currentYear = date("Y");
$copyYear = "";
if ($currentYear - 2021 > 0) {
    $copyYear = "2021-" . $currentYear;
} else {
    $copyYear = "2021";
}

/*page specific info*/
$page = $_SERVER["PHP_SELF"];
$page = validate($page);
switch($page) {
    case '/index.php':
        $bodyClass = 'home';
        $title = 'Home';
        $currentPage = 'home';
        $h1 = 'Home';
        break;
    case '/thanks.php':
        $bodyClass = 'thanks';
        $title = 'Thank You';
        $currentPage = '';
        $h1 = 'Thank You';
        break;
    case '/about-me.php':
        $bodyClass = 'about';
        $title = 'About Me';
        $currentPage = 'about';
        $h1 = 'About Me';
        break;
    case '/hire-me.php':
        $bodyClass = 'hire';
        $title = 'Hire Me';
        $currentPage = 'hire';
        $h1 = 'Hire Me';
        break;
    case '/portfolio.php':
        $bodyClass = 'portfolio';
        $title = 'Portfolio';
        $currentPage = 'portfolio';
        $h1 = 'Portfolio';
        break;
    case '/resume.php':
        $bodyClass = 'resume';
        $title = 'Resume';
        $currentPage = 'resume';
        $h1 = 'Resume';
        break;
    case '/php-finale.php':
        $bodyClass = 'portfolio-detail';
        $title = 'PHP Finale';
        $currentPage = 'portfolio';
        $h1 = 'PHP Finale';
        break;
    case '/the-book-shelf.php':
        $bodyClass = 'portfolio-detail';
        $title = 'The Book Shelf';
        $currentPage = 'portfolio';
        $h1 = 'The Book Shelf';
        break;
}

/*contact form validation*/
$name = "";
$email = "";
$subject = "";
$message = "";
$nameError = "";
$emailError = "";
$messageError = "";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(empty($_POST["name"])) {
        $nameError = "Please enter your preferred name.";
    } else {
        $name = validate($_POST["name"]);
    }

    if(empty($_POST["email"])) {
        $emailError = "Please enter your email so I can reply.";
    } else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Please enter a valid email address.";
        $emailValue = $_POST["email"];
    } else {
        $emailValue = $_POST["email"];
        $email = validate($_POST["email"]);
    }

    $subject = validate($_POST["subject"]);

    if(empty($_POST["message"])) {
        $messageError = "Please enter your message.";
    } else {
        $message = validate($_POST["message"]);
    }

    if(!empty($_POST["name"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !empty($_POST["message"])) {
        /*email contact*/
        $to = "roryhackney@gmail.com";
        if(empty($_POST["subject"])) {
            $mySubject = "Contact Form from roryhackney.com (tech portfolio)";
        } else {
            $mySubject = $subject . " | Contact Form (tech portfolio)";
        }
        $headers = "From: admin@roryhackney.com" . "\r\n" . "Reply-To: " . $email;
        $message .= "\n" . "From: " . $name;
        $message = wordwrap($message, 70);
        mail($to, $mySubject, $message, $headers);
        header("Location: thanks.php");
    } else {
        echo '
        <script type="text/javascript">
            "use strict";
            window.addEventListener("load", function(event) {
                scrollToForm();
                function scrollToForm() {
                    let form = document.getElementById("form");
                    form.scrollIntoView();
                }
            });
        </script>';
    }
}

function validate($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&family=Volkhov&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f524b8448d.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/my-styles.css">
        <title><?php echo $title . ' | Rory Hackney, Web Developer and Designer'; ?></title>
    </head>
    <body class=<?php echo $bodyClass;?>>
        <header>
            <a href="index.php"><img class="logo"
            alt="Rory Hackney's logo: yellow letters RH over a dark blue circle."
            src="assets/logo-small.png"
            srcset="assets/logo-small.png 64w,
            assets/logo-medium.png 100w,
            assets/logo-large.png 125w"
            sizes="(max-width: 579px) 64px,
            (max-width:860px) 100px,
            125px"
            ></a>
            <div class="mobile-hidden left">
                <a class="no-underline" href="index.php"><p class="site-title">Rory Hackney</p></a>
                <p class="site-tagline">Web Developer and Designer</p>
            </div>
            <a href="index.php"><p class="site-title mobile-only">Rory Hackney</p></a>
            <div class="menu-toggle mobile-only" id="menu-toggle">
                <hr />
                <hr />
                <hr />
            </div>
            <p class="site-tagline mobile-only">Web Developer and Designer</p>
            <nav>
                <ul id="nav">
                    <li id="dark-mode-toggle">Dark Mode</li>
                    <li <?php if($currentPage == 'home') {echo 'class="active-page"';}?>><a href="index.php">Home</a></li>
                    <li <?php if($currentPage == 'portfolio') {echo 'class="active-page"';}?>><a href="portfolio.php">Portfolio</a></li>
                    <li <?php if($currentPage == 'hire') {echo 'class="active-page"';}?> id="submenu-toggle">
                        <a href="hire-me.php">Hire Me <span class="is-hidden-mobile"><i class="fas fa-angle-down"></i></span></a>
                        <ul id="nav-dropitem-tablet" class="is-hidden-mobile">
                            <li><a href="resume.php">Resume</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropitem-mobile is-hidden-tablet <?php if($currentPage == 'resume') {echo 'active-page';}?>">
                        <a href="resume.php">Resume</a>
                    </li>
                    <li <?php if($currentPage == 'about') {echo 'class="active-page"';}?>><a href="about-me.php">About Me</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1 class="title is-3 has-text-centered"><?php echo $h1;?></h1>