<?php
    /*copyright*/
    $copyYear = "2021-" . date("Y");

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
        case '/post.php':
            $bodyClass = 'portfolio-detail';
            $title = $_GET["title"];
            $currentPage = 'portfolio';
            $h1 = $_GET["title"];
            break;
    }


    function validate($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }