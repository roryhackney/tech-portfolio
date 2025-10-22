<?php 
    //title, class, h1, etc for the current page
    include 'includes/current-page.php';
    //contact form submission handling
    include 'includes/form-handler.php';
    //header, nav, main opener etc
    include 'includes/header.php';

    //Connect to database and fetch tags and posts for display
    include 'includes/get-tags-and-posts.php';
?>

            <div id="hero">
                <picture>
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/portfolio-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/portfolio-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/portfolio-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/portfolio-hero-medium.jpg">
                    <img src="assets/portfolio-hero-small.jpg" alt="4 screenshots, including PHP code, a website design, SQL code, and React code.">
                </picture>
                <div id="hero-text">
                    <p>Recent Projects</p>
                    <p>Check out my software, websites, programming projects, and UX designs.</p>
                    <div class="buttons-row">
                        <a href="/hire-me.php" class="button">Hire Me</a>
                    </div>
                </div>
            </div>
            <section>
                <h1 id="h1">Portfolio</h1>
                <section id="tags">
                    <h2>Tags</h2>
                        <ul>
                            <li><a href="portfolio.php#posts">All projects</a></li>
                            <?php foreach($tags as $tag) {
                                echo "<li><a href=\"portfolio.php?tag=$tag#posts\">$tag</a></li>";
                            } ?>
                        </ul>
                </section>
                <section id="posts">
                    <h2>Recent Projects</h2>
                    <?php
                        foreach($html as $project) {
                            echo $project;
                        }
                    ?>
                </section>
                <div class="buttons-row">
                    <a href="hire-me.php" target="_blank" class="button">Hire Me</a>
                    <a href="<?= $linkedin ?>" target="_blank" class="button">LinkedIn</a>
                </div>
                <p>Thanks for checking out my work! <a href="#h1">Back to top</a></p>
            </section>


<?php
        include 'includes/footer.php';