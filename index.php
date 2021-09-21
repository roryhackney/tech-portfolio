<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&family=Volkhov&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f524b8448d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
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
            sizes="(max-width:480px) 64px,
            (max-width:768px) 100px,
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