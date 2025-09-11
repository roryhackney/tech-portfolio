<?php
    //TODO: remove this when done testing (error reporting)
    function console_log($var) {
        echo "<script>console.log(". json_encode($var, JSON_HEX_TAG) .");</script>";
    }
    error_reporting(E_ALL);
    ini_set("display_errors", 1);


    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        console_log($_POST);
        $ret = [];
        // ret["tags"] = [];
//      foreach ($tags as $tag) {
//          if (isset($_POST[$tag])) {
//              array_push(ret["tags"], $tag);
//          }
//      }
        $ret["title"] = $_POST["title"];
        $ret["create-date"] = $_POST["create-date"];
        $ret["end-date"] = $_POST["end-date"];
        $ret["summary"] = $_POST["summary"];
        $ret["preview-filename-base"] = $_POST["preview-filename-base"];
        $ret["preview-alt"] = $_POST["preview-alt"];
        $ret["team"] = $_POST["team"] === "false" ? false : true;
        console_log($ret);
    }