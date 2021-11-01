<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/home-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/home-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/home-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/home-hero-medium.jpg">
                    <source media="(min-width:350px)" srcset="assets/home-hero-small.jpg">
                    <img src="assets/resume-hero-tiny.jpg" alt="">
                </picture>
                <div class="absolute">
                    <p class="hero-text">My fully responsive HTML resume, available in mobile, tablet, and desktop layouts, with light and dark mode enabled.</p>
                    <div class="columns is-mobile is-hidden-tablet">
                        <div class="column is-half">
                            <button class="button" id="mode-toggle-mobile">Dark Mode</button>
                            <a class="button" href="assets/resume.pdf" target="_blank">Print/PDF</a>
                            <a class="button" href="assets/resume.txt" target="_blank">Plain Text</a>
                        </div>
                        <div class="column is-half">
                            <button class="button" id="mobile-button-mobile">Mobile</button>
                            <button class="button" id="tablet-button-mobile">Tablet</button>
                            <button class="button" id="desktop-button-mobile">Desktop</button>
                        </div>
                    </div>
                    <div class="columns is-hidden-mobile is-vcentered">
                        <div class="column">
                            <a class="button" href="assets/resume.pdf" target="_blank">Print/PDF</a>
                            <a class="button" href="assets/resume.txt" target="_blank">Plain Text</a>
                        </div>
                        <div class="column">
                            <button class="button" id="mode-toggle">Dark Mode</button>
                        </div>
                        <div class="column">
                            <button class="button" id="mobile-button">Mobile</button>
                            <button class="button" id="tablet-button">Tablet</button>
                            <button class="button" id="desktop-button">Desktop</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div id="resume-div" class="resume-div">
                    <h2>Rory Hackney</h2>
                    <p>Web Developer and Designer</p>
                    <h3>Objective</h3>
                    <p>Web Developer seeking job with lots to do and even more to learn.</p>
                    <h3>Skills</h3>
                    <div class="columns is-multiline is-mobile">
                        <div class="column is-full-mobile is-half-tablet is-one-third-desktop">
                            <ul><li>HTML</li><li>CSS</li><li>JavaScript</li><li>PHP</li><li>GitHub</li></ul>
                        </div>
                        <p>Professional Summary</p>
                        <p>Full stack web developer passionate about using design and code to build accessible websites that help small businesses to save time
                            and increase profits. Passionate about challenging projects, learning new skills, and improving every day. 5+ years experience assisting
                            customers, as well as 2 years experience with precise bookkeeping and FUCK and background in design, BFA in Art, and Certificate in Web Dev
                            focusing on coding skills, usability, and database development.
                            Precise, detail-oriented, organized, teamwork, takes direction well, eager to learn, hardworking, efficient, determined</p>  
                    </div>
                </div>
            </div>
<?php include 'includes/footer.php'; ?>