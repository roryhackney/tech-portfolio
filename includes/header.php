<!DOCTYPE html>
<html lang="en-us">
    <head>
        <!-- TODO: remember to to change back: all-styles.css to import header.css, index.php to import header.php -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- import google fonts: Belleza, Teachers, Montserrat -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

        <!-- fas for icons, brands, etc-->
        <script src="https://kit.fontawesome.com/f524b8448d.js" crossorigin="anonymous"></script>
        
        <!--favicons etc-->
        <link rel="icon" href="favicon.ico" sizes="32x32">
        <link rel="icon" href="icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="apple-touch-icon.png"><!-- 180×180 -->

        <!--my css-->
        <link rel="stylesheet" href="styles/all-styles.css">
        <link rel="stylesheet" href="styles/<?php echo $bodyClass; ?>.css">

        <!-- my javascript -->
        <script src="scripts/dark-mode.js"></script>
        <script src="scripts/form-validation.js"></script>
        
        <!-- title of page, shown in tab -->
        <title><?php echo "$title | Rory Hackney: Software Developer, Web Developer, and Designer"; ?></title>
    </head>
    <body class="<?php echo $bodyClass;?>">
        <a id="screen-reader-skip-link" href="#h1">Skip to content</a>
        <header>
            <!-- logo -->
                <!-- DONE stacks left when there's room -->
            <!-- Rory Hackney -->
            <!-- Software Developer -->
            <!-- Web Developer / Designer -->
                        <!-- stacks left when there's room-->
            <!-- Dark Mode Toggle -->
                <!-- stacks left when there's room -->
            <!-- LinkedIn/GitHub icons -->
                    <!-- stacks left when there's room and reverses order -->
            <!-- Menu -->
            <div id="logo-block">
                <img id="logo" alt="Logo with the letters RH" src="assets/logo.png" width="300" height="300"/>
                <div id="logo-text">
                    <p id="site-title">Rory Hackney</p>
                    <div>
                        <p>Software Developer</p>
                        <p>Web Developer / Designer</p>
                    </div>
                </div>
            </div>

            <div id="full-menu">
                <div id="toggle-icons">
                    <div class="dark-mode-option">
                        <label for="dark-mode-checkbox">
                            Dark Mode
                            <input id="dark-mode-checkbox" name="dark-mode-checkbox" type="checkbox"/>
                            <!-- style this as toggle rather than input itself -->
                            <div><span></span></div>
                        </label>
                    </div>
                    <div id="brand-icons">
                        <a href="<?php echo $linkedin; ?>" target="_blank"><span class="fab fa-linkedin fa-2x" title="LinkedIn"></span></a>
                        <a href="<?php echo $github; ?>" target="_blank"><span class="fab fa-github fa-2x" title="GitHub"></span></a>
                    </div>
                </div>

                <?php include 'includes/nav.php'; ?>
            </div>

        </header>
        <main>