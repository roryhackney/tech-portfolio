<?php
    $currentYear = date("Y");
    $copyYear = "";
    if ($currentYear - 2021 > 0) {
        $copyYear = "2021-" . $currentYear;
    } else {
        $copyYear = "2021";
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
        <title>Thank You | Rory Hackney, Web Developer and Designer</title>
    </head>
    <body>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="hire-me.php">Hire Me</a></li>
                    <li><a href="about-me.php">About Me</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1 class="title is-3 has-text-centered">Thank You!</h1>
            <p>You've successfully contacted me. I'll reply as soon as possible. Thanks!</p>
            <div class="buttons-row">
                <a class="button" href="index.php">Home</a>
                <a class="button" href="portfolio.php">Portfolio</a>
            </div>
        </main>
        <footer>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="hire-me.php">Hire Me</a></li>
                    <li><a href="about-me.php">About Me</a></li>
                </ul>
            </nav>
            <p>Site content &copy; Rory Hackney <?php echo $copyYear; ?>.</p>
        </footer>
        <script>
            function menuToggle() {
                let nav = document.getElementById("nav");
                if(nav.style.display !== "block") {
                    nav.style.display = "block";
                } else {
                    nav.style.display = "none";
                }
            }
        </script>
    </body>
</html>