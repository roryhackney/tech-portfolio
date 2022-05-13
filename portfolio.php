<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/portfolio-hero-various-project-examples-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/portfolio-hero-various-project-examples-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/portfolio-hero-various-project-examples-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/portfolio-hero-various-project-examples-medium.jpg">
                    <img src="assets/portfolio-hero-various-project-examples-small.jpg" alt="Various images of projects, including HTML and PHP code, visual web design made in Figma, tables from a relational database, and SQL code.">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">Check out my recent work - web development, design, and mixed projects, along with peeks into my process and case studies.</p>
                </div>
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
                                        srcset="assets/php-finale-card-medium.jpg">
                                        <img src="assets/php-finale-card-small.jpg" alt="Screenshot of a website built with PHP, showing a photo of Rory and links to various pages.">
                                    </picture></a>
                                    <div>
                                        <span>PHP, Backend Web Development</span>
                                        <span class="is-pulled-right">Jan 2022</span>
                                    </div>
                                    <a href="php-finale.php">
                                        <p class="content">My very first PHP project, recently updated with the skills and knowledge I've gained since. Features include daily content, database usage, user login and registration, kittens, form validation and submission, calculators, and more.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="project-card">
                                    <a href="database-design.php"><h3 class="title is-6 mb-0">Database Design</h3></a>
                                    <a href="database-design.php"><picture class="small-image">
                                        <source media="(min-width: 401px)"
                                        srcset="assets/database-erd-diagram-card-medium.jpg">
                                        <img src="assets/database-erd-diagram-card-small.jpg" alt="Entity relationship diagram (ERD) generated from the finished database, showing various customer, product, and business tables and views.">
                                    </picture></a>
                                    <div>
                                        <span>Database Design, Project Documentation</span>
                                        <span class="is-pulled-right">Aug 2021</span>
                                    </div>
                                    <a href="php-finale.php">
                                        <p class="content">A database I designed and built for a small art business, tracking projects, clients, and cash flow. See my process conceptualizing, normalizing, and implementing the database.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="project-card">
                                    <a href="the-book-shelf.php"><h3 class="title is-6 mb-0">The Book Shelf</h3></a>
                                    <a href="the-book-shelf.php"><picture class="small-image">
                                        <source media="(min-width: 401px)"
                                        srcset="assets/book-shelf-card-medium.jpg">
                                        <img src="assets/book-shelf-card-small.jpg" alt="Screenshot of a website with books and reviews, currently displaying a form to save favorite searches.">
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
                            <div class="column is-half">
                                <div class="project-card">
                                    <a href="yamagiwa-massage.php"><h3 class="title is-6 mb-0">Yamagiwa Massage</h3></a>
                                    <a href="yamagiwa-massage.php"><picture class="small-image">
                                        <source media="(min-width: 401px)"
                                        srcset="assets/yamagiwa-massage-card-medium.jpg">
                                        <img src="assets/yamagiwa-massage-card-small.jpg" alt="Screenshot of a website built with PHP, showing a photo of Rory and links to various pages.">
                                    </picture></a>
                                    <div>
                                        <span>Web Design, Project Documentation</span>
                                        <span class="is-pulled-right">Apr 2021</span>
                                    </div>
                                    <a href="php-finale.php">
                                        <p class="content">A massage provider's website, planned and refined through a web design project, wireframed and designed in Photoshop, and then prototyped using HTML, CSS, and JavaScript.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="assets/resume.php">Resume</a>
                                    <a class="button" href="hire-me.php">Hire Now</a>
                                </div>
                                <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                                <a href="" class="is-block has-text-centered is-hidden-touch pb-3" role="button">Back to top</a>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
        </div>
<?php include 'includes/footer.php'; ?>