<?php
    $currentYear = date("Y");
    $copyYear = "";
    if ($currentYear - 2021 > 0) {
        $copyYear = "2021-" . $currentYear;
    } else {
        $copyYear = "2021";
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
        <link rel="stylesheet" href="styles/home.css">
        <title>Home | Rory Hackney, Web Developer and Designer</title>
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
                        srcset="assets/home-hero-large.jpg 1200w,
                        assets/home-hero-larger.jpg 1599w,
                        assets/home-hero-largest.jpg 2001w">
                    <source
                        media="(min-width:480px)"
                        srcset="assets/home-hero-medium.jpg 800w">
                    <img src="assets/home-hero-small.jpg"
                    alt="Photo of Rory Hackney over a background of a computer displaying code next to a sketchbook filled with design work.">
                </picture>
                <p class="hero-text">Web developer passionate about making the web more accessible by creating intuitive, mobile friendly, quality websites that combine functionality with creativity.</p>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="hire-me.php">Hire Now</a>
            </div>
            <div class="main-content">
                <div class="columns is-variable is-6">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <h2 class="title is-5 has-text-centered">What I Do</h2>
                        <div class="columns is-multiline">
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Web Design</h3>
                                <p>I analyze business needs and design websites to match. Deliverables: wireframes, visual designs, interactive prototypes, site structure, content planning, and project documentation.</p>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Web Development</h3>
                                <p>I implement web design and functionality using code. Deliverables: accessible web pages, responsive styles, forms, databases, HTML, CSS, JavaScript, PHP, and SQL files, which combine to create a full website.</p>
                            </div>
                            <div class="column is-half">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="hire-me.php#resume">Resume</a>
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                </div>
                                <h2 class="title is-5 has-text-centered">My Skills</h2>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Languages and Software</h3>
                                <div class="columns is-mobile">
                                    <div class="column is-one-third">
                                        <ul>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>SASS</li>
                                            <li title="CSS Framework">Bulma</li>
                                        </ul>
                                    </div>
                                    <div class="column is-one-third">
                                        <ul>
                                            <li>JavaScript</li>
                                            <li>PHP</li>
                                            <li>Python</li>
                                            <li>SQL</li>
                                        </ul>
                                    </div>
                                    <div class="column is-one-third">
                                        <ul>
                                            <li>Figma</li>
                                            <li>Photoshop</li>
                                            <li title="Project Management">Asana</li>
                                            <li>GitHub</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Knowledge and Skills</h3>
                                <div class="columns is-mobile">
                                    <div class="column is-half">
                                        <ul>
                                            <li>Info Architecture</li>
                                            <li>Wireframing</li>
                                            <li>Visual Design</li>
                                            <li>Prototyping</li>
                                            <li>Version Control</li>
                                        </ul>
                                    </div>
                                    <div class="column is-half">
                                        <ul>
                                            <li>Web Design <br/> and Development</li>
                                            <li>Programming</li>
                                            <li>Database Design <br/> and Development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-half">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                    <a class="button" href="hire-me.php">Hire Me</a>
                                </div>
                                <h2 class="title is-5 has-text-centered">My Recent Work</h2>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Project 1</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <span>Tags, categories, etc</span>
                                <span class="is-pulled-right">Date published</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Project 2</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <span>Tags, categories, etc</span>
                                <span class="is-pulled-right">Date published</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Project 3</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <span>Tags, categories, etc</span>
                                <span class="is-pulled-right">Date published</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <h3 class="title is-6 mb-0">Project 4</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 650w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <span>Tags, categories, etc</span>
                                <span class="is-pulled-right">Date published</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                    <a class="button" href="hire-me.php">Hire Now</a>
                                </div>
                                <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                                <a href="" class="is-block has-text-centered is-hidden-touch">Back to top</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-one-third-desktop sticky px-6">
                        <h2 class="title is-5 has-text-centered">Thank you!</h2>
                        <div class="columns">
                            <div class="column is-half-tablet is-full-desktop">
                                <p>Thanks for checking out my work! If you've got a project or job you think suits me, contact me here or on <a href="https://www.linkedin.com/in/roryhackney">LinkedIn</a>.</p>
                                <h2 class="title is-5 has-text-centered mb-1 mt-3">Contact Me</h3>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <div class="field">
                                        <label class="label" for="name">Name</label>
                                        <div class="control">
                                            <input class="input is-grey-darker" type="text" id="name" name="name" maxlength="250" value="<?php echo $name;?>">
                                        </div>
                                        <span class="error help is-danger"><?php echo $nameError;?></span>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="email">Email</label>
                                        <div class="control">
                                            <input class="input" type="text" id="email" name="email" maxlength="250" value="<?php echo $emailValue;?>">
                                        </div>
                                        <span class="error help is-danger"><?php echo $emailError;?></span>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="subject">Subject</label>
                                        <div class="control">
                                            <input class="input" type="text" id="subject" name="subject" maxlength="250" value="<?php echo $subject;?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="message">Message</label>
                                        <div class="control">
                                            <textarea class="textarea" id="message" name="message" maxlength="600"><?php echo $message;?></textarea>
                                        </div>
                                        <span class="error help is-danger"><?php echo $messageError;?></span>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <button class="button" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="is-half-tablet is-full-desktop">
                                <h2 class="title is-5 has-text-centered">Find Me</h2>
                                <div class="icon-text">
                                    <span class="icon is-large"><i class="fas fa-2x fa-envelope"></i></span>
                                    <span><a href="mailto:roryhackney@gmail.com">roryhackney@gmail.com</a></span>
                                </div>
                                <div class="icon-text">
                                    <span class="icon is-large"><i class="fab fa-2x fa-linkedin"></i></span>
                                    <span><a href="https://www.linkedin.com/in/roryhackney" target="_blank">LinkedIn</a></span>
                                </div>
                                <div class="icon-text">
                                    <!--add phone-square-alt, make it easy to contact u-->
                                </div>
                                <div class="icon-text">
                                    <span class="icon is-large"><i class="fab fa-2x github-square"></i></span>
                                    <span><a href="https://github.com/roryhackney" target="_blank">GitHub</a></span>
                                </div>
                                <div class="icon-text">
                                    <span class="icon is-large"><i class="fas fa-2x fa-file-alt"></i></span>
                                    <span><a href="assets/resume.pdf">Resume</a></span>
                                </div>
                            </div>
                        <p class="has-text-centered is-hidden-desktop">Thanks for dropping by!</p>
                        <a href="" class="is-block has-text-centered is-hidden-desktop">Back to top</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="columns">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <nav>
                        <ul>
                            <li class="is-pulled-left mx-2"><a href="index.php">Home</a></li>
                            <li class="is-pulled-left mx-2"><a href="portfolio.php">Portfolio</a></li>
                            <li class="is-pulled-left mx-2"><a href="hire-me.php">Hire Me</a></li>
                            <li class="is-pulled-left mx-2"><a href="about-me.php">About Me</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <p class="has-text-centered">Site content &copy; Rory Hackney <?php echo $copyYear; ?>.</p>
                </div>
            </div>
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