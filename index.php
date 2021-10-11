<?php
    $currentYear = date("Y");
    $copyYear = "";
    if ($currentYear - 2021 > 0) {
        $copyYear = "2021-" . $currentYear;
    } else {
        $copyYear = "2021";
    }

    include 'process-form.php';
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
            <h1 class="title is-3 has-text-centered">Home</h1>
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
            <div class="main-content">
                <h2 class="title is-4 has-text-centered">What I Do</h2>
                <div class="columns is-multiline">
                    <div class="column is-half-tablet is-one-third-desktop">
                        <h3 class="title is-5">Web Design</h3>
                        <p>I analyze business needs and design websites to match. Deliverables: wireframes, visual designs, interactive prototypes, site structure, content planning, and project documentation.</p>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="images/home-body-medium.jpg 650w">
                            <img src="images/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                        </picture>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <h3 class="title is-5">Web Development</h3>
                        <p>I implement web design and functionality using code. Deliverables: accessible web pages, responsive styles, forms, databases, HTML, CSS, JavaScript, PHP, and SQL files, which combine to create a full website.</p>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="images/home-body-medium.jpg 650w">
                            <img src="images/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                        </picture>
                    </div>
                    <div class="column desktop-only is-one-third-desktop">
                        <h2 class="title is-4 has-text-centered">Thank you!</h2>
                        <p>Thanks for checking out my work! If you've got a project or job you think suits me, contact me here or on <a href="https://www.linkedin.com/in/roryhackney">LinkedIn</a>.</p>
                        <h3 class="title is-5">Contact Me</h3>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="field">
                                <label class="label" for="name">Name</label>
                                <div class="control">
                                    <input class="input" type="text" id="name" name="name" maxlength="250" required value="<?php echo $name;?>">
                                </div>
                            </div>
                            <span class="error"><?php echo $nameError;?></span>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" maxlength="250" required value="<?php echo $email;?>">
                            <span class="error"><?php echo $emailError;?></span>
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" maxlength="250" value="<?php echo $subject;?>">
                            <span class="error"><?php echo $subjectError;?></span>
                            <label for="message">Message</label>
                            <textarea id="message" name="message" maxlength="600" required><?php echo $message;?></textarea>
                            <span class="error"><?php echo $messageError;?></span>
                            <button class="button" type="submit">Submit</button>
                        </form>

                <div class="buttons-row">
                    <a class="button" href="hire-me.php#resume">Resume</a>
                    <a class="button" href="portfolio.php">Portfolio</a>
                </div>
                <h2>My Skills</h2>
                <section class="content-block">
                    <h3>Languages and Software</h3>
                    <ul>
                        <div class="column-3">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Bulma</li>
                        </div>
                        <div class="column-3">
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>SQL</li>
                        </div>
                        <div class="column-3">
                            <li>Figma</li>
                            <li>Photoshop</li>
                            <li>GitHub</li>
                        </div>
                    </ul>
                    <picture class="small-image">
                        <source media="(min-width: 401px)"
                        srcset="images/home-body-medium.jpg 650w">
                        <img src="images/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                    </picture>
                </section>
                <section class="content-block">
                    <h3>Knowledge and Skills</h3>
                    <ul>
                        <div class="column-2">
                            <li>Info Architecture</li>
                            <li>Wireframing</li>
                            <li>Visual Design</li>
                            <li>Prototyping</li>
                            <li>Version Control</li>
                        </div>
                        <div class="column-2">
                            <li>Web Design <br/> and Development</li>
                            <li>Programming</li>
                            <li>Database Design <br/> and Development</li>
                        </div>
                    </ul>
                    <picture class="small-image">
                        <source media="(min-width: 401px)"
                        srcset="images/home-body-medium.jpg 650w">
                        <img src="images/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                    </picture>
                </section>
                <div class="buttons-row">
                    <a class="button" href="portfolio.php">Portfolio</a>
                    <a class="button" href="hire-me.php">Hire Me</a>
                </div>
                <h2>My Recent Work</h2>
                <section class="content-block">
                    <h3>Project 1</h3>
                    <picture class="small-image">
                        <source media="(min-width: 401px)"
                        srcset="images/home-body-medium.jpg 650w">
                        <img src="images/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                    </picture>
                    <span>Tags, categories, etc</span>
                    <span>Date published</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                </section>
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