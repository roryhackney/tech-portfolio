<?php

    include 'server.php';

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
        case '/blog.php':
            $bodyClass = 'portfolio-detail blog';
            $title = 'Software and Web Development Blog';
            $currentPage = 'blog';
            $h1 = 'Software and Web Development Blog';
            break;
        case '/how-to-use-filezilla.php':
            $bodyClass = 'portfolio-detail blog';
            $title = 'Blog: How To Use FileZilla';
            $currentPage = 'blog';
            $h1 = 'How To Use FileZilla';
            break;
        case '/php-finale.php':
            $bodyClass = 'portfolio-detail dark-hero';
            $title = 'PHP Finale';
            $currentPage = 'portfolio';
            $h1 = 'PHP Finale';
            break;
        case '/the-book-shelf.php':
            $bodyClass = 'portfolio-detail dark-hero';
            $title = 'The Book Shelf';
            $currentPage = 'portfolio';
            $h1 = 'The Book Shelf';
            break;
        case '/yamagiwa-massage.php':
            $bodyClass = 'portfolio-detail';
            $title = 'Yamagiwa Massage Website Design';
            $currentPage = 'portfolio';
            $h1 = "Yamagiwa Massage Website Design";
            break;
        case '/database-design.php':
            $bodyClass = 'portfolio-detail';
            $title = 'Database Design';
            $currentPage = 'portfolio';
            $h1 = 'Database Design: Art Business';
            break;
        case '/tech-portfolio.php':
            $bodyClass = 'portfolio-detail';
            $title = 'Tech Portfolio';
            $currentPage = 'portfolio';
            $h1 = 'Tech Portfolio';
            break;
        case '/java-menu-drawing-sine.php':
            $bodyClass = 'portfolio-detail';
            $title = 'Java Menu Drawing Sine';
            $currentPage = 'portfolio';
            $h1 = 'Java Menu Drawing Sine';
            break;
        case '/post.php':
            $bodyClass = 'portfolio-detail';
            $title = $_GET["title"];
            $currentPage = 'portfolio';
            $h1 = $_GET["title"];
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
    $recaptchaError = "";

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

        $recaptchaResponse = $_POST["g-recaptcha-response"];
        $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptchaData = array(
            'secret' => $recaptchaSecretKey,
            'response' => $_POST["g-recaptcha-response"]
        );
        $recaptchaOptions = array(
            'http' => array(
                'method' => 'POST',
                'content' => http_build_query($recaptchaData)
            )
        );
        $recaptchaContext = stream_context_create($recaptchaOptions);
        $recaptchaVerification = file_get_contents($recaptchaURL, false, $recaptchaContext);
        $recaptchaSuccess = json_decode($recaptchaVerification);
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !empty($_POST["message"])) {
            if($recaptchaSuccess->success == false) {
                $recaptchaError = "Please check the recaptcha box.";
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
            } else if($recaptchaSuccess->success == true) {
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