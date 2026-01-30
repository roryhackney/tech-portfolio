<?php
    include "includes/database-credentials.php";
    $link = mysqli_connect(HOST, USER, PASS, DB);
    if (mysqli_connect_errno()) {
        //it's not connecting....
        $h1 = "Post Not Found";
        $title = $h1;
        exit();
    }

    $title = urldecode($_GET["title"]);
    $title = mysqli_real_escape_string($link, $title);
    $query = "SELECT * FROM blog_posts WHERE title = \"$title\"";
    
    $result = mysqli_query($link, $query);
    if ($result === false) {
        $h1 = "Post Not Found";
        $title = $h1;
        exit();
    }

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $h1 = $row["title"];
        $postDate = $row["post_date"];

        //fetch all the tags for the post
        $getTags = "SELECT * FROM blog_tags INNER JOIN blog_post_tags ON blog_tags.tag = blog_post_tags.tag WHERE blog_post_tags.post = \"$title\" ORDER BY blog_tags.tag;";
        $rows = mysqli_query($link, $getTags);
        $tags = [];
        while ($row = mysqli_fetch_assoc($rows)) {
            array_push($tags, $row["tag"]);
        }

        //fetch all the content elements for the post
        $getContent =  "SELECT * FROM blog_post_content WHERE post = \"$title\" ORDER BY order_index;";
        $contents = mysqli_query($link, $getContent);
        $html = [];
        while ($row = mysqli_fetch_assoc($contents)) {
            array_push($html,$row["html_content"]);
        }
                                    
    } else {
        $h1 = "Post Not Found";
        $title = $h1;
    }


    mysqli_close($link);