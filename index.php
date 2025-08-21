<?php include "includes/header.php"; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/home-hero-me-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/home-hero-me-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/home-hero-me-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/home-hero-me-medium.jpg">
                    <img src="assets/home-hero-me-small.jpg" alt="Photo of Rory Hackney over a background of a nice desk set up with a computer displaying code and a website design.">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">Software engineer, web developer, and artist passionate about building well tested and documented software and web applications that are accessible, intuitive, mobile friendly, beautiful, and high performance regardless of device.</p>
                </div>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="hire-me.php">Hire Now</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">What I Do</h2>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Software Development</h3>
                                <p>When developing software, collaboratively or independently, I define the requirements before designing the software, including UML diagrams of the code to be implemented. I think carefully to find the most efficient and maintainable design, and ensure the code is well documented and tested so the software is reliable and easy to update even months later.</p>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-software-medium.jpg">
                                    <img src="assets/home-body-software-small.jpg" alt="Partial UML design for a Graph package on the left and Java code using a graph on the right.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Web Development/Design</h3>
                                <p>When creating websites, I first plan out the required features and content, then design mobile-first wireframes, images, and color schemes. I then develop the code, including HTML, CSS, JavaScript (front end), PHP (back end), and SQL (database). I also ensure the website passes accessibility and other standards of quality before deploying.</p>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-web-development-medium.jpg">
                                    <img src="assets/home-body-web-development-small.jpg" alt="A grayscale website design in Figma on the left and PHP and HTML code on a black background on the right.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-software-medium.jpg">
                                    <img src="assets/home-body-software-small.jpg" alt="Partial UML design for a Graph package on the left and Java code using a graph on the right.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-web-development-medium.jpg">
                                    <img src="assets/home-body-web-development-small.jpg" alt="A grayscale website design in Figma on the left and PHP and HTML code on a black background on the right.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="resume.php">Resume</a>
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                </div>
                                <h2 class="title is-5 has-text-centered">My Skills</h2>
                                <p>Thanks to my background, I have a wide range of tools and skills that I use in my projects. Currently, I do most of my software programming in Java using IntelliJ as my IDE and draw.io for diagrams, or Python. For non-Java projects, I use Visual Studio Code. I design websites using Figma, develop the front end using HTML, CSS, Bulma, and JavaScript, and the backend using PHP and SQL. I also use Clip Studio Paint and Pixlr for image creation, and Git / GitHub for version control.</p>
                            </div>
                            <div class="column is-half">
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
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-skills-java-code-medium.jpg">
                                    <img src="assets/home-body-skills-java-code-small.jpg" alt="Java code posted on GitHub that adds / removes friendships between profiles in a graph.">
                                </picture>
                            </div>
                            <div class="column is-half pb-0">
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
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-skills-database-erd-medium.jpg">
                                    <img src="assets/home-body-skills-database-erd-small.jpg" alt="Screenshot of various tables and fields from a database.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-skills-java-code-medium.jpg">
                                    <img src="assets/home-body-skills-java-code-small.jpg" alt="Java code posted on GitHub that adds / removes friendships between profiles in a graph.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-skills-database-erd-medium.jpg">
                                    <img src="assets/home-body-skills-database-erd-small.jpg" alt="Screenshot of various tables and fields from a database.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                    <a class="button" href="hire-me.php">Hire Me</a>
                                </div>
                            </div>
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">My Recent Work</h2>
                            </div>
                            <?php include "includes/projects.php"; ?>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                    <a class="button urgent" href="hire-me.php">Hire Now</a>
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