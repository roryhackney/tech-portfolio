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
                            <div class="column is-half">
                                <div class="project-card">
                                    <a href="php-finale.php"><h3 class="title is-6 mb-0">PHP Finale</h3></a>
                                    <a href="php-finale.php"><picture class="small-image dark-image">
                                        <source media="(min-width: 401px)"
                                        srcset="assets/php-finale-card-medium.jpg 760w">
                                        <img src="assets/php-finale-card-small.jpg" alt="Screenshot of a website built with PHP, showing a photo of Rory and links to various pages.">
                                    </picture></a>
                                    <div>
                                        <span>PHP, Backend Web Development</span>
                                        <span class="is-pulled-right">Dec 2020</span>
                                    </div>
                                    <a href="php-finale.php">
                                        <p class="content">My very first PHP project, recently updated with the skills and knowledge I've gained since. Features include daily content, database usage, user login and registration, kittens, form validation and submission, calculators, and more.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="project-card">
                                    <a href="the-book-shelf.php"><h3 class="title is-6 mb-0">The Book Shelf</h3></a>
                                    <a href="the-book-shelf.php"><picture class="small-image">
                                        <source media="(min-width: 401px)"
                                        srcset="assets/book-shelf-card-medium.jpg 760w">
                                        <img src="book-shelf-card-small.jpg" alt="Screenshot of a website with books and reviews, currently displaying a form to save favorite searches.">
                                    </picture></a>
                                    <div>
                                        <span>Bulma, Frontend Web Development</span>
                                        <span class="is-pulled-right">Jun 2021</span>
                                    </div>
                                    <a href="the-book-shelf.php">
                                        <p class="content">A book search and review search site built in a three-person team using Bulma, JavaScript, PHP, and SQL. Features include user accounts, forms that add to the database, dark mode, search, and a clean, mobile friendly design.</p>
                                    </a>
                                </div>
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