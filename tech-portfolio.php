<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/tech-portfolio-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/tech-portfolio-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/tech-portfolio-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/tech-portfolio-hero-medium.jpg">
                    <img src="assets/tech-portfolio-hero-small.jpg" alt="Website design in Figma which was turned into the site you're on now!">
                </picture>
                <div class="is-overlay"></div>
                <div class="hero-text-container">
                    <p class="hero-text">My web development and design portfolio. Optimized for mobile, with features including dark mode, a secure contact form, and passing HTML, CSS, and web accessibility standards.</p>
                </div>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                    <h2 class="title is-5 has-text-centered mb-2">Web Development and Design Portfolio</h2>
                    <p class="has-text-centered">Launched May 2022</p>
                    <div class="tags-div">
                        <h3 class="title is-6 mb-2">Tags</h3>
                        <ul>
                            <li>HTML, CSS, JavaScript</li>
                            <li>PHP, Bulma</li>
                            <li>Figma, Photoshop</li>
                            <li>Mobile Friendly</li>
                            <li>Dark Mode</li>
                            <li>Web Design</li>
                            <li>Full Stack Web Development</li>
                        </ul>
                    </div>
                    <div class="block">
                        <p class="desktop-margin">My tech portfolio showcases my web design and development skills, functioning both as a place to display my projects and resume, and as a strong portfolio piece itself. I wanted to really solidify my skills in Figma, especially creating mobile first designs, while also pushing my coding skills and following best practices as much as possible.</p>
                    </div><!--TODO: add this project to include and portfolio.php and footer-->
                    <picture class="small-image"> <!--TODO: replace with mobile images of tech portfolio-->
                        <source media="(min-width: 401px)"
                        srcset="assets/php-finale-daily-coffee-medium.jpg">
                        <img src="assets/php-finale-daily-coffee-small.jpg" alt="Webpage displaying daily coffee, in this case iced tea, using PHP to dynamically change content.">
                    </picture>
                    <div class="block">
                        <p>I started out by planning out my content, including page structure, text, and responsive images. I used Figma to design mobile-first wireframes, then tablet and finally desktop. Once I designed the look of the overall website, I focused on specific pages, and completed my grayscale visual design.</p>
                    </div>
                    <picture class="small-image">
                        <source media="(min-width: 401px)"
                        srcset="assets/tech-portfolio-figma-design-medium.jpg">
                        <img src="assets/tech-portfolio-figma-design-small.jpg" alt="Grayscale Figma design for this site in mobile, tablet, and desktop mode.">
                    </picture>
                    <div class="block">
                        <p>Once I was ready to start coding, I integrated HTML and CSS files with Bulma, then added programming logic and includes with PHP. I spent some time cleaning up old projects, built a secure contact form, and picked two color schemes, one for light and one for dark mode.</p>
                    </div>
                    <picture class="small-image">
                        <source media="(min-width: 401px)"
                        srcset="assets/tech-portfolio-code-examples-medium.jpg">
                        <img src="assets/tech-portfolio-code-examples-small.jpg" alt="HTML code (using Bulma), CSS, and PHP code for a secure contact form.">
                    </picture>
                    <div class="block">
                        <p>I used Bulma and CSS to develop mobile-first styles, and built out all the pages and projects I needed. I also put each page through HTML and CSS validators, and fixed accessibiity issues such as external link indications using acessiBe.</p>
                    </div>
                    <div class="block">
                        <p>Though this project took a while, I'm really proud of how it turned out, and I'm looking forward to adding to it as I build new skills and create new projects.</p>
                    </div>
                    <p class="has-text-centered">Thanks for checking out my project!</p>
                    <div class="buttons-row three">
                        <a class="button unset-width" href="https://www.figma.com/file/8MBgpwh2FIJIYmVuMOtujl/Web-Portfolio-Responsive-Design?node-id=0%3A1" target="blank" aria-label="Figma file - link opens in new tab">Figma file<span class="icon button-external"><img src="assets/arrow-up-right-from-square-solid.svg" alt="opens in new tab"></span></a>
                        <a class="button unset-width" href="https://github.com/roryhackney/tech-portfolio" target="_blank" aria-label="GitHub - link opens in new tab">GitHub<span class="icon button-external"><img src="assets/arrow-up-right-from-square-solid.svg" alt="opens in new tab"></span></a>
                        <a class="button urgent" href="hire-me.php">Hire Now</a>
                    </div>
                    <a href="portfolio.php" class="has-text-centered">Back to Portfolio</a>
                </div>
                <?php include 'includes/sidebar.php'; ?> <!-- aside-->
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
