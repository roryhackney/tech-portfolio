<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <!-- <source media="(min-width:1601px)" srcset="assets/yamagiwa-massage-hero-largest.jpg"> -->
                    <!-- <source media="(min-width:1201px)" srcset="assets/yamagiwa-massage-hero-larger.jpg"> -->
                    <!-- <source media="(min-width:801px)" srcset="assets/yamagiwa-massage-hero-large.jpg"> -->
                    <!-- <source media="(min-width:481px)" srcset="assets/yamagiwa-massage-hero-medium.jpg"> -->
                    <!-- <img src="assets/yamagiwa-massage-hero-small.jpg" alt="Screenshot of a website I built for a massage therapist, featuring serene water and stone imagery and easy to find information for clients."> -->
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">Java project that scans user input, validates it, and uses it to select options from a menu, calculate a sine curve area, and draw the sine curve on request using Graphics.</p>
                </div>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2">Java Menu Drawing Sine</h2>
                        <p class="has-text-centered">Launched Feb. 2023</p>
                        <div class="tags-div">
                            <h3 class="title is-6 mb-2">Tags</h3>
                            <ul>
                                <li>Java</li>
                                <li>User Input, Scanner</li>
                                <li>Input Validation</li>
                                <li>Graphics, DrawingPanel</li>
                                <li>Backend Software Development</li>
                                <li>Math</li>
                            </ul>
                        </div>
                        <div class="block">
                            <p class="desktop-margin">This was one of my first projects in Java, where I began to learn to gather input from the user, validate and process that input, and display different visuals and results.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/sine-curve-card-medium.jpg">
                            <img src="assets/sine-curve-card-small.jpg" alt="A menu in the console showing various options for user input.">
                        </picture>
                        <div class="block">
                            <p>Feel free to download the code from my GitHub repository, or watch the video below to see what the program does. The menu has these options:</p>
                            <ol>
                                <li>Calculate the y value (vertical position) for a given x value (horizontal position, in radians) on a sine graph.</li>
                                <li>Calculate the area of the sine graph roughly using between 1 and 500 rectangles. More rectangles is more accurate.</li>
                                <li>Draw the sine curve with 1 to 500 rectangles for a visualization, using the DrawingPanel import from the text buildingjavaprograms.com to simplify Graphics.</li>
                                <li value="0">Exit the program.</li>
                            </ol>
                        </div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/4zp_lwvN8SA?si=m3jxu5c15HyILdQ1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p class="has-text-centered">Thanks for checking out my project!</p>
                        <div class="block">
                            <p class="has-text-centered">If you'd like to see the full documentation for this project, feel free to view it <a href="https://docs.google.com/document/d/1n5GXkGc5fWb1lIZqrXXhsdXqYgVKI6SiniGlFhxKbO4/edit?usp=sharing" target="_blank" aria-label="Documentation on Google Drive - link opens in new tab">here</a>!</p>
                        </div>
                        <div class="buttons-row three">
                            <a class="button" href="portfolio/yamagiwa-massage">Live Site</a>
                            <a class="button unset-width" href="https://github.com/roryhackney/MassageWebsite/tree/main/prototype" target="_blank" aria-label="GitHub - link opens in new tab">GitHub<span class="icon button-external"><img src="assets/arrow-up-right-from-square-solid.svg" alt="opens in new tab"></span></a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                        <a href="portfolio.php" class="has-text-centered mb-3">Back to Portfolio</a>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
        </div>
<?php include 'includes/footer.php'; ?>