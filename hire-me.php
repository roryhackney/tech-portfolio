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
                <h2>My Resume</h2>
                <div class="row">
                    <div>
                        <h3>Software Development</h3>
                        <img class="resume" src="https://drive.google.com/thumbnail?id=17sbJVu88oK2qRVqSXO44_UdRUy3v37v9Zv0rKu0Y3PQ&amp;sz=s4000" alt="Software development resume preview" width="500" height="647">
                        <a href="https://drive.google.com/file/d/11AR3rTmh-DwMtPNx5Q-OQryiM3TIB57x/preview" target="_blank">Software Development Resume (PDF) <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a>
                    </div>
                    <div>
                        <h3>Web Development</h3>
                        <img class="resume" src="https://drive.google.com/thumbnail?id=1wkpbW07my2I4w4FLOQHi8VDWaYc_rwRlgLwEufcJIx8&amp;sz=s4000" alt="Web development resume preview" width="500" height="647">
                        <a href="https://drive.google.com/file/d/1wkpbW07my2I4w4FLOQHi8VDWaYc_rwRlgLwEufcJIx8/preview" target="_blank">Web Development Resume (PDF) <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a>
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
                <p>I've been designing and developing websites since 2020, with past client projects including <a href="post.php?title=EllePower%20Website%20-%20Capstone">EllePower</a> and <a href="https://www.linkedin.com/pulse/my-first-open-source-project-rory-hackney-s5wqc" target="_blank">Licton Springs Review</a>. I enjoy working directly with clients to create custom websites that help small businesses make a big impact.</p>
                
                <p>I develop websites using platforms such as WordPress, Systeme.IO, and SquareSpace, and static websites using HTML, CSS, JavaScript, and other coding languages. I also enjoy creating unique website and UX designs in Figma, and customizing templates to create designs. Please reach out if you'd like an estimate for your project.</p>
            </section>
<?php include 'includes/footer.php';