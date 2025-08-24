<?php
    /*contact form validation*/
    $name = "";
    $email = "";
    $subject = "";
    $message = "";
    $nameError = "";
    $emailError = "";
    $messageError = "";
    $recaptchaError = "";

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(empty($_POST["name"])) {
            $nameError = "Please enter your preferred name.";
        } else {
            $name = validate($_POST["name"]);
        }

        if(empty($_POST["email"])) {
            $emailError = "Please enter your email so I can reply.";
        } else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter a valid email address.";
            $emailValue = $_POST["email"];
        } else {
            $emailValue = $_POST["email"];
            $email = validate($_POST["email"]);
        }

        $subject = validate($_POST["subject"]);

        if(empty($_POST["message"])) {
            $messageError = "Please enter your message.";
        } else {
            $message = validate($_POST["message"]);
        }

        $recaptchaResponse = $_POST["g-recaptcha-response"];
        $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptchaData = array(
            'secret' => $recaptchaSecretKey,
            'response' => $_POST["g-recaptcha-response"]
        );
        $recaptchaOptions = array(
            'http' => array(
                'method' => 'POST',
                'content' => http_build_query($recaptchaData)
            )
        );
        $recaptchaContext = stream_context_create($recaptchaOptions);
        $recaptchaVerification = file_get_contents($recaptchaURL, false, $recaptchaContext);
        $recaptchaSuccess = json_decode($recaptchaVerification);
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !empty($_POST["message"])) {
            if($recaptchaSuccess->success == false) {
                $recaptchaError = "Please check the recaptcha box.";
                echo '
                <script type="text/javascript">
                    "use strict";
                    window.addEventListener("load", function(event) {
                        scrollToForm();
                        function scrollToForm() {
                            let form = document.getElementById("form");
                            form.scrollIntoView();
                        }
                    });
                </script>';
            } else if($recaptchaSuccess->success == true) {
            /*email contact*/
                $to = "roryhackney@gmail.com";
                if(empty($_POST["subject"])) {
                    $mySubject = "Contact Form from roryhackney.com (tech portfolio)";
                } else {
                    $mySubject = $subject . " | Contact Form (tech portfolio)";
                }
                $headers = "From: admin@roryhackney.com" . "\r\n" . "Reply-To: " . $email;
                $message .= "\n" . "From: " . $name;
                $message = wordwrap($message, 70);
                mail($to, $mySubject, $message, $headers);
                header("Location: thanks.php");
            }
        } else {
            echo '
            <script type="text/javascript">
                "use strict";
                window.addEventListener("load", function(event) {
                    scrollToForm();
                    function scrollToForm() {
                        let form = document.getElementById("form");
                        form.scrollIntoView();
                    }
                });
            </script>';
        }
    }
