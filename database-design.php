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
                <p class="hero-text">A database I designed and built for a small art business, tracking projects, clients, products, cash flow, and more. This shows my process conceptualizing, normalizing, and implementing the database.</p>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2">Art Projects and Products Database</h2>
                        <p class="has-text-centered">Launched Aug. 2021</p>
                        <p class="process-steps">Mission Objectives <i class='fas fa-caret-right'></i> Business Rules <i class='fas fa-caret-right'></i> Fields and Tables <i class='fas fa-caret-right'></i> Normalization <i class='fas fa-caret-right'></i> Users and Security <i class='fas fa-caret-right'></i> Implementation <i class='fas fa-caret-right'></i> Views and Testing</p>
                        <div class="tags-div">
                            <h3 class="title is-6 mb-2">Tags</h3>
                            <ul>
                                <li>SQL</li>
                                <li>phpMyAdmin</li>
                                <li>Figma</li>
                                <li>Database Development</li>
                                <li>Database Design</li>
                                <li>Project Documentation</li>
                            </ul>
                        </div>
                        <div class="block">
                            <p class="desktop-margin-small">Although I'm a web developer now, I started out as an artist and still enjoy drawing and telling stories as a hobby. When I learned
                            about database design, I thought it would be interesting to develop a database that could track all the information I'd need if I were
                            truly running my art practice as a business, and that could track data for future needs as well as current ones.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/forest-art-medium.jpg 760w">
                            <img src="assets/forest-art-small.jpg" alt="Digitally drawn art of a forest">
                        </picture>
                        <div class="block">
                            <p>My concept for the database was in three parts: creative projects, cash flow, and client information. 
                            Each project would have portfolio pieces, some of which would be turned into products with various formats. Each piece would have a category, tags, and image files.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/database-concept-projects-diagram-medium.jpg 760w">
                            <img src="assets/database-concept-projects-diagram-small.jpg" alt="Diagram of projects with arrows down to portfolio pieces and then products.">
                        </picture>
                        <div class="block">
                            <p>Cash flow would be made up of commissions, online orders, products and inventory, incomes, and expenses.
                            Customer information would track their names, including preferred name, as well as address, contact information, Patreon and email subscriptions, and password to enable user accounts.</p>
                        </div>
                        <div class="block">
                            <p>After defining my concept and goals, I created a list of mission objectives and business rules for the finished project to meet.</p>
                        </div>
                        <div class="block">
                            <div class="columns">
                                <div class="column is-half">
                                    <h3 class="title is-6 mb-0">Mission Objectives</h4>
                                    <ul>
                                        <li>Track products (both physical and digital)</li>
                                        <li>Track projects and portfolio pieces</li>
                                        <li>Track customers (including subscribers)</li>
                                        <li>Track commissions</li>
                                        <li>Track expenses</li>
                                        <li>Track incomes</li>
                                        <li>Track orders</li>
                                        <p>(and so on...)</p>
                                    </ul>
                                </div>
                                <div class="column">
                                    <h3 class="title is-6 mb-0">Business Rules</h4>
                                    <ul>
                                        <li>If all items in an order are digital, shipping should not be charged.</li>
                                        <li>Patreon members should receive a 15% discount on digital items and commissions.</li>
                                        <li>Products and portfolio pieces should be filterable and sortable by project, category, format, tags, year made, and price.</p>
                                        <p>(and so on...)</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <p>I then thought up fields I would need, then grouped them into tables, added relationships between them, and finally built a Crow's Foot Entity Relationship Diagram (ERD) to finalize my database structure.</p>
                        </div>
                        <!-- <picture class="small-image"> //ERD
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-wireframe-design-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-wireframe-design-small.jpg" alt="Wireframe diagram for the pricing page built on a 960 pixel grid for a massage website.">
                        </picture> -->
                        <div class="block">
                            <p>I then ran each table, field, and relationship through normalization, and made changes to improve data integrity.</p>
                        </div>
                        <div class="block">
                            <p>After that, I made a list of different users, what tasks they would perform, and what data they would be able to access. I then created a security diagram.</p>
                        </div>
                        <!-- <picture class="small-image"> //SECURITY DIAGRAM
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-contact-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-contact-page-small.jpg" alt="The refined final website built with HTML and CSS, showing the information on the contact page.">
                        </picture> -->
                        <div class="block">
                            <p>After making some final changes, I built the database using SQL code, including tables, data, users, and views. I also tested the database against my mission objectives to make sure it fulfilled the goals of the project. Finally, I logged in as each user and made sure their access levels were correct.</p>
                        </div>
                        <!-- <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-pricing-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-pricing-page-small.jpg" alt="The refined final website, showing pricing and package information for uninsured clients.">
                        </picture> -->
                        <div class="block">
                            <p>Once I was sure the database was sound, I generated an ERD from the actual database and compared it with my original design to be sure they matched.</p>
                        <!-- <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-pricing-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-pricing-page-small.jpg" alt="The refined final website, showing pricing and package information for uninsured clients.">
                        </picture> -->
                        </div>
                        <div class="block">
                            <p>I then exported the database, documented the project thoroughly, and declared the project finished. In creating this database, I learned a lot
                            about the process of database design, business-specific considerations, how to create and use a database that's efficient and useful, and how to write SQL.
                            I'm looking forward to my next database project!</p>
                        </div>
                        <p class="has-text-centered">Thanks for checking out my project!</p>
                        <div class="block">
                            <p class="has-text-centered">If you'd like to see the full documentation for this project, feel free to view it <a href="https://docs.google.com/document/d/1O8fc5k2SLcmZ9kQCUMatPqzGali2mw5xb8ceF3jUook/edit?usp=sharing" target="_blank">here</a>!</p>
                        </div>
                        <div class="buttons-row">
                            <a class="button" href="portfolio.php">Portfolio</a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
<?php include 'includes/footer.php'; ?>