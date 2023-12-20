<?php
    include 'includes/header.php'; ?>
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
                            <?php
                                foreach($projects as $project) {
                                    $project->displayProject();
                                }
                            ?>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="resume.php">Resume</a>
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