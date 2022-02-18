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
                <p class="hero-text">A book search and review search site built in a three-person team using Bulma, JavaScript, PHP, and SQL. Features include user accounts, forms that add to the database, dark mode, search, and a clean, mobile friendly design.</p>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2">Book Search and Review Site</h2>
                        <p class="has-text-centered">Launched Jun. 2021</p>
                        <div class="tags-div">
                            <h3 class="title is-6 mb-2">Tags</h3>
                            <ul>
                                <li>Bulma, Asana, PHP, SQL</li>
                                <li>Frontend Web Development</li>
                                <li>Mobile Friendly</li>
                                <li>Database Development</li>
                                <li>User Login, Registration</li>
                                <li>Daily Content</li>
                                Team Built
                            </ul>
                        </div>
                        <div class="block">
                            <p>PHP Finale was a complex, quarter-long project that taught me a great deal about PHP and back end web development. I built calculators, validated user input, created forms, used databases both for dynamic kitten content and user management, and used CSS to make the whole thing user friendly and colorful.</p>
                        </div>
                        <div class="block">
                            <p>I recently updated it to make the project mobile friendly and more streamlined, upgrading the code and removing distractions, and making the site easier to navigate. If you'd like to poke around, check out the live site at <a href="portfolio/php-finale">PHP Finale</a>, view my code on <a href="https://github.com/roryhackney/php-finale">GitHub</a>, or check out the video below.</p>
                        </div>
                        <p>INSERT VIDEO HERE</p>
                        <p>INSERT SOME SCREENSHOTS IDK</p>
                        <div class="block">
                            <h3 class="title is-6 mb-0">List of Features</h3>
                            <ul>
                                <li>Contact form with input validation, saved input, and emailed data</li>
                                <li>Kitten gallery</li>
                                <li>Artist portfolio and contact form using databases and validation</li>
                                <li>Daily art challenges, best practices, and daily coffee</li>
                                <li>Currency conversion form, and mileage calculator</li>
                                <li>Responsive (device friendly) design</li>
                                <li>Dinosaur database integration and detail page made with SQL and PHP</li>
                                <li>User login and registration database integration and secure forms</li>
                                <li>Lots of styles, with multiple mobile friendly designs</li>
                                <li>PHP variables, arrays, includes, and functions, including randomImages() and makeNav()</li>
                            </ul>
                        </div>
                        <div class="buttons-row three">
                            <a class="button" href="portfolio/php-finale">Live Site</a>
                            <a class="button" href="https://github.com/roryhackney/php-finale" target="_blank">GitHub</a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                        <a href="portfolio.php" class="has-text-centered">Back to Portfolio</a>
                        <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
<?php include 'includes/footer.php'; ?>