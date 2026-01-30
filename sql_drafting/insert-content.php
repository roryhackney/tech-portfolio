<?php

include("./database-credentials.php");

//Before running this script, head over to roryhackney.com/form.php and add the post. Use the same title here.
//Text with links should be entered as HTML inside a p tag
//Types: p, h2, h3, html, picture
//This adds the content of the post to the database as an ordered list of content
//Content should be stored as an array of associative arrays containing keys: text, alt, class, order_index, htmltype


//TODO: remove this when done testing (error reporting)
function console_log($var) {
    echo "<script>console.log(". json_encode($var, JSON_HEX_TAG) .");</script>";
}

$link = mysqli_connect(HOST, USER, PASS, DB);
if (mysqli_connect_errno()) {
    //it's not connecting....
    console_log("Failed to connect");
    exit();
}

$allcontent = [];

function addContent($htmltype, $class, $text, $alt) {
    global $allcontent;
    
    $order_index = count($allcontent) + 1;
    $content = [
        "text" => $text,
        "alt" => $alt === null ? null : $alt,
        "class" => $class === null ? null : $class,
        "order_index" => $order_index,
        "htmltype" => $htmltype
    ];
    array_push($allcontent, $content);
}

function addText($text) {
    addContent("p", null, $text, null);
}

// adds a picture with two sizes, 760 and 400px wide, with file names $base + "-medium.jpg", $base + "-small.jpg"
function addPicture($base, $alt) {
    addContent("picture", "small-image", $base, $alt);
}

//adds a single image, not a responsive picture. More flexible, can be any size.
function addStaticImage($src, $alt, $width, $height) {
    addHTML('<img src="assets/posts/' . $src . '" alt="' . $alt .'" width="' . $width . '" height="' . $height . '"/>');
}

function addHTML($html) {
    addContent("html", null, $html, null);
}

function addTextWithBoldStart($start, $text) {
    addHTML('<p><strong>' . $start . '</strong>: ' . $text . '</p>');
}

function addList($items, $ordered = false) {
    $html = "";
    if ($ordered === true) {
        $html .= "<ol>";
        foreach ($items as $item) {
            $html .= "<li>$item</li>";
        }
        $html .= "</ol>";
    } else {
        $html .= '<ul>';
        foreach ($items as $item) {
            $html .= "<li>$item</li>";
        }
        $html .= "</ul>";
    }
    addHTML($html);
}

//MAKE CHANGES HERE
$title = "LSR Web Development Practicum";

addText("LSR has published art, writing, and video submissions by students and alumni of North Seattle College in various formats since 2000. It was exciting getting to work on a new website for a real world client.");

addText("As part of the project, I had the opportunity to participate in sprints, improve my Git skills, collaborate with peer developers, project managers, and technical leads, practice designing websites, improve my web development and React skills, learn TypeScript, and work with the WordPress API on a real world project.");

addText("The practicum I was a part of had great documentation and established processes, which helped me learn Git skills in a more realistic work environment. I participated in sprint planning meetings, task estimation, and retrospectives, created issues and pull requests according to established templates, locally tested the work of other developers, and improved my own work based on feedback.");

addStaticImage("lsr-website-pull-request.png", "Screenshot of my PR in Git that fetches multiple posts of a given category and displays them in a list.", 1488, 837);

addHTML('<p>I had the opportunity to develop a <a href="https://www.figma.com/design/lQdedg8eq6pw4QMRWoyLAw/LSR-Design">design for the website</a> in Figma, which reinforced my skills in responsive web design. Once the client picked their favorite design, I began implementing the website using React. During the project, I ran into merge conflicts and other Git issues when merging multiple PRs from different developers, which gave me a lot of practice resolving problems in the web editor and CLI, and carefully testing PRs before approval. I found TypeScript helpful for improving the reliability of submitted code and catching type errors.</p>');

addText("After the website structure was created using React components, my primary role was to work on fetching content from the original site using the WordPress API. During this task, I became very familiar with Postman, which allowed me to test WordPress API calls, analyze the responses, and parse them in order to display and style extracted content. Although I’d only used them briefly before, after greater understanding I found them extremely valuable, and could already see how I could use the API to allow non technical clients to manage content using the GUI while allowing developers programmatic access.");

