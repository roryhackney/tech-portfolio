<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/hire-me-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/hire-me-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/hire-me-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/hire-me-hero-medium.jpg">
                    <img src="assets/hire-me-hero-small.jpg" alt="Photo of Rory Hackney holding a JavaScript textbook and thinking about code in one thought bubble and design diagrams in another.">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">If you’re looking for a web developer passionate about both design and development, who works hard and loves to learn, prioritizing quality and deadlines...</p>
                </div>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">You've found them.</h2>
                                <p class="content">Rory Hackney is a web developer passionate about making the web more accessible by creating intuitive, mobile friendly, high quality websites that combine functionality with creativity.</p>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-5 has-text-centered">My Resume</h2>
                                <a href="resume.php"><img class="resume-img" src="assets/resume.jpg" alt="Rory Hackney's Web Developer Resume, showing education, projects, and experience"></a>
                                <div class="level mt-4">
                                    <a class="level-item" href="assets/resume.pdf" target="_blank" aria-label="Emailable PDF - file opens in new tab">Emailable PDF</a>
                                    <a class="level-item" href="assets/resume-printable.pdf" target="_blank" aria-label="Printable PDF - file opens in new tab">Printable PDF</a>
                                    <a class="level-item" href="resume.php">HTML Resume</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-5 has-text-centered">My Skills</h2>
                                <div class="columns is-multiline">
                                    <div class="column is-full">
                                        <h3 class="title is-6 mb-0">Languages and Software</h3>
                                        <div class="columns is-mobile">
                                            <div class="column is-one-third pb-0">
                                                <ul>
                                                    <li>HTML</li>
                                                    <li>CSS</li>
                                                    <li title="CSS Framework">Bulma</li>
                                                    <li>VS Code</li>
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
                                                    <li>Git, GitHub</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-full">
                                        <h3 class="title is-6 mb-0">Knowledge and Skills</h3>
                                        <div class="columns is-mobile">
                                            <div class="column is-half pb-0">
                                                <ul>
                                                    <li>Info Architecture</li>
                                                    <li>Wireframing</li>
                                                    <li>Visual Design</li>
                                                    <li>Prototyping</li>
                                                    <li>Version Control</li>
                                                </ul>
                                            </div>
                                            <div class="column pb-0">
                                                <ul>
                                                    <li>Web Design <br/> and Development</li>
                                                    <li>Database Design <br/> and Development</li>
                                                    <li>Programming</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-full">
                                        <h3 class="title is-6 mb-0">Design Priorities</h3>
                                        <ul>
                                            <li>Accessible, user friendly websites</li>
                                            <li>Responsive, mobile first layouts</li>
                                            <li>High quality code and best practices</li>
                                            <li>Useful, creative, consistent design</li>
                                            <li>Improving and learning every day</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!--ends half-column of skills, right of resume-->
                            <div class="column is-full">
                                <div class="buttons-row three">
                                    <a class="button is-hidden-desktop" href="#contact">Contact</a>
                                    <a class="button is-hidden-touch" href="mailto:roryhackney@gmail.com">Email</a>
                                    <a class="button unset-width" href="https://www.linkedin.com/in/roryhackney" target="_blank" aria-label="LinkedIn - link opens in new tab">LinkedIn<span class="icon button-external"><img src="assets/arrow-up-right-from-square-solid.svg" alt="opens in new tab"></span></a>
                                    <a class="button" href="resume.php">Resume</a>
                                </div>
                            </div>
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">My Recent Work</h2>
                            </div>
                            <?php include "includes/projects.php"; ?>
                            <div class="column is-full">
                                <div class="buttons-row three">
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                    <a class="button is-hidden-desktop" href="mailto:roryhackney@gmail.com">Email</a>
                                    <a class="button is-hidden-touch" href="#contact">Contact</a>
                                    <a class="button" href="resume.php">Resume</a>
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