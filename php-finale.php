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
                <p class="hero-text">My very first PHP project, recently updated with the skills and knowledge I've gained since. Features include daily content, database usage, user login and registration, kittens, form validation and submission, calculators, and more.</p>
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
                            srcset="assets/home-body-medium.jpg 760w">
                            <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                        </picture>
                        <div class="block">
                            <p>I recently updated it to make the project mobile friendly and more streamlined, upgrading the code and removing distractions, and making the site easier to navigate. If you'd like to poke around, check out the live site at <a href="portfolio/php-finale">PHP Finale</a>, view my code on <a href="https://github.com/roryhackney/php-finale">GitHub</a>, or check out the video below.</p>
                        </div>
                        <div class="columns">
                            <div class="column is-half">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                        </div>
                        <p>INSERT VIDEO HERE</p>
                        <div class="block">
                            <ul>
                                <h3 class="title is-6 mb-0">List of Features</h3>
                                <li>Contact form with input validation, saved input, and emailed data</li>
                                <li>Kitten gallery</li>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <li>Artist portfolio and contact form using databases and validation</li>
                                <li>Daily art challenges, best practices, and daily coffee</li>
                                <li>Currency conversion form, and mileage calculator</li>
                                <li>Responsive (device friendly) design</li>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <li>Dinosaur database integration and detail page made with SQL and PHP</li>
                                <li>User login and registration database integration and secure forms</li>
                                <li>Lots of styles, with multiple mobile friendly designs</li>
                                <li>PHP variables, arrays, includes, and functions, including randomImages() and makeNav()</li>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
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
