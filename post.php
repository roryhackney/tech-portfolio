<?php 
    //title, class, h1, etc for the current page
    include 'includes/current-page.php';
    //contact form submission handling
    include 'includes/form-handler.php';

    //Connect to database and fetch project for display
    include 'includes/get-post.php';
    
    //header, nav, main opener etc
    include 'includes/header.php';
?>

            <div id="hero">
                <picture>
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/posts/<?= $file?>-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/posts/<?= $file?>-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/posts/<?= $file?>-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/posts/<?= $file?>-hero-medium.jpg">
                    <img src="assets/posts/<?= $file?>-hero-small.jpg" alt="<?= $alt ?>">
                </picture>
            </div>
            <section>
                <h1 id="h1"><?= $h1 ?></h1>
                <p><?php if ($createDate === $completeDate) {echo($createDate);} else {echo($createDate . " - " . $completeDate);} ?></p>
                <section id="tags">
                    <h2>Tags</h2>
                        <ul>
                            <?php foreach($tags as $tag) {
                                echo "<li>$tag</li>";
                            } ?>
                        </ul>
                </section>
                <p><?= $summary ?></p>
                <?php
                    foreach($html as $element) {
                        echo $element;
                    }
                ?>
                <p>Thanks for checking out my project!</p>
                <p>Back to <a href="portfolio.php">Portfolio</a></p>

<?php
    include 'includes/footer.php';
