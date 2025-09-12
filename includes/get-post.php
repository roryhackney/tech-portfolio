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
    $query = "SELECT * FROM posts WHERE title = \"$title\"";
    
    $result = mysqli_query($link, $query);
    if ($result === false) {
        $h1 = "Post Not Found";
        $title = $h1;
        exit();
    }

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $file = $row["preview_filename_base"];
        $alt = $row["preview_alt"];
        $h1 = $row["title"];
        $createDate = $row["create_date"];
        $completeDate = $row["complete_date"];
        $summary = $row["summary"];

        //fetch all the tags for the post
        $getTags = "SELECT * FROM tags INNER JOIN post_tags ON tags.tag_name = post_tags.tag WHERE post_tags.post = \"$title\" ORDER BY tags.tag_name;";
        $rows = mysqli_query($link, $getTags);
        $tags = [];
        while ($row = mysqli_fetch_assoc($rows)) {
            array_push($tags, $row["tag_name"]);
        }

        //fetch all the content elements for the post
        $getContent =  "SELECT * FROM content
                        LEFT JOIN images -- if not an image, image fields will be null
                        ON content.image_content = images.file_name_base
                        WHERE content.post = \"$title\" 
                        ORDER BY content.order_index;";
        $contents = mysqli_query($link, $getContent);
        $html = [];
        while ($row = mysqli_fetch_assoc($contents)) {
            $type = $row["html_type"];
            switch ($type) {
                case "h2":
                    array_push($html,"<h2 class=\"" . $row["class"] . "\">" . $row["text_content"] . "</h2>");
                    break;
                case "h3":
                    array_push($html,"<h3 class=\"" . $row["class"] . "\">" . $row["text_content"] . "</h3>");
                    break;
                case "p":
                    array_push($html, "<p class=\"" . $row["class"] . "\">" . $row["text_content"] . "</p>");
                    break;
                case "picture":
                    array_push($html,
                    "<picture class=\"" . $row["class"] . "\">
                                <source media=\"(min-width: 401px)\"
                                srcset=\"assets/posts/" . $row["file_name_base"] . "-medium.jpg\">
                                <img src=\"assets/posts/" . $row["file_name_base"] . "-small.jpg\" alt=\"" . $row["alt"] . "\">
                            </picture>");
                    break;
                case "html":
                    array_push($html, $row["text_content"]);
                    break;
                default:
                    array_push($html, "<p class=\"error\">Error: $type</p>");
            }
        }
                                    
    } else {
        $h1 = "Post Not Found";
        $title = $h1;
    }


    mysqli_close($link);