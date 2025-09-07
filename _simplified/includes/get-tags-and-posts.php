<?php
    require "includes/database-credentials.php";
    $link = mysqli_connect(HOST, USER, PASS, DB);
    if (mysqli_connect_errno()) {
        //it's not connecting....
        exit("Unable to fetch projects from database. Please try again later.");
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
            $html[$i] = `
                <section class="project-card">
                    <a href="` . $href . `"><h3>` . $curr["title"] . `</h3></a>
                    <picture>
                        <source media="(min-width: 401px)" srcset="assets/` . $curr["preview-filename-base"] . `-card-medium.jpg">
                        <img src="assets/` . $curr["preview-filename-base"] . `-card-small.jpg" alt="` . $curr["preview_alt"] . `"/>
                    </picture>
                    <p>Completed ` . $curr["complete_data"] . `</p>
                    <p>` . $curr["summary"] . `</p>
                </section>
            `;
        }
    } else {
        $html[0] = "<p>No posts found</p>";
    }

    mysqli_close($link);