addStaticImage("lsr-website-react-component.png", "Detail component, which retrieves a post's content from WordPress using the GET title parameter and turns it into valid HTML.", 1488, 837);

addText("One challenge I ran into was that some posts had different types of content, like images, videos, and text. I got a lot of practice handling edge cases and ensuring the website could handle all kinds of content gracefully with helpful feedback rather than errors being displayed to the user. I also was able to implement fetching and displaying posts by category, parsing the returned JSON into HTML and React code in reusable components in order to create web pages. I learned a lot about writing reusable, generic functions and components that allowed us to reduce duplication and improve code quality and maintainability.");

addStaticImage("lsr-website-category-posts.png", "PostsByCategory component, which takes a category and returns a list of posts in HTML/React code.", 1488, 837);

addText("Once the posts were correctly displayed and styled on the new website, we began discussing different approaches to a more permanent migration. While the team was working on an initial database design, the client asked for a completed and launched website for a public launch party - in two weeks, with new 2025 student submissions in different word documents to be added to the site without being accessed through the WordPress API.");

addText("I recommended a simple, rapid approach in order to meet the deadline, creating an array for each post category containing new submissions title and author. The submission objects in the array would be mapped to an HTML list using the existing React components, allowing reuse of the HTML and CSS that had already been developed, displaying the new content above the older WordPress posts seamlessly. On the detail page, titles were used as keys to provide O(1) access to the correct array of paragraphs or other content, fetching the title from the URL's GET parameters, and mapping the content to existing React components. I developed a proof of concept for the Poetry page, after which the team split up the remaining pages, completing the project with time to spare.");

addText("This was a great project that taught me a lot about collaboration and working with clients. I'm looking forward to seeing how the rest of the site develops, as the next generation of students completes the database.");

//Add GitHub and Hire Now buttons
$g = "https://github.com/SeattleColleges/licton-springs-review-nextjs";
$html = '<div class="buttons-row"><a class="button" href=' . $g . ' target="_blank">GitHub <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a><a class="button" href="hire-me.php">Hire Now</a></div>';
addContent("html", null, $html, null);

//Just add Hire Now button
// addContent("html", null, '<div class="buttons-row"><a class="button urgent" href="hire-me.php">Hire Now</a></div>', null);

//DONE!

//Don't touch this please - it adds the content to the database
$max = count($allcontent);
for ($i = 0; $i < $max; $i++) {
    $content = $allcontent[$i];
    $content["text"] = mysqli_real_escape_string($link, $content["text"]);
    if ($content["htmltype"] === "picture") {
        //this is an image, add to images table     file name base      alt     post
        $addImage = "INSERT INTO images VALUES (\"". $content["text"] . "\", \"" . $content["alt"] . "\", \"" . $title . "\");";
        $result = mysqli_query($link, $addImage);
        if (!$result) {
            console_log("Failed to add image to images table: " . $content["text"]);
            console_log(mysqli_error($link));
        } else {
            console_log("Image added to images table: " . $content["text"]);
        }
    }
    //now add to content table whether image or text
    $addContent = "INSERT INTO content (order_index, html_type, class, text_content, post, image_content) VALUES (" . $content["order_index"] . ", \"" . $content["htmltype"] . "\", ";
    if ($content["class"] !== null) {
        $addContent .= "\"" . $content["class"] . "\", ";
    } else {
        $addContent .= "null, ";
    }
    if ($content["htmltype"] === "picture") {
        $addContent .= "null, \"" .                      $title . "\", \"" . $content["text"] . "\");";
    } else {
        $addContent .= "\"" . $content["text"] . "\", \"" . $title . "\",        null);";
    }
    console_log("QUERY: " . $addContent);

    $result = mysqli_query($link, $addContent);

    if (!$result) {
        console_log("Failed to add to contents table: " . $content["text"]);
        console_log(mysqli_error($link));
    } else {
        console_log("Added to contents table: " . $content["text"]);
    }

}

console_log('Finished adding to database. SELECT * FROM content WHERE title = "' . $title . '"; to see if it worked.');

mysqli_close($link);