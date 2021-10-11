<?php

$name = "";
$email = "";
$subject = "";
$message = "";
$nameError = "";
$emailError = "";
$subjectError = "";
$messageError = "";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(empty($_POST["name"])) {
        $nameError = "Please enter your preferred name.";
    } else {
        $name = validate($_POST["name"]);
    }

    if(empty($_POST["email"])) {
        $emailError = "Please enter your email so I can reply.";
    } else {
        $email = validate($_POST["email"]);
    }

    $subject = validate($_POST["subject"]);

    if(empty($_POST["message"])) {
        $messageError = "Please enter your message.";
    } else {
    $message = validate($_POST["message"]);
    }
}

function validate($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}