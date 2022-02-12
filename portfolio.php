<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/home-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/home-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/home-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/home-hero-medium.jpg">
                    <img src="assets/home-hero-small.jpg" alt="Photo of Rory Hackney over a background of a computer displaying code next to a sketchbook filled with design work.">
                </picture>
                <p class="hero-text">Check out my recent work - web development, design, and mixed projects, along with peeks into my process and case studies.</p>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">Recent Projects</h2>
                            </div>
                            <?php ?>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">PHP Finale</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/php-finale-preview-medium.jpg 760w">
                                    <img src="assets/php-finale-preview-small.jpg" alt="Website built primarily with PHP, HTML, and CSS.">
                                </picture>
                                <div>
                                    <span>PHP, Backend Web Development</span>
                                    <span class="is-pulled-right">Dec 2020</span>
                                </div>
                                <p class="content">My very first PHP project, recently updated with the skills and knowledge I've gained since. Features include daily content, database usage, user login and registration, kittens, form validation and submission, calculators, and more.</p>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Project 2</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <div>
                                    <span>Tags, categories, etc</span>
                                    <span class="is-pulled-right">Date published</span>
                                </div>
                                <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="assets/resume.php">Resume</a>
                                    <a class="button" href="hire-me.php">Hire Now</a>
                                </div>
                                <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                                <a href="" class="is-block has-text-centered is-hidden-touch pb-3">Back to top</a>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
<?php include 'includes/footer.php'; ?>

<!--TODO:    PORTFOLIO PIECES
    
    Card
    
    Project Title
    Promo Image (rect)
    Month/Year Published
    Tags/Categories (languages, project type, tools, subject)
    Short description/teaser

    Detail Page

    Project Title
    Hero Image
    Hero Text
    Month/Year Published
    Tags/Categories (extended)
    Short description
    Project video
    Transcript (below)
    What is this project? Why did I make it, what does it do?
    What is its major functions?
    What are some issues I ran into? What did I learn?
    How will I use this project to make my next one better?
    Where can users see this live?
    Links to other documents, ie Figma design files, project documents, ...
    Link back to portfolio or to similar projects or to hire me

    Example....

    PHP Finale
    [Image of Final Site]
    Nov. 2020 | PHP, Databases, Forms
    
    PHP
    HTML
    CSS
    Backend 
    SQL, Databases
    Contact Forms
    Calculators
    User Login
    Input Validation
    MAMP
    
    A project that uses various PHP concepts and database management to deliver secure contact forms, user logins, daily content, calculators, and more...

    Description...
    Main Site
    Calculators: Fuel Cost Calculator, Currency Conversion Calculator
    Functions: Random Images, Random Numbers, Navigation
    Database Use: Kitten Page With Details, Dinosaur Page With Details, Superhero Page With Details
    Daily Content: Art Challenge
    Contact Form: General Example, Art Request
    
    Final
    Database - Portfolio items w detail page, User data for login and registration
    Contact Form - Art Request
    Daily Content - Art Best Practices


    Things To Fix
    Home Page
    -Change bio text slightly
    -Add clarifying text to images in sidebar
    -Clarify exercises with a blurb or clearer link text
    -Change giant logo to (RH)
    -Remove Terms Of Use in footer (replace w LinkedIn?)
    -Change credit link in footer to portfolio home
    -Remove Troubleshooting tab (goes to bad calculator) and Group 4 tab (slightly better calculator) and Database and Login Page (empty)
    -Remove it261/index.html
    -Add missing things from /website/etc.php - Currency Calculator, randomImages(), Dinosaurs database use (make it prettier), contact.php, gallery.php (kittens)
    
    -The Final at it261/final is painfully ugly and has odd content, but shows user management and database functionality
    -Exercises: keep Final Currency Form (check type of money is float), maybe Group Adder, Database People, Kitten Gallery
    -Make SURE to go through and remove anything that seems unprofessional

    Daily Page
    -Make background colors more pastel and links readable colors
    -Add blurb to top of page explaining what the daily challenge is

    Fuel Calculator Page
    -Add blurb to top explaining fuel calculator

    Currency Converter Page
    -Move to main PHP project from https://roryhackney.com/it261/website/index.php

    -Add valid HTML and valid CSS links to all sites
    -Add links to portfolio site to all sites