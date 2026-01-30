<?php
    require "includes/database-credentials.php";

    $link = mysqli_connect(HOST, USER, PASS, DB);
    if (mysqli_connect_errno()) {
        //it's not connecting....
        exit("Unable to fetch blog posts from database. Please try again later.");
    }

    //get all the tags that have at least one project to display them
    //tags with no posts don't appear and will not query the database if put in the url / GET
    $query = "SELECT * FROM blog_tags WHERE tag IN (SELECT tag FROM blog_post_tags);";
    $rows = mysqli_query($link, $query);
    $n = mysqli_num_rows($rows);
    $tags = [];
    for ($i = 0; $i < $n; $i++) {
        $tags[$i] = mysqli_fetch_assoc($rows)["tag"];
    }
    
    //show all posts
    $query = "SELECT * FROM blog_posts ORDER BY post_date;";
    if (isset($_GET["tag"])) {
        //input validation: check that the selected tag is valid
        $filter = htmlspecialchars($_GET["tag"]);
        $filter = mysqli_real_escape_string($link, $filter);
        if (in_array($filter, $tags)) {
            //filter to url param (tag) if present
            $query = "SELECT * FROM blog_posts WHERE title IN (SELECT post FROM blog_post_tags WHERE tag = \"$filter\") ORDER BY post_date;";
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

            //get this post's tags for display
            $postTags = mysqli_query($link, "SELECT blog_post_tags.tag FROM blog_post_tags JOIN blog_tags ON blog_post_tags.tag = blog_tags.tag WHERE post = \"" . $curr["title"] . "\";");
            $tagsArr = [];
            
            $n = mysqli_num_rows($postTags);
            for ($j = 0; $j < $n; $j++) {
                $tagJ = mysqli_fetch_assoc($postTags)["tag"];
                $tagsArr[$j] = "<li><a href=\"blog.php?tag=$tagJ#post-" . $curr["title"] . "\">" . $tagJ . "</a></li>";
            }

            // html for this post
            $href = "blog-post.php?title=" . $curr["title"];
            $html[$i] = "
                <section class=\"project-card\" id=\"post-" . $curr["title"] . "\">
                    <a href=\"" . $href . "\"><h3>" . $curr["title"] . "</h3></a>
                    <p>Posted " . $curr["post_date"] . "</p>
                    <div id=\"card-tags\"><h4>Tags</h4>: <ul>" . implode(", ", $tagsArr) . "</ul></div>
                </section>
            ";
        }
        if ($numRows % 2 !== 0) {
            $html[$numRows] = "<section class=\"project-card hidden-but-affects-layout\"></section>";
        }
    } else {
        $html[0] = "<p>No posts found</p>";
    }

    mysqli_close($link);
