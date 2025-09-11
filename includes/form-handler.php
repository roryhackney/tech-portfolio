<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if (
            ! empty($_POST["name"]) &&
            ! empty($_POST["email"]) &&
            ! empty($_POST["message"]) &&
            empty($_POST["url"]) //honeypot
        ) {
            $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
            if (preg_match($regex, $_POST["email"])) {
                $from = "admin@roryhackney.com"; //or it won't send properly
                $replyTo = $_POST["email"];
                $headers = "From: " . $from . "\r\n" . "Reply-To: " . $replyTo;
                
                $to = $email;
                $subject = "Contact Form Submission - Tech Portfolio";
                
                $message = "Contact Form Submitted by " . $_POST["name"] . ", " . $_POST["email"] . "\r\n";
                $message .= $_POST["message"];
                $message = wordwrap($message, 70, "\r\n", true);

                mail($to, $subject, $message, $headers);
                header("Location: thanks.php");
            }
        } else {
            //I'm not sending that email you filled out the bot field or altered something client side so you didn't have to provide a valid email or required fields
            header("Location: nothanks.php");
        }
    }