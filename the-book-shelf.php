<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/book-shelf-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/book-shelf-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/book-shelf-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/book-shelf-hero-medium.jpg">
                    <img src="assets/book-shelf-hero-small.jpg" alt="Screenshot of a website with books and reviews, currently displaying a form to save favorite searches.">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">A book search and review search site built in a three-person team
                    using Bulma, JavaScript, PHP, and SQL. Features include user
                    accounts, forms, a database, dark mode, search, and a clean, mobile
                    friendly design made with a CSS framework.</p>
                </div>
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
                                <li>HTML, CSS, JavaScript</li>
                                <li>PHP, SQL, <span title="CSS Framework">Bulma,</span> <span title="Project Management">Asana</span></li>
                                <li>Team Built<li>
                                <li>Frontend Web Development<li>
                                <li>User Login, Registration<li>
                                <li>Mobile Friendly</li>
                            </ul>
                        </div>
                        <div class="block">
                            <p class="desktop-margin">I launched The Book Shelf (a book search and reviews site) together with <a href="https://www.linkedin.com/in/hannah-eberts" target="_blank">Hannah Eberts</a>, designer, and <a href="https://www.linkedin.com/in/dominick-nelson-a96758a6" target="_blank">Dominick Nelson</a>, back end developer. As the front end developer, I combined their work with a nice UI aided by Bulma, which helped us to complete the project on time without sacrificing the quality or consistency of the design.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/book-shelf-design-reviews-medium.jpg 760w">
                            <img src="assets/book-shelf-design-reviews-small.jpg" alt="The Book Shelf website displays several book reviews over a light blue and yellow design.">
                        </picture>
                        <div class="block">
                            <p>The Book Shelf was built to provide a space for people to add their favorite books, look at reviews, and find information. We planned the website together, from brainstorming first ideas to a week by week project timeline made in Asana. We also added user accounts, complex searches, dark mode, and a popup to save favorites, using a mix of PHP, JavaScript, and SQL to make the site interactive, functional, and persistent.</p>
                        </div>
                        <picture class="small-image dark-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/book-shelf-dark-form-medium.jpg 760w">
                            <img src="assets/book-shelf-dark-form-small.jpg" alt="Form for submitting a book to the database in dark mode.">
                        </picture>
                        <div class="block">
                            <p>In the end, we had an awesome digital bookshelf we could all be proud of.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/book-shelf-mobile-view-medium.jpg 760w">
                            <img src="assets/book-shelf-mobile-view-small.jpg" alt="Mobile view of The Book Shelf on a small iPhone sitting on a patterned background.">
                        </picture>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/book-shelf-light-books-medium.jpg 760w">
                            <img src="assets/book-shelf-light-books-small.jpg" alt="The Book Shelf displaying saved searches and book listings on a light color scheme.">
                        </picture>
                        <div class="block">
                            <ul>
                                <h3 class="title is-6 mb-0">List of Features</h3>
                                <li>Add, search, or view books and reviews</li>
                                <li>Persistent dark mode</li>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/book-shelf-dark-home-medium.jpg 760w">
                                    <img src="assets/book-shelf-dark-home-small.jpg" alt="The Book Shelf in dark mode displaying recently added books with reviews.">
                                </picture>
                                <li>Logo animation</li>
                                <li>User login and registration</li>
                                <li>Modal popup to save favorites</li>
                                <li>Search by keyword, author, genre, title, or all</li>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/book-shelf-search-books-medium.jpg 760w">
                                    <img src="assets/book-shelf-search-books-small.jpg" alt="The Book Shelf books search page displaying Fiction books via the Genre search filter.">
                                </picture>
                                <li>Responsive (device friendly) design</li>
                                <li>10% chance of a 'prize' popup</li>
                                <li>Page timer in footer</li>
                                <li>Cohesive design created using Bulma (CSS framework)</li>
                            </ul>
                            <picture class="small-image">
                                <source media="(min-width: 401px)"
                                srcset="assets/book-shelf-dark-footer-medium.jpg 760w">
                                <img src="assets/book-shelf-dark-footer-small.jpg" alt="The Bookshelf footer in dark mode, displaying credits, login and registration links, and a page timer.">
                            </picture>
                        </div>
                        <p class="has-text-centered">Thanks for checking out my project!</p>
                        <div class="buttons-row three">
                            <a class="button" href="http://the-book-shelf.xyz" target="_blank">Live Site</a>
                            <a class="button" href="https://github.com/nicknelson97/IT163-Group-1" target="_blank">GitHub</a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                        <a href="portfolio.php" class="has-text-centered">Back to Portfolio</a>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
<?php include 'includes/footer.php'; ?>