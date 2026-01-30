<?php 
    //title, class, h1, etc for the current page
    include 'includes/current-page.php';
    //contact form submission handling
    include 'includes/form-handler.php';
    //header, nav, main opener etc
    include 'includes/header.php';

    //TODO: Connect to database and fetch tags and posts for display
    include 'includes/get-blog-tags-and-posts.php';
?>

            <div id="hero">
                <picture>
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/blog-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/blog-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/blog-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/blog-hero-medium.jpg">
                    <img src="assets/blog-hero-small.jpg" alt="Diagrams of a stack, tree, and cloud over a purple and blue gradient.">
                </picture>
                <div id="hero-text">
                    <p>Blog</p>
                    <p>Tutorials, articles, and other useful content from project learnings and interview prep.</p>
                </div>
            </div>
            <section>
                <h1 id="h1">Blog</h1>
                <section id="tags">
                    <h2>Tags</h2>
                        <ul>
                            <li><a href="#posts">All posts</a></li>
                            <?php
                            foreach($tags as $tag) {
                                echo "<li><a href=\"blog.php?tag=$tag#posts\">$tag</a></li>";
                            } ?>
                        </ul>
                </section>
                <section id="posts">
                    <h2>Recent Posts</h2>
                    <?php
                        foreach($html as $post) {
                            echo $post;
                        }
                    ?>
                </section>
                <div class="buttons-row">
                    <a href="hire-me.php" target="_blank" class="button">Hire Me</a>
                    <a href="<?= $linkedin ?>" target="_blank" class="button">LinkedIn</a>
                </div>
                <p>Thanks for checking out my blog! <a href="#h1">Back to top</a></p>
            </section>


<?php
        include 'includes/footer.php';