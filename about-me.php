<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/about-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/about-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/about-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/about-hero-medium.jpg">
                    <img src="assets/about-hero-small.jpg" alt="Photo of Rory Hackney with code and diagrams overlaying some trees">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">I’m a software and web developer currently studying Computer Science at North Seattle College. I also have a certificate in web development and a passion for art and design.</p>
                </div>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 mb-0">My education and certifications</h2>
                                <p class="content">I'm currently studying Computer Science at North Seattle College, and plan to graduate with my BS June 2025. I also have a certificate in Web Development from Seattle Central from 2021, and received my BFA from the Minneapolis College of Art and Design in 2016. I enjoy learning, and after taking my first coding class in 2015, have steadily explored different areas of technology, from developing simple games and interactive stories, designing and building websites, to creating software and programming using Computer Science theory. I'm excited to complete my education and build a career developing software while leveraging my experience with web applications and design.</p>
                                <picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/about-education-diplomas-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/about-education-diplomas-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/about-education-diplomas-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/about-education-diplomas-small.jpg" alt="Two framed diplomas in dark brown frames hung on a white wall.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-5 mb-0">Priorities when developing software/web apps</h2>
                                <ul>
                                    <li>Writing high performance, reliable, well tested, and fully documented code</li>
                                    <li>Improving my skills and learning about new technologies</li>
                                    <li>Accessible, responsive, mobile-first, user centered design</li>
                                    <li>Applying what I'm learning in school to real software or websites I would want to use</li>
                                </ul>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/about-body-priorities-mobile-first-design-medium.jpg">
                                    <img src="assets/about-body-priorities-mobile-first-design-small.jpg" alt="Website design in Figma shown for mobile, tablet, and then desktop layouts.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-5 mb-0">My favorite languages and software</h2>
                                <div class="columns is-mobile">
                                    <div class="column is-half pb-0">
                                        <ul>
                                            <li>Java</li>
                                            <li>Python</li>
                                            <li>PHP</li>
                                            <li>SQL</li>
                                            <li>JavaScript</li>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                        </ul>
                                    </div>
                                    <div class="column is-half pb-0">
                                        <ul>
                                            <li>Bulma</li>
                                            <li>Draw.io</li>
                                            <li>Figma</li>
                                            <li>Clip Studio Paint, Pixlr</li>
                                            <li>FileZilla</li>
                                            <li>Git, GitHub</li>
                                            <li>IntelliJ, Visual Studio Code</li>
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
                                    <source media="(min-width:961px)" srcset="assets/about-java-project-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/about-java-project-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/about-java-project-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/about-figma-website-design-small.jpg" alt="UML diagram and Java code for a graph-based social media project.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
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