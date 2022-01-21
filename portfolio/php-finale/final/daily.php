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

//set date to today using date function
date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
  $today = $_GET['today'];
} else {
  $today = date('l');
}

switch($today) {
  case 'Monday':
    $dailyImage = 'value.jpg';
    $alt = 'A comparison of the same drawing with different values.';
    $width = 'img-600';
    $heading = 'Monday is Value Day';
    $content = "Value concerns how dark or light part of an image is. The farther apart these values are, the easier it is for a viewer to distinguish between them. If you are precise with your values, your image will be more readable. One way to look at value is <b>black over white over gray</b> - in other words, each part of your image should only border different values, so they don't blend in with each other. Next Monday, try using value to make your art easier to understand.";
    $dailyClass = 'monday';
    break;
  case 'Tuesday':
    $dailyImage = 'lineart.jpg';
    $alt = 'A comparison of different styles of lineart.';
    $width = 'img-600';
    $heading = 'Tuesday is Line Art Day';
    $content = 'Line art concerns distinct lines that define an image. The way these lines are rendered changes the whole look of an image, whether the lines are thick, thin, varied, or nonexistent. For the most powerful effect, vary the thickness of the lines. Use thicker lines for the foreground, or to indicate shadows, while using thinner lines for the background, or for sunlit areas. Next Tuesday, try some different kinds of lineart to make your art stand out.';
    $dailyClass = "tuesday";
    break;
  case 'Wednesday':
    $dailyImage = 'colortheory.jpg';
    $alt = 'A comparison of the same drawing with different colors.';
    $width = 'img-600';
    $heading = 'Wednesday is Color Theory Day';
    $content = "Color theory concerns how different colors in an image work together. Colors that don't work well together can confuse an image, while different colors and color schemes when used properly can elevate an image and change its mood. For example, blue is calming, while red grabs attention. Complementary colors are vibrant, while analogous colors are soothing. Using warm and cool colors can also be powerful. Next Wednesday, try a new color scheme to change the mood of your work.";
    $dailyClass = 'wednesday';
    break;
  case 'Thursday':
    $dailyImage = 'reference.jpg';
    $width = 'img-595';
    $alt = 'A comparison of a drawing with its reference picture.';
    $heading = 'Thursday is Reference Day';
    $content = "Reference concerns how an artist uses photographs or real life to inform their art. Often, using reference can improve the accuracy of an image. Reference is especially helpful for technical aspects of art, such as lighting, perspective, anatomy, and fine detail. Without reference, images can sometimes look 'off' to the viewer. Reference helps the artist create work that is true to life. Next Thursday, use reference to create a more accurate image.";
    $dailyClass = 'thursday';
    break;
  case 'Friday':
    $dailyImage = 'environment.jpg';
    $alt = 'A drawing of a forest.';
    $width = 'img-600';
    $heading = 'Friday is Environment Day';
    $content = 'Environments concern the background of a piece, whether natural, artificial, or somewhere between. Having an environment grounds the action happening within it. Different environments can change the feel and context of an image. Reference can be very helpful for environments, like cities, forests, or hills. Next Friday, try creating some detailed environments to complement your piece.';
    $dailyClass = 'friday';
    break;
  case 'Saturday':
    $dailyImage = 'lineless.jpg';
    $alt = 'A drawing without lineart.';
    $width = 'img-300';
    $heading = 'Saturday is Lineless Day';
    $content = 'Lineless art is a type of art that creates shapes using blocks of color or texture, rather than defining the imagery with lines. This style of art is often softer and has a different mood than lined art. Creating images without lines can help with making the art clearer and more readable. Color theory and value are very important with lineless art, as the artist cannot rely on the lines to differentiate the shapes. Next Saturday, try creating lineless art.';
    $dailyClass = 'saturday';
    break;
  case 'Sunday':
    $dailyImage = 'hatching.jpg';
    $alt = 'A black and white ink drawing using hatching.';
    $width = 'img-306';
    $heading = "Sunday is Hatching Day";
    $content = 'Hatching is a drawing technique that consists of building up smaller lines to create a pattern. It is often used to create textures, add grays to a black and white image, or create a more realistic rendering of a surface. There are many different kinds of hatching, such as crosshatching, single lines, stippling, and more. Next Sunday, use hatching or other linework to add depth to your art.';
    $dailyClass = 'sunday';
    break;
}

include 'includes/header.php';
?>
<main>
  <h2><?php echo $pageHeading; ?></h2>
  <p>This page displays some of my favorite best practices when it comes to making art, from value and color theory to inking technique and use of reference.</p>
  <p>Try them out yourself, or just enjoy learning a bit more about my process!</p>
  <h3><?php echo $heading; ?></h3>
  <img class="<?php echo $width; ?>" src="images/<?php echo $dailyImage; ?>" alt="<?php echo $alt; ?>">
  <p><?php echo $content; ?></p>
</main>
<aside>
  <h4>Daily Practice</h4>
  <ul>
    <li><a href="daily.php?today=Monday">Monday: Value</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday: Lineart</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday: Color</a></li>
    <li><a href="daily.php?today=Thursday">Thursday: Reference</a></li>
    <li><a href="daily.php?today=Friday">Friday: Environments</a></li>
    <li><a href="daily.php?today=Saturday">Saturday: Lineless</a></li>
    <li><a href="daily.php?today=Sunday">Sunday: Hatching</a></li>
  </ul>
</aside>
<?php
include 'includes/footer.php';
