<?php 
    include("./database-credentials.php");

    //TODO: remove this when done testing (error reporting)
    function console_log($var) {
        echo "<script>console.log(". json_encode($var, JSON_HEX_TAG) .");</script>";
    }
    error_reporting(E_ALL);
    ini_set("display_errors", 1);


    $link = mysqli_connect(HOST, USER, PASS, DB);
    if (mysqli_connect_errno()) {
        //it's not connecting....
        echo "<p>Failed to connect</p>";
        exit();
    }
    
    $query = "SELECT * FROM tags;";
    $result = mysqli_query($link, $query);
    
    $tags = [];
    while ($row = mysqli_fetch_assoc($result)) {
        //replace spaces with underscores to use for ids, names, etc
        array_push($tags, str_replace(" ", "_", $row["tag_name"]));
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Post To DB</title>
        <style>
            * {
                padding: 5px;
                margin: 5px;
                box-sizing: border-box;
            }
            input[type=checkbox] {
                margin-right: 0;
                margin-left: 0;
            }
            .tags-div {
                display: flex;
                flex-direction: row;
                align-items: center;
                flex-wrap: wrap;
                max-width: 500px;
            }
            #count {
                border-color: gray;
                color: gray;
                background-color: gainsboro;
            }
            form {
                display: flex;
                flex-directon: row;
            }
        </style>
    </head>
    <body>
    <script>
            function addContent(event) {
                event.preventDefault();
                //increase count of elements
                const elem = document.getElementById("count");
                let count = parseInt(elem.value) + 1;
                elem.value = count;
                console.log(count);

                //get the kind of content to add
                const select = document.getElementById("add-content");
                const value = select.options[select.selectedIndex].value;

                const div = document.createElement("div");
                createTextInput(div, count, "HTMLType", value).innerText += " Do not manually edit";

                //content field required for all content types
                const label = createTextInput(div, count, "Content", "T");
                
                //picture is a special case, you need to enter filename_base and alt text
                if (value === "picture") {
                    label.innerText = "Filename Base" + count;
                    createTextInput(div, count, "Alt Text", "A");
                }

                //add a field to enter class name
                createTextInput(div, count, "Class", "C");
                //add a field for order_index as well
                createTextInput(div, count, "Order Index", count);

                //Add a button to remove this content element
                const removeButton = document.createElement("button");
                removeButton.innerText = "Remove Content Element";
                removeButton.type = "button";
                removeButton.onclick = () => {
                    div.remove();
                }
                div.appendChild(removeButton);

                document.getElementById("content-elements").appendChild(div);
            }

            function createTextInput(parent, id, textLabel, defaultVal) {
                const container = document.createElement("div");
                const label = document.createElement("label");
                label.for = textLabel + id;
                label.innerText = textLabel + id;
                const input = document.createElement("input");
                input.type = "text";
                input.defaultValue = defaultVal;
                input.id = textLabel + id;
                input.name = textLabel + id;
                container.appendChild(label);
                container.appendChild(input);
                parent.appendChild(container);
                return label;
            }
        </script>

        <h1>Add Post To DB</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- number of content elements, do not edit manually -->
            <div class="section1">
                <label for="count">Max current id of content elements - Do not edit manually</label>
                <input type="text" id="count" name="count" value="0"/>
                <div class="tags-div">
                    <?php foreach ($tags as $tag): ?>
                        <div>
                            <input type="checkbox" id="<?php echo $tag; ?>" name="<?php echo $tag; ?>" value="<?php echo $tag; ?>"/>
                            <label for="<?php echo $tag; ?>"><?php echo $tag; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="section2">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" required
                    value="<?php echo isset($_POST["title"]) ? $_POST["title"] : "";?>"
                /><br/>
                <label for="create-date">Started</label>
                <input type="text" id="create-date" name="create-date" placeholder="Month Year"
                    value="<?php echo $_POST["create-date"] ?? "";?>"
                /><br/>
                <label for="end-date">Finished</label>
                <input type="text" id="end-date" name="end-date" placeholder="Month Year" required
                    value="<?php echo $_POST["end-date"] ?? "";?>"
                /><br/>
                <label for="summary">Summary</label>
                <input type="text" id="summary" name="summary" placeholder="summary" required
                    value="<?php echo $_POST["summary"] ?? "";?>"
                /><br/>
                <label for="team">Was it a collaborative project?</label>
                <select id="team" name="team">
                    <option value=false>Solo</option>
                    <option value=true>Team</option>
                </select><br/>
                <label for="preview-filename-base">Preview Image Filename Base</label>
                <input type="text" id="preview-filename-base" name="preview-filename-base" placeholder="Eg, my-project-img" required
                        value="<?php echo $_POST["preview-filename-base"] ?? "";?>"
                /><br/>
                <label for="preview-alt">Preview Image Alt Text</label>
                <input type="text" id="preview-alt" name="preview-alt" placeholder="Preview Alt Text" required/><br/>
                <label for="order-index">Order Index</label>
                <input type="number" id="order-index" name="order-index" value="50"/>
            </div>

            <div class="section3">
                <div id="content-elements"></div>

                <label for="add-content">Select Content Type</label>
                <select id="add-content" name="add-content">
                    <option value="p">Paragraph</option>
                    <option value="h2">Heading 2</option>
                    <option value="h3">Heading 3</option>
                    <option value="picture">Picture</option>
                    <option value="html">HTML</option>
                </select><br/>

                <button type="button" onclick="addContent(event)">Add Content</button>
                <button type="submit">Submit</button>
                <button type="reset">Clear Form</button>
                <button type="button" onclick="mysqli_close($link);">Close Connection</button>
            </div>
        </form>
    </body>
