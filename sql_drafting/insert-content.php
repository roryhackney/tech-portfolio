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

function addStaticImage($src, $alt, $width, $height) {
    addHTML('<img src="assets/posts/' . $src . '" alt="' . $alt .'" width="' . $width . '" height="' . $height . '"/>');
}

//MAKE CHANGES HERE
$title = "Ecommerce SQL Database";

addHTML('<p>For this project, I worked with <a href="https://github.com/KenCage1007\" target="_blank">Ken <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a> to design and implement a relational SQL database for a fictional crystal shop called The Dragon\'s Hoard in order to develop our database skills. We wanted to track products, current inventory, transactions, reviews for products, and users who signed up for an account on the fictional shop\'s website.</p>');

addContent("h2", null, "Features", null);

addList([
    "List which products we currently have in inventory",
    "Create new products",
    "Modify the amount of a particular product that we have in inventory",
    "Delete a product from inventory",
    "Get a list of the most popular products for a given time range",
    "Get a list of the least popular products for a given time range",
    "Get a list of users who haven't purchased something in a few months to send promotional emails to, this should also include products that these users normally purchase"
]);

addContent("h2", null, "Design", null);
addHTML('<p>We began by analyzing and collecting requirements. As part of this process, we developed a <a href="https://github.com/roryhackney/ecommerceDatabase/blob/main/Glossary.pdf" target="_blank">glossary <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a> which defined entities, naming conventions, and descriptions of various properties. We then developed an <a href="https://github.com/roryhackney/ecommerceDatabase/blob/main/design.png" target="_blank">entity relationship diagram (ERD) <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a> using Crow\'s Foot notation to plan our logical model, defining each entity, its properties, and its relationships with other entities (eg, one to many). After normalization, we worked on the final <a href="https://github.com/roryhackney/ecommerceDatabase/blob/main/tableDiagram.png" target="_blank">table diagram <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a> to define precisely how to implement each table in SQL, creating additional join tables for many to many relationships.</p>');

addContent("h2", null, "Implementation", null);
addText("Once the design was complete, we split up the tasks to write SQL to implement each table, allowing us to make progress on different independent tables at the same time. We also wrote SQL to insert data into each table. Finally, we developed SQL to create procedures and triggers. Once done, we combined our separate files, fixed bugs, and ensured everything worked together and successfully created the database when run in the correct order.");

addStaticImage("ecommerce-sql-db-tables.png", "Screenshot of the database tables after implementation", "1482", "892");

addContent("h2", null, "Application", null);
addText("We then created a Java application which calls into the locally running database, using print statements for a menu and gathering user input in the terminal to demonstrate the functionality of the database.");

addStaticImage("ecommerce-sql-db-application.png", "The Java program shows the menu: View Inventory, Add Product, Change Quantity, Delete Product, Get Most/Least Popular Products, Get Users Favorite Products For Promo", "1920", "1080");

//Add GitHub and Hire Now buttons
$g = "https://github.com/roryhackney/ecommerceDatabase";
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