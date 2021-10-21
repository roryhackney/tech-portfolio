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
/*TODO: change case to root folder once moved to main site*/
switch($page) {
    case '/tech-portfolio/index.php':
        $bodyClass = 'home';
        $title = 'Home';
        $currentPage = 'home';
        $h1 = 'Home';
        break;
    case '/tech-portfolio/thanks.php':
        $bodyClass = 'thanks';
        $title = 'Thank You';
        $currentPage = '';
        $h1 = 'Thank You';
        break;
    case '/tech-portfolio/about-me.php':
        $bodyClass = 'about';
        $title = 'About Me';
        $currentPage = 'about';
        $h1 = 'About Me';
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
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/my-styles.css">
        <title><?php echo $title . ' | Rory Hackney, Web Developer and Designer'; ?></title>
    </head>
    <body class=<?php echo $bodyClass;?>>
        <header>
            <img class="logo"
            alt="Rory Hackney's logo: yellow letters RH over a dark blue circle."
            src="assets/logo-small.png"
            srcset="assets/logo-small.png 64w,
            assets/logo-medium.png 100w,
            assets/logo-large.png 125w"
            sizes="(max-width: 579px) 64px,
            (max-width:860px) 100px,
            125px"
            >
            <div class="mobile-hidden left">
                <p class="site-title">Rory Hackney</p>
                <p class="site-tagline">Web Developer and Designer</p>
            </div>
            <p class="site-title mobile-only">Rory Hackney</p>
            <div class="menu-toggle mobile-only" id="menu-toggle" onclick="menuToggle()">
                <hr />
                <hr />
                <hr />
            </div>
            <p class="site-tagline mobile-only">Web Developer and Designer</p>
            <nav>
                <ul id="nav">
                    <li <?php if($currentPage == 'home') {echo 'class="active-page"';}?>><a href="index.php">Home</a></li>
                    <li <?php if($currentPage == 'portfolio') {echo 'class="active-page"';}?>><a href="portfolio.php">Portfolio</a></li>
                    <li <?php if($currentPage == 'hire') {echo 'class="active-page"';}?>><a href="hire-me.php">Hire Me</a></li>
                    <li <?php if($currentPage == 'about') {echo 'class="active-page"';}?>><a href="about-me.php">About Me</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1 class="title is-3 has-text-centered"><?php echo $h1;?></h1>