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
                    <p class="hero-text">If you’re looking for a creative software and web app developer with a strong technical background who works hard at all aspects of software development, from learning new tech, to designing, to coding, to testing...</p>
                </div>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">You've found them.</h2>
                                <p class="content">Rory Hackney is a software engineer, web developer, and artist passionate about building well tested and documented software and web applications that are accessible, intuitive, mobile friendly, beautiful, and high performance regardless of device.</p>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-5 has-text-centered">My Resume</h2>
                                <a href="resume.php"><img class="resume-img" src="assets/resume.jpg" alt="Rory Hackney's Software Developer Resume, showing education, projects, and experience"></a>
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
                                    </div>
                                    <div class="column is-full">
                                        <h3 class="title is-6 mb-0">Knowledge and Skills</h3>
                                        <div class="columns is-mobile">
                                            <div class="column is-half pb-0">
                                                <ul>
                                                    <li>Data Structures</li>
                                                    <li>Algorithms</li>
                                                    <li>Logic and Problem Solving</li>
                                                    <li>UML Diagramming</li>
                                                    <li>Software Development</li>
                                                    <li>Programming</li>
                                                    <li>Testing</li>
                                                </ul>
                                            </div>
                                            <div class="column is-half pb-0">
                                                <ul>
                                                    <li>Documentation</li>
                                                    <li>Web Design</li>
                                                    <li>Web Development</li>
                                                    <li>Database Manipulation</li>
                                                    <li>Version Control</li>
                                                    <li>Communication</li>
                                                    <li>Collaboration</li>
                                                </ul>
                                            </div>
                                        </div>
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