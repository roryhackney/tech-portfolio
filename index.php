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
                        <p>While earning my bachelor's degree in Computer Science after completing my web development certificate, I learned to create websites, algorithms, databases, and software using Java, Python, SQL, PHP, JavaScript, React, HTML, CSS, and AI, while reinforcing my new knowledge by working as an IT tutor.</p>

                        <p>During my CS program, I had the opportunity to complete an AI internship, web development practicum, cloud computing projects, security practicum, and capstone designing a website for EllePower supporting survivors of abuse. These projects allowed me to make a positive impact as a software and web developer while leveraging my design and communication skills on real world projects.</p>
                        
                        <p>Now, having graduated with my BS in Computer Science, I'm excited to continue learning, working hard, and contributing to technology that makes a difference in the world.</p>
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