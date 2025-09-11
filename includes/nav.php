<nav>
    <ul>
        <li <?php if($currentPage == 'home') {echo 'class="active-page"';}?>><a href="index.php">Home</a></li>
        <li <?php if($currentPage == 'portfolio') {echo 'class="active-page"';}?>><a href="portfolio.php">Portfolio</a></li>
        <li <?php if($currentPage == 'about') {echo 'class="active-page"';}?>><a href="about.php">About</a></li>
        <li <?php if($currentPage == 'hire') {echo 'class="active-page"';}?>><a href="hire-me.php">Hire Me</a></li>
    </ul>
</nav>