<?php
//Before running this script, head over to roryhackney.com/form.php and add the post. Use the same title here.
//Nested lists (ul/ol) should be entered as HTML and be inside div.block and have the class content for ul
//Text with links should be entered as HTML inside a p tag
//Types: p, h2, h3, html, picture
//This adds the content of the post to the database as an ordered list of content
//Content should be stored as an array of associative arrays containing keys: text, alt, class, order_index, htmltype


//TODO: remove this when done testing (error reporting)
function console_log($var) {
    echo "<script>console.log(". json_encode($var, JSON_HEX_TAG) .");</script>";
}
error_reporting(E_ALL);
ini_set("display_errors", 1);


$link = mysqli_connect("mysql.roryhackney.com", "tech_portfolio", "BUHDdKvcak%ra7YbHRWC", "tech_portfolio");
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

function addPicture($base, $alt) {
    addContent("picture", "small-image", $base, $alt);
}

function addHTML($html) {
    addContent("html", null, $html, null);
}

function addTextInBlock($text) {
    addContent("html", null, '<div class="block"><p>' . $text . '</p></div>', null);
}

function addTextWithBoldStart($start, $text) {
    addHTML('<div class="block"><p><strong>' . $start . '</strong>: ' . $text . '</p></div>');
}

function addList($items, $ordered = false) {
    $html = '<div class="block">';
    if ($ordered === true) {
        $html .= "<ol>";
        foreach ($items as $item) {
            $html .= "<li>$item</li>";
        }
        $html .= "</ol></div>";
    } else {
        $html .= '<ul class="content">';
        foreach ($items as $item) {
            $html .= "<li>$item</li>";
        }
        $html .= "</ul></div>";
    }
    addHTML($html);
}

function addH3($heading) {
    addHTML('<h3 class="title is-4 has-text-centered mb-0">'.$heading.'</h3>');
}

function addH4($heading) {
    addHTML('<h4 class="title is-5 has-text-centered mb-0">' .$heading.'</h4>');
}

function addStaticImage($src, $alt, $width, $height) {
    addHTML('<img src="assets/' . $src . '" alt="' . $alt .'" width="' . $width . '" height="' . $height . '"/>');
}

//MAKE CHANGES HERE
$title = "EllePower Website - Capstone";

//For my senior capstone project, I had the opportunity to work with my teammate Edale to design and implement a website for EllePower, a coaching business that focuses on helping survivors of intimate partner violence rebuild their lives.

addTextInBlock('After initially meeting with the client to discuss the project and align the website design goals with her existing branding, content, and design preferences, I was able to leverage my previous background in web design to lead the development of a strong UX design in Figma. I developed a brand guide reference that established fonts, colors, and spacing, created custom design elements like vines, watercolor backgrounds, and edited client photos, and worked with Edale to iteratively improve the design in Figma by integrating weekly feedback from the client.');

addStaticImage("ellepower-website-branding-guide.png", "Screenshot of the brand guide in Figma, showing font styles, colors, and standards for styling various elements, such as buttons.", 1920,1080);

addTextInBlock("Once the design was approved, we began working on implementing the pages using the client's business and CMS platform, Systeme.IO. One challenge we ran into was that the website builder is a drag and drop block based tool, which limited our control over HTML elements and CSS styles. We chose to prioritize the client's ability to update content using the platform without understanding code over strictly adhering to the original design in Figma, while keeping it as close as possible.");

addTextInBlock("To achieve this, we created and saved custom reusable blocks,  allowing the client to easily recreate content, including menus, headers, and gradient text boxes. We could also save whole pages as blocks, so if a breaking change was made, it would be easy to restore the original page. We also created blocks specially designed for smaller devices, setting each page to show either desktop or mobile blocks depending on the user's screen size.");

addStaticImage("ellepower-website-responsive.png", "The completed website's homepage shown on a 480px wide screen and a 1440px wide screen", 1920,1080);

addTextInBlock("For important features that couldn't be implemented using blocks, we added custom HTML, CSS, and JavaScript code, for example, swapping out images in the hero based on screen size to prevent overlapping text and image issues in the native editor, and highlighting the Coaching CTA link with specific CSS styling. However, we limited these custom features and created reusable blocks containing the code when possible so the client could easily add them as needed to future pages.");

addTextInBlock("Despite the challenges, we were able to implement our design and create the pages in Systeme.IO, including Home, About, Contact, Podcast, Testimonials, Resources, and What Is IPV. This project taught us a lot about communicating with clients, the benefits of iterative design and development with frequent feedback, collaborating while keeping the website design consistent, managing projects and large task lists, following web accessibility requirements, and working with client friendly CMS systems rather than writing code.");

addStaticImage("ellepower-website-ipv.png", "The What Is IPV page, showing a smiling woman next to information about Intimate Partner Violence (IPV).", 1920, 1080);

addTextInBlock('You can check out the website at <a href="https://www.ellepower.ca/us" target="_blank">www.ellepower.ca/us</a>, but do note our client still has more content to add as she prepares to launch EllePower. I really enjoyed getting to work directly with a client and contribute to a project with such a positive impact, and I can’t wait to watch EllePower launch and make a difference in the world.');

//Add In Progress content to speed development
// $href="https://github.com/roryhackney/ecommerceDatabase";
// addH3("In Progress");
// addTextInBlock("I'm currently working on documenting this project. Please feel free to check out the project at <a href=\"$href\">$href</a> in the meantime. Thank you for your patience.");

//TODO: uncomment this when you're ready to add the real content

//Add GitHub and Hire Now buttons
// $g = "https://github.com/roryhackney/job-offer-comparison-website";
// $html = '<div class="buttons-row"><a class="button unset-width" href=' . $g . ' target="_blank" aria-label="GitHub - link opens in new tab">GitHub<span class="icon button-external"><img src="assets/arrow-up-right-from-square-solid.svg" alt="opens in new tab"></span></a><a class="button urgent" href="hire-me.php">Hire Now</a></div>';
// addContent("html", null, $html, null);

$html = '<div class="buttons-row"><a class="button unset-width href="https://www.ellepower.ca/us" target="_blank" aria-label = "Live Site - link opens in new tab">Live Site<span class="icon button-external"><img src="assets/arrow-up-right-from-square-solid.svg" alt="opens in new tab"></span></a><a class="button urgent" href="hire-me.php">Hire Now</a></div>';
addContent("html", null, $html, null);

//Just add Hire Now button
// addContent("html", null, '<div class="buttons-row"><a class="button urgent" href="hire-me.php">Hire Now</a></div>', null);

addContent("p", "has-text-centered", "Thanks for checking out my project!", null);

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