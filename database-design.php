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
                <p class="hero-text">A database I designed and built for a small art business, tracking projects, products, clients, and more. This case study goes through my process designing, normalizing, and implementing the database.</p>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2">Art Projects and Products Database</h2>
                        <p class="has-text-centered">Launched Aug. 2021</p>
                        <p class="process-steps">Mission Objectives <i class='fas fa-caret-right'></i> Business Rules <i class='fas fa-caret-right'></i> Fields and Tables <i class='fas fa-caret-right'></i> Normalization <i class='fas fa-caret-right'></i> Implementation <i class='fas fa-caret-right'></i> Users and Security <i class='fas fa-caret-right'></i> Views and Testing</p>
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
                            <p class="desktop-margin">Although I'm a web developer now, I started out as an artist and still enjoy drawing and telling stories as a hobby. Over the years, my projects
                            have scattered all over, from my old portfolio site and sketchbooks to email, social media, and texts with clients. When I learned
                            about database design, I thought it would be interesting to develop a database that could track all the information I'd need if I were
                            truly running my art practice as a business, and that could track data for future needs as well as current ones.</p>
                        </div>
                        <picture class="small-image"> 
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-screen-clients-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-screen-clients-small.jpg" alt="A message is displayed on the contact page to screen new clients in order to save Rachel time and labor.">
                        </picture>
                        <div class="block">
                            <p>To create a database, you have to prioritize goals and rules, design and normalize tables, fields, and relationships, define views, users, and security levels,
                            and finally implement and test the actual database.</p>
                        </div>
                        <h3 class="title is-6 mb-0">Goals</h3>
                        <div class="block">
                            <p>The primary goal of my database was to make business information easy to store and retrieve in one place. To define what needed to be tracked, I
                            looked over old web content, past projects, client communications, and business plans.</p>
                            <ul>
                                <h4 class="title is-6 mb-0">Mission Objectives</h4>
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
                        <div class="block">
                            <p>I also made a list of business considerations that would affect the database design.</p>
                            <ul>
                                <h4 class="title is-6 mb-0">Business Rules</h4>
                                <li>If all items in an order are digital, shipping should not be charged.</li>
                                <li>Patreon members should receive a 15% discount on digital items and commissions.</li>
                                <li>No more than 15 commission requests can be in progress at the same time.</li>
                                <li>Products and portfolio pieces should be filterable and sortable by project, category, format, tags, year made, and price.</p>
                                <p>(and so on...)</p>
                            </ul>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-wireframe-design-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-wireframe-design-small.jpg" alt="Wireframe diagram for the pricing page built on a 960 pixel grid for a massage website.">
                        </picture>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-visual-design-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-visual-design-small.jpg" alt="Visual design of the massage website's pricing pagea with the blue and yellow color scheme that was chosen.">
                        </picture>
                        <div class="block">
                            <p>After gathering feedback from both the client and peers, I reviewed the design and
                            made changes before prototyping the live website using HTML, CSS, and JavaScript.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-contact-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-contact-page-small.jpg" alt="The refined final website built with HTML and CSS, showing the information on the contact page.">
                        </picture>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-pricing-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-pricing-page-small.jpg" alt="The refined final website, showing pricing and package information for uninsured clients.">
                        </picture>
                        <p class="has-text-centered">Thanks for checking out my project!</p>
                        <div class="block">
                            <p class="has-text-centered">If you'd like to see the full documentation for this project, feel free to view it <a href="https://docs.google.com/document/d/1n5GXkGc5fWb1lIZqrXXhsdXqYgVKI6SiniGlFhxKbO4/edit?usp=sharing" target="_blank">here</a>!</p>
                        </div>
                        <div class="buttons-row three">
                            <a class="button" href="portfolio/yamagiwa-massage" target="_blank">Live Site</a>
                            <a class="button" href="https://github.com/roryhackney/MassageWebsite/tree/main/prototype" target="_blank">GitHub</a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                        <a href="portfolio.php" class="has-text-centered mb-3">Back to Portfolio</a>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
<?php include 'includes/footer.php'; ?>