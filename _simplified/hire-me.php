<?php 
    //title, class, h1, etc for the current page
    include 'includes/current-page.php';
    //contact form submission handling
    include 'includes/form-handler.php';
    //header, nav, main opener etc
    include 'includes/header.php';
?>
            <div id="hero">
                <picture>
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/general-hero-me-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/general-hero-me-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/general-hero-me-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/general-hero-me-medium.jpg">
                    <img src="assets/home-hero-me-small.jpg" alt="Photo of Rory Hackney smiling on the left next to abstract computer imagery on the right.">
                </picture>
            </div>
            <section>
                <h1 id="h1">Hire Me</h1>
                <p>I'm a web developer and software developer from Seattle, Washington with a design background, currently open to junior roles in web development, software development, or cloud computing. If you have a job or project in mind, or you'd like a resume highlighting the skills most relevant to your role, please reach out to me through my <a href="#form-container">contact form</a>, on <a href="<?= $linkedin ?>">LinkedIn</a>, or via email at <a href="mailto:"<?= $email ?>><?= $email ?></a>.</p>
                <div class="row">
                    <div>
                        <h2>My Resume</h2>
                        <!-- docs file, lines are broken on narrow screens -->
                        <iframe src="https://docs.google.com/document/d/17sbJVu88oK2qRVqSXO44_UdRUy3v37v9Zv0rKu0Y3PQ/preview" title="Resume"></iframe>
                        <!-- pdf file, unnecessary thick black border on some widths -->
                        <!-- <iframe src="https://drive.google.com/file/d/11AR3rTmh-DwMtPNx5Q-OQryiM3TIB57x/preview" title="Resume"></iframe> -->
                        <a href="https://docs.google.com/document/d/17sbJVu88oK2qRVqSXO44_UdRUy3v37v9Zv0rKu0Y3PQ/preview" target="_blank">View Resume (Drive)</a>
                    </div>
                </div>
                <div class="buttons-row">
                    <a href="/portfolio.php" class="button">Portfolio</a>
                    <a href="<?= $github ?>" target="_blank" class="button">GitHub</a>
                    <a href="<?= $linkedin ?>" target="_blank" class="button">LinkedIn</a>
                </div>
            </section>
            <section>
                <h2>Web Design Services</h2>
                <p>I've been designing and developing websites since 2020, with past client projects including <a href="post.php?title=EllePower%20Website%20-%20Capstone">EllePower</a> and <a href="https://www.linkedin.com/pulse/my-first-open-source-project-rory-hackney-s5wqc" target="_blank">Licton Springs Review</a>. I enjoy working directly with clients to create custom websites that help small businesses make a big impact. I develop websites using platforms such as WordPress, Systeme.IO, and SquareSpace, and static websites using HTML, CSS, and other coding languages.</p>
                <p>My current rate is 40$ per hour. A small, simple website may range from 15-30 hours, with more complex websites, including features like custom design with revisions, a large number of pages or content, and database development adding additional hours. In general, using templates will cost less than unique, customized designs. Please reach out if you'd like an estimate for your project.</p>
            </section>
<?php include 'includes/footer.php';