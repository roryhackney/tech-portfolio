<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&family=Volkhov&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f524b8448d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/home.css">
        <title>Home | Rory Hackney, Web Developer and Designer</title>
    </head>
    <body>
        <header>
            <img class="logo"
            alt="Rory Hackney's logo: yellow letters RH over a dark blue circle."
            src="images/logo-small.png"
            srcset="images/logo-small.png 64w,
            images/logo-medium.png 100w,
            images/logo-large.png 125w"
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
                    <li class="active-page"><a href="index.php">Home</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="hire-me.php">Hire Me</a></li>
                    <li><a href="about-me.php">About Me</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Home</h1>
            <div class="hero-container">
                <picture class="hero">
                    <!--2001px, 1600px, 1200px, 800px, 480px-->
                    <source
                        media="(min-width:800px)"
                        srcset="images/home-hero-large.jpg 1200w,
                        images/home-hero-larger.jpg 1599w,
                        images/home-hero-largest.jpg 2001w">
                    <source
                        media="(min-width:480px)"
                        srcset="images/home-hero-medium.jpg 800w">
                    <img src="images/home-hero-small.jpg"
                    alt="Photo of Rory Hackney over a background of a computer displaying code next to a sketchbook filled with design work.">
                </picture>
                <p class="hero-text">Web developer passionate about making the web more accessible by creating intuitive, mobile friendly, quality websites that combine functionality with creativity.</p>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="hire-me.php">Hire Now</a>
            </div>
        </main>





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