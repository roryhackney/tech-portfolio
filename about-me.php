<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/home-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/home-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/home-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/home-hero-medium.jpg">
                    <img src="assets/home-hero-small.jpg" alt="">
                </picture>
                <p class="hero-text">I’m a web developer passionate about making the web more accessible by creating intuitive, mobile friendly, quality websites that combine functionality with creativity.</p>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-6 mb-0">My education and certifications</h2>
                                <p class="content">For the past few years I’ve been studying web development in school and out. I recently graduated with a Certificate in Web Development and Design September 2021 from Seattle Central College. In 2016, I received my BFA from the Minneapolis College of Art and Design.</p>
                                <picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/home-body-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/home-body-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/home-body-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/home-body-small.jpg" alt="Rory Hackney standing in front of two graduation certificates framed on a wall.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-6 mb-0">My top priorities when building websites</h2>
                                <ul>
                                    <li>Accessible, user friendly design</li>
                                    <li>Responsive, mobile first layouts</li>
                                    <li>High quality code and best practices</li>
                                    <li>Useful, creative, consistent design</li>
                                    <li>Improving and learning every day</li>
                                </ul>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/about-body-priorities-mobile-first-design-medium.jpg">
                                    <img src="assets/about-body-priorities-mobile-first-design-small.jpg" alt="Website design in Figma shown for mobile, tablet, and then desktop layouts.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-6 mb-0">My favorite languages and software</h2>
                                <div class="columns is-mobile">
                                    <div class="column is-one-third pb-0">
                                        <ul>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li title="CSS Framework">Bulma</li>
                                        </ul>
                                    </div>
                                    <div class="column is-one-third pb-0">
                                        <ul>
                                            <li>JavaScript</li>
                                            <li>PHP</li>
                                            <li>SQL</li>
                                            <li>Python</li>
                                        </ul>
                                    </div>
                                    <div class="column is-one-third pb-0">
                                        <ul>
                                            <li>Figma</li>
                                            <li>Photoshop</li>
                                            <li title="Project Management">Asana</li>
                                            <li>GitHub</li>
                                        </ul>
                                    </div>
                                </div>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/about-body-languages-sql-code-medium.jpg">
                                    <img src="assets/about-body-languages-sql-code-small.jpg" alt="SQL code for a view of a relational database.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/about-body-priorities-mobile-first-design-medium.jpg">
                                    <img src="assets/about-body-priorities-mobile-first-design-small.jpg" alt="Website design in Figma shown for mobile, tablet, and then desktop layouts.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/about-body-languages-sql-code-medium.jpg">
                                    <img src="assets/about-body-languages-sql-code-small.jpg" alt="SQL code for a view of a relational database.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <p class="content">In addition to coding, I enjoy producing diagrams, design documents, and case studies. I spend my free time making art for fun, petting cats, and learning more about web development and design.</p>
                                <picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/home-body-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/home-body-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/home-body-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/home-body-small.jpg" alt="Rory Hackney standing in front of two graduation certificates framed on a wall.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
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