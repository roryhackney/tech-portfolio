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
                    <source media="(min-width:1601px)" srcset="assets/home-hero-me-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/home-hero-me-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/home-hero-me-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/home-hero-me-medium.jpg">
                    <img src="assets/home-hero-me-small.jpg" alt="Photo of Rory Hackney smiling on the left next to abstract computer imagery on the right.">
                </picture>
                <div id="hero-text">
                    <p>Hi! I'm Rory.</p>
                    <p>I create powerful software and websites with intuitive UX designs.</p>
                    <div class="buttons-row">
                        <a href="/portfolio.php" class="button">Portfolio</a>
                        <a href="/hire-me.php" class="button">Hire Me</a>
                    </div>
                </div>
            </div>
            <section>
                <h1 id="h1">Home</h1>
                <p>I'm a web developer and software developer from Seattle, Washington with the technical skills and design background to communicate across teams and help your business make a big impact.</p>
                <div id="row">
                    <img id="profile" src="assets/rory-hackney.jpg" alt="Rory Hackney, a white person in a blue jacket, is smiling in front of some trees." width="500" height="600"/>
                    <div>
                        <p>As a full stack web developer and software developer, I have consistently combined my technical expertise with my strong design background and communication skills to develop technology that makes a positive impact.</p>
                        <p>Towards the end of my art degree, I took my first coding class and realized how much I enjoyed programming. After moving to Seattle, I completed a web development and design certificate, and began studying for my Computer Science BS. Despite working multiple jobs while in school, I was able to persevere and graduated June 2025 with a 3.99 GPA.</p>
                        <p>During the program, I found my passion for helping others both personally and professionally. I had the opportunity to complete an internship, practicum, and capstone working with small businesses helping their communities, and to help other students as a tutor. These projects allowed me to make a positive impact using the technical skills I developed during my degree, together with my design and communication skills.</p>
                        <p>Since graduating with my BS in Computer Science, I've continued to develop my skills by contributing to open source projects, improving my understanding of cloud computing, and working on websites for small businesses and nonprofits. As I begin my new career, I'm excited to continue learning, working hard, and making a positive impact with technology.</p>
                    </div>
                </div>
                <picture class="dark-hide">
                    <source media="(min-width:801px)" srcset="assets/timeline-horizontal-light.png">
                    <img src="assets/timeline-vertical-light.png" alt="Timeline, showing Art BFA (Began tutoring, First coding course) with an arrow pointing to Web Development and Design Certificate pointing to CS/IT tutor pointing to Computer Science BS (LSR Practicum, Surestart Internship, EllePower Capstone, Security Practicum) pointing to AWS Open Source U pointing to empty space / the future."/>
                </picture>
                <picture class="light-hide">
                    <source media="(min-width:801px)" srcset="assets/timeline-horizontal-dark.png">
                    <img src="assets/timeline-vertical-dark.png" alt="Timeline, showing Art BFA (Began tutoring, First coding course) with an arrow pointing to Web Development and Design Certificate pointing to CS/IT tutor pointing to Computer Science BS (LSR Practicum, Surestart Internship, EllePower Capstone, Security Practicum) pointing to AWS Open Source U pointing to empty space / the future."/>
                </picture>
                <p>Learn more about my skills and experience on my <a href="about.php">About</a> page.</p>
            </section>

<?php
        include 'includes/footer.php';