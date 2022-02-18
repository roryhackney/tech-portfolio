<?php

session_start();
if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'Please log in to view this content.';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include 'config.php';
include 'includes/header.php';
?>
<main>
  <h2><?php echo $pageHeading; ?></h2>
  <p>Welcome to my members-only secret art website! Here you'll find my portfolio, contact form, daily art practice, and more.</p>
  <div id="homeimg"><?php randomImages($images); ?></div>
  <div id="me">
    <h3>About Me</h3>
    <img src="images/me.jpg" alt="photo of Rory Hackney">
    <p>My name's Rory Hackney, and I'm an artist and web developer from Seattle, Washington. I have a BFA in Comic Art, a passion for design and storytelling, and growing skills in code. My practice focuses on comics, web development, and design. I currently have skills in HTML, CSS, PHP, and Python, and I'm looking forward to learning more every day. To see projects I've worked on, check out my <a href="https://github.com/roryhackney">GitHub</a>. To see more of my art, check out my <a href="https://www.rorystories.com/">portfolio</a>. You can also connect with me on <a href="https://www.linkedin.com/in/roryhackney/">LinkedIn</a>.</p>
  </div>
</main>
<aside>
  <h4>Note:</h4>
  <p>This website uses PHP to dynamically generate content. You can see the code on my <a href="https://github.com/roryhackney">GitHub</a>.</p>
  </aside>
<?php
  include 'includes/footer.php';
