<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/php-finale-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/php-finale-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/php-finale-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/php-finale-hero-medium.jpg">
                    <img src="assets/php-finale-hero-small.jpg" alt="Screenshot of a website built with PHP, showing a photo of Rory and links to various pages.">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">My very first PHP project, recently updated with the skills and knowledge I've gained since. Features include daily content, database usage, user login and registration, kittens, form validation and submission, calculators, and more.</p>
                </div>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2">PHP Backend Web Development Project</h2>
                        <p class="has-text-centered">Launched Dec. 2020</p>
                        <p class="has-text-centered mb-2">Updated Jan. 2022</p>
                        <div class="tags-div">
                            <h3 class="title is-6 mb-2">Tags</h3>
                            <ul>
                                <li>PHP, SQL, CSS, HTML</li>
                                <li>Backend Web Development</li>
                                <li>Mobile Friendly</li>
                                <li>Database Development</li>
                                <li>Forms, Calculators</li>
                                <li>Daily Content</li>
                            </ul>
                        </div>
                        <div class="block">
                            <p class="desktop-margin">PHP Finale was a complex, quarter-long project that taught me a great deal about PHP and back end web development. I built calculators, validated user input, created forms, used databases both for dynamic kitten content and user management, and used CSS to make the whole thing user friendly and colorful.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/php-finale-daily-coffee-medium.jpg">
                            <img src="assets/php-finale-daily-coffee-small.jpg" alt="Webpage displaying daily coffee, in this case iced tea, using PHP to dynamically change content.">
                        </picture>
                        <div class="block">
                            <p>I recently updated it to make the project mobile friendly and more streamlined, upgrading the code and removing distractions, and making the site easier to navigate. If you'd like to poke around, check out the live site at <a href="portfolio/php-finale">PHP Finale</a>, or view my code on <a href="https://github.com/roryhackney/tech-portfolio/tree/main/portfolio/php-finale" target="_blank">GitHub</a>.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/php-finale-mobile-mileage-calculator-medium.jpg">
                            <img src="assets/php-finale-mobile-mileage-calculator-small.jpg" alt="Mobile version of a mileage calculator form that checks for input errors, then displays information.">
                        </picture>
                        <div class="block">
                            <h3 class="title is-6 mb-0">List of Features</h3>
                            <ul>
                                <li>Contact form with input validation, saved input, and emailed data</li>
                                <li>Kitten gallery</li>
                                <li>Artist portfolio and contact form using databases and validation</li>
                            </ul>
                            <picture class="small-image">
                                <source media="(min-width: 401px)"
                                srcset="assets/php-finale-art-site-medium.jpg">
                                <img src="assets/php-finale-art-site-small.jpg" alt="Webpage displaying art and links to other pages for an artist blog. Login required.">
                            </picture>
                            <ul>
                                <li>Daily art challenges, best practices, and daily coffee</li>
                                <li>Currency conversion form, and mileage calculator</li>
                                <li>Responsive (device friendly) design</li>
                                <li>Dinosaur database integration and detail page made with SQL and PHP</li>
                            </ul>
                            <picture class="small-image">
                                <source media="(min-width: 401px)"
                                srcset="assets/php-finale-dinosaur-database-medium.jpg">
                                <img src="assets/php-finale-dinosaur-database-small.jpg" alt="Web page showing dinosaur information and images using PHP and SQL to connect a database.">
                            </picture>
                            <ul>
                                <li>User login and registration database integration and secure forms</li>
                                <li>Lots of styles, with multiple mobile friendly designs</li>
                                <li>PHP variables, arrays, includes, and functions, including randomImages() and makeNav()</li>
                            </ul>
                            <picture class="small-image">
                                <source media="(min-width: 401px)"
                                srcset="assets/php-finale-kitten-gallery-medium.jpg">
                                <img src="assets/php-finale-kitten-gallery-small.jpg" alt="Website showing various kitten pictures and text displayed using PHP and with a random kitten shown on the side.">
                            </picture>
                            <div class="block">
                                <p>There's a lot to look at, so feel free to poke around on whatever device you prefer!</p>
                            </div>
                        </div>
                        <p class="has-text-centered">Thanks for checking out my project!</p>
                        <div class="buttons-row three">
                            <a class="button" href="portfolio/php-finale">Live Site</a>
                            <a class="button" href="https://github.com/roryhackney/php-finale" target="_blank">GitHub</a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                        <a href="portfolio.php" class="has-text-centered">Back to Portfolio</a>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
        </div>
<?php include 'includes/footer.php'; ?>
