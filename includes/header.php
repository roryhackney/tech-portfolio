<?php
    include 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XMR0TXB2CV"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-XMR0TXB2CV');
        </script>
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
        <!-- <link rel="stylesheet" href="styles/styles.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="styles/my-styles.css">
        <title><?php echo $title . ' | Rory Hackney, Web Developer and Designer'; ?></title>
    </head>
    <body class="<?php echo $bodyClass;?>">
        <header>
            <a class="screen-reader-skip-link" href="#h1">Skip to content</a>
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
                        <a href="hire-me.php" aria-haspopup="true">Hire Me <span class="is-hidden-mobile"><i class="fas fa-angle-down"></i></span></a>
                        <ul id="nav-dropitem-tablet" class="is-hidden-mobile">
                            <li><a href="resume.php">Resume</a></li>
                        </ul>
                    </li>
                    <li class="nav-dropitem-mobile is-hidden-tablet <?php if($currentPage == 'resume') {echo 'active-page';}?>">
                        <a href="resume.php">Resume</a>
                    </li>
                    <li <?php if($currentPage == 'about') {echo 'class="active-page"';}?>><a href="about-me.php">About Me</a></li>
                    <li <?php if($currentPage == 'blog') {echo 'class="active-page"';}?>><a href="blog.php">Blog</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1 class="title is-3 has-text-centered" id="h1"><?php echo $h1;?></h1>