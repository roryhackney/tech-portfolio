<?php
    require "./database-credentials.php";
    //connect to database
    $link = mysqli_connect(HOST, USER, PASS, DB);
    if (mysqli_connect_errno()) {
        //it's not connecting....
        echo "<p>Failed to connect</p>";
        exit();
    }

    //get all the tags that have at least one project to display them
    //tags with no posts don't appear and will not query the database if put in the url / GET
    $query = "SELECT * FROM tags WHERE tag_name IN (SELECT tag FROM post_tags) ORDER BY order_index";
    $rows = mysqli_query($link, $query);
    $n = mysqli_num_rows($rows);
    $tags = [];
    for ($i = 0; $i < $n; $i++) {
        $tags[$i] = mysqli_fetch_assoc($rows)["tag_name"];
    }
    
    //show all posts
    $query = "SELECT * FROM posts ORDER BY order_index DESC;";
    if (isset($_GET["tag"])) {
        //input validation: check that the selected tag is valid
        $filter = htmlspecialchars($_GET["tag"]);
        $filter = mysqli_real_escape_string($link, $filter);
        if (in_array($filter, $tags)) {
            //filter to url param (tag) if present
            $query = "SELECT * FROM posts WHERE title IN (SELECT post FROM post_tags WHERE tag = \"$filter\" ORDER BY order_index DESC);";
        }
    }

    //final array of html content
    $html = [];

    //get all the posts
    $posts = mysqli_query($link, $query);
    $numRows = mysqli_num_rows($posts);
    if ($numRows > 0) {
        for ($i = 0; $i < $numRows; $i++) {
            $curr = mysqli_fetch_assoc($posts);
            $href = "post.php?title=" . $curr["title"];
            $html[$i] = "<div class=\"column is-half\">
                <div class=\"project-card\">
                    <a href=\"$href\">
                        <h3 class=\"title is-6 mb-0\">" . $curr["title"] . "</h3>
                    </a>
                    <a href=\"$href\">
                        <picture class=\"small-image dark-image\">
                            <source media=\"(min-width: 401px)\"
                                srcset=\"assets/" . $curr["preview_filename_base"] . "-card-medium.jpg\">
                                <img src=\"assets/" . $curr["preview_filename_base"] . "-card-small.jpg\"
                                    alt=\"" . $curr["preview_alt"] . "\">
                        </picture>
                    </a>
                    <div>
                        <span>Completed " . $curr["complete_date"] . "</span>
                    </div>
                    <a href=\"$href\">
                        <p class=\"content\">" . $curr["summary"] . "</p>
                    </a>
                </div>
            </div>";
        }
    } else {
        $html[0] = "<p>No posts found</p>";
    }

    mysqli_close($link);

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
                    <p class="hero-text">Check out my recent work - software development and programming, web development and design, and mixed projects, along with peeks into my process.</p>
                </div>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered" id="pageTitle">Recent Projects</h2>
                                <div class="tags-div">
                                    <h3 class="title is-6 mb-2">Tags</h3>
                                    <ul>
                                        <?php foreach($tags as $tag) {
                                            echo "<li><a href=\"portfolio.php?tag=$tag#pageTitle\">$tag</a></li>";
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php
                                foreach($html as $project) {
                                    echo $project;
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