</html>

<?php    
    //handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        console_log($_POST);
        $ret = [];
        $ret["tags"] = [];
        //search form for tags with spaces removed, if they exist, add original tag to array
        foreach ($tags as $tag) {
            str_replace(" ", "_", $tag);
            if (isset($_POST[$tag])) {
                str_replace("_", " ", $tag);
                array_push($ret["tags"], $tag);
            }
        }
        $ret["title"] = $_POST["title"];
        $ret["create-date"] = $_POST["create-date"];
        $ret["end-date"] = $_POST["end-date"];
        $ret["summary"] = $_POST["summary"];
        $ret["preview-filename-base"] = $_POST["preview-filename-base"];
        $ret["preview-alt"] = $_POST["preview-alt"];
        $ret["team"] = $_POST["team"];
        $ret["content"] = [];
        $ret["order-index"] = $_POST["order-index"];
        
        $count = $_POST["count"];
        console_log($count);
        //iterate through content elements 1 through value, add them to content if they exist
        for ($i = 1; $i <= $count; $i++) {
            $textContentId = "Content$i";
            $altTextId = "Alt_Text$i";
            $classId = "Class$i";
            $orderIndexId = "Order_Index$i";
            $typeId = "HTMLType$i";
            if (!isset($_POST[$textContentId]) || !isset($_POST[$orderIndexId])) {
                continue;
            }

            $content = [];
            $content["text"] = $_POST[$textContentId];
            $content["alt"] = isset($_POST[$altTextId]) ? $_POST[$altTextId] : null;
            $content["class"] = (isset($_POST[$classId]) && $_POST[$classId] !== "") ? $_POST[$classId] : null;
            $content["order_index"] = $_POST[$orderIndexId];
            $content["htmltype"] = $_POST[$typeId];
            array_push($ret["content"], $content);
        }
        //validate minimum fields to ensure it will add to db without errors
        //catch any errors you do encounter
        //might need to save the values in the field in case form is emptied but then data is invalid
        //clear form button
        console_log($ret);

        //add post to posts table
        $addPost = "INSERT INTO posts VALUES (\"" . $ret["title"] . "\", ";
        if ($ret["create-date"] != null) {
            $addPost .= "\"" . $ret["create-date"] . "\", ";
        } else {
            $addPost .= "null, ";
        }
        $addPost .= "\"" . $ret["end-date"] . "\", \"" . $ret["summary"] . "\", " . $ret["team"] . ", \"" . $ret["preview-filename-base"] . "\", \"" . $ret["preview-alt"] ."\"," . $ret["order-index"] . ");";

        $result = mysqli_query($link, $addPost);
        
        if (!$result) {
            console_log("Failed to add post to database");
            console_log(mysqli_error($link));
        } else {
            console_log("Post added to database");
        }

        //add tags to post_tags table
        $max = count($ret["tags"]);
        for ($i = 0; $i < $max; $i++) {
            $tag = str_replace("_", " ", $ret["tags"][$i]);
            $addTag = "INSERT INTO post_tags VALUES (\"" . $tag . "\", \"" . $ret["title"] . "\");";
            console_log("Attempting $addTag");
            $result = mysqli_query($link, $addTag);
            if (!$result) {
                console_log("Failed to add tag association to database: " . $ret["tags"][$i]);
                console_log(mysqli_error($link));
            } else {
                console_log("Tag association added to database: " . $ret["tags"][$i]);
            }
        }

        //add images and text content to images, content tables
        $max = count($ret["content"]);
        for ($i = 0; $i < $max; $i++) {
            $content = $ret["content"][$i];
            if ($content["htmltype"] === "picture") {
                //this is an image, add to images table     file name base      alt     post
                $addImage = "INSERT INTO images VALUES (\"". $content["text"] . "\", \"" . $content["alt"] . "\", \"" . $ret["title"] . "\");";
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
                $addContent .= "null, \"" . $ret["title"] . "\", \"" . $content["text"] . "\");";
            } else {
                $addContent .= "\"" . $content["text"] . "\", \"" . $ret["title"] . "\", null);";
            }

            $result = mysqli_query($link, $addContent);

            if (!$result) {
                console_log("Failed to add to contents table: " . $content["text"]);
                console_log(mysqli_error($link));
            } else {
                console_log("Added to contents table: " . $content["text"]);
            }

        }
        console_log("Finished adding to database. SELECT * FROM posts WHERE title = " . $ret["title"] . "; to see if it worked.");
    }
?>