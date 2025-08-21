<?php
    include("./database-credentials.php");
    //connect to the database
    $link = mysqli_connect(HOST, USER, PASS, DB);
    if (mysqli_connect_errno()) {
        //it's not connecting....
        console_log("Failed to connect");
        exit();
    }

    include "includes/header.php";
    
    $title = urldecode($_GET["title"]);
    $query = "SELECT * FROM posts WHERE title = \"$title\";";
    $result = mysqli_query($link, $query);
    if ($result === false) {
        echo "<p>Query error: " . mysqli_error($link) . "</p>";
        exit();
    }

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $file = $row["preview_filename_base"];
        $alt = $row["preview_alt"];
    } else {
        echo "<p>Post not found</p>";
    }
?>

            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/<?php echo $file;?>-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/<?php echo $file;?>-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/<?php echo $file;?>-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/<?php echo $file;?>-hero-medium.jpg">
                    <img src="assets/<?php echo $file;?>-hero-small.jpg" alt="<?php echo $alt;?>">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text"><?php echo $row["summary"];?></p>
                </div>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2"><?php echo $title;?></h2>
                        <p class="has-text-centered">Launched <?php echo $row["complete_date"];?></p>
                        <div class="tags-div">
                            <h3 class="title is-6 mb-2">Tags</h3>
                            <ul>
                                <?php 
                                    //fetch all the tags for the post
                                    $query = "SELECT * FROM tags
                                    INNER JOIN post_tags
                                    ON tags.tag_name = post_tags.tag
                                    WHERE post_tags.post = \"$title\"
                                    ORDER BY tags.tag_name;";
                                    $tags = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_assoc($tags)) {
                                        echo "<li>" . $row["tag_name"] . "</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                        <?php
                            //fetch all the content elements for the post
                            $query = "SELECT * FROM content
                                LEFT JOIN images -- if not an image, image fields will be null
                                ON content.image_content = images.file_name_base
                                WHERE content.post = \"$title\" 
                                ORDER BY content.order_index;";
                            $contents = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($contents)) {
                                $type = $row["html_type"];
                                switch ($type) {
                                    case "h2":
                                        echo "<h2 class=\"$row[class]\">$row[text_content]</h2>";
                                        break;
                                    case "h3":
                                        echo "<h3 class=\"$row[class]\">$row[text_content]</h3>";
                                        break;
                                    case "p":
                                        echo "<div class=\"block\"><p class=\"$row[class]\">$row[text_content]</p></div>";
                                        break;
                                    case "picture":
                                        echo "<picture class=\"$row[class]\">
                                            <source media=\"(min-width: 401px)\"
                                            srcset=\"assets/$row[file_name_base]-medium.jpg\">
                                            <img src=\"assets/$row[file_name_base]-small.jpg\" alt=\"$row[alt]\">
                                        </picture>";
                                        break;
                                    case "html":
                                        echo $row["text_content"];
                                        break;
                                    default:
                                        console_log("Unknown type: " . $type);
                                }
                                
                            }
                        ?>
                        <a href="portfolio.php" class="has-text-centered mb-3">Back to Portfolio</a>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
        </div>

<?php 
    //remember to close the connection
    mysqli_close($link);
    
    include 'includes/footer.php